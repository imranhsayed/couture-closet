<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use Exception;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Products';
        if (\Auth::check() && \Auth::user()->is_admin) {
            $products = Product::whereNull('deleted_at')->paginate(10);
            return view('admin.products.index', compact('title', 'products'));
        }


	    $title = "Single Product!";

        $products =Product::with('images')->paginate(16);
        
        
        $categories = Category::where('name', 'Size')->get();
        $brands = Category::where('name', 'Brand')->get();
        $demographies = Category::where('name', 'demography')->get();
        //$product = Product::with(['categories', 'images'])->find($product->id);

	    return view( 'product.index', compact( 'title', 'products','categories','brands','demographies') );
    }

    public function fetchCategories()
    {

        // Pass the categories to the view
        return view('layouts.app', compact('categories'));
    }

    public function fetchBrands()
    {
        return view('layouts.app', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Products';
        $categories = $this->getCategories();
        return view('admin.products.create', compact('title', 'categories'));
    }

    /**
     * Get all product's categories
     * @return array
     */
    private function getCategories(): array
    {
        // get all categories
        $categories = [];
        $categoryNames = $this->getCategoryNames();
        foreach ($categoryNames as $categoryName) {
            $categoryValue = Category::where('name', $categoryName)->distinct()->get();
            $categories[$categoryName] = $categoryValue;
        }
        return $categories;
    }

    /**
     * Get all category names
     * @return mixed
     */
    private function getCategoryNames()
    {
        return Category::distinct()->pluck('name');
    }

    /**
     * Set primary image for the product
     * @return void
     */
    public function setPrimaryImage(string $productId, string $imageId)
    {
        // check product and image relationship
        $productImage = ProductImage::where('product_id', $productId)
                                    ->where('id', $imageId)->first();
        if ($productImage) {
            // set other images to 0
            ProductImage::where('product_id', $productId)
                        ->update(['is_primary' => 0]);
            // set this image as primary image
            $productImage->is_primary = 1;
            $productImage->save();
            session()->flash("admin.success", "Set primary image for product successfully!");
        } else {
            session()->flash("admin.success", "Set primary image for product failed!");
        }
        return back();
    }

    /**
     * delete image from product
     * @param string $productId
     * @param string $imageId
     * @return void
     */
    public function deleteImage(string $productId, string $imageId)
    {
        $deleted = ProductImage::where('product_id', $productId)
                               ->where('id', $imageId)->first();
        if ($deleted) {
            $deleted->delete();
            session()->flash('admin.success', 'Deleted product image successfully!');
        } else {
            session()->flash('admin.error', 'Deleted product image failed, You dont have this image!');
        }
        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        try {
            DB::beginTransaction();
            // store data after validated
            $requestParams = $request->all();
            // save product
            $product = [
                'sku' => $requestParams['sku'],
                'name' => $requestParams['name'],
                'description' => $requestParams['description'],
                'price' => $requestParams['price'],
                'stock_quantity' => $requestParams['stock_quantity']
            ];
            $created = Product::create($product);

            if ($created) {
                $productId = $created->id;
                $productImages = $requestParams['images'] ?? [];
                // save product images relationship
                foreach ($productImages as $productImageFile) {
                    $fileName = time() . '_' . $productImageFile->getClientOriginalName();
                    $productImageFile->storeAs('images', $fileName, 'public');

                    $productImage = [
                        'product_id' => $productId,
                        'image_url' => 'images/' . $fileName,
                        'display_order' => DB::raw('display_order + 1')
                    ];
                    ProductImage::create($productImage);
                }

                // save product and category relationship
                foreach ($requestParams['categories'] as $categoryId) {
                    $productCategory = [
                        'product_id' => $productId,
                        'category_id' => $categoryId
                    ];
                    ProductCategory::create($productCategory);
                }
            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.products.index')->with("admin.error", "Saved Product failed: " . $e->getMessage());
        }
        return redirect()->route('admin.products.index')->with("admin.success", "Saved product successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product = Product::with(['categories', 'images'])
            ->find($product->id);

        $all_products = Product::with('images')->paginate(4);

        $categories = Category::where('name', 'Size')->get();

        

        //return view('product.show', compact('product','all_products','categories'));

        $reviews = ProductReview::where('product_id', $product->id)
                            ->with('user') 
                            ->get();
        
        return view('product.show', compact('product','all_products','categories', 'reviews'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // load product's all categories
        $title = "Products";
        $categories = $this->getCategories();
        $product->load('categories', 'images');

        // parse product categories
        $productCategories = $product->categories;
        $productCategoryIds = [];
        foreach ($productCategories as $productCategory)
        {
            $productCategoryIds[] = $productCategory->id;
        }
        $productCategoryIds = array_unique($productCategoryIds);
        return view('admin.products.edit', compact( 'title', 'product' , 'categories' , 'productCategoryIds' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        try {
            DB::beginTransaction();
            // update data after validated
            $requestParams = $request->all();
            // update product
            $product->sku = $requestParams['sku'];
            $product->name = $requestParams['name'];
            $product->description = $requestParams['description'];
            $product->price = $requestParams['price'];
            $product->stock_quantity = $requestParams['stock_quantity'];
            $updated = $product->save();
            if ($updated) {
                $productImages = $requestParams['images'] ?? [];
                // save new product images relationship
                foreach ($productImages as $productImageFile) {
                    $fileName = time() . '_' . $productImageFile->getClientOriginalName();
                    $productImageFile->storeAs('images', $fileName, 'public');
                    $productImage = [
                        'product_id' => $product->id,
                        'image_url' => 'images/' . $fileName,
                        'display_order' => DB::raw('display_order + 1')
                    ];
                    ProductImage::create($productImage);
                }
                // query latest category for current product
                $existsCategories = ProductCategory::where('product_id', $product->id)->pluck('category_id')->toArray();
                // update product and category relationship
                foreach ($requestParams['categories'] as $categoryId) {
                    if (!in_array($categoryId, $existsCategories)) {
                        // not exists
                        $productCategory = [
                            'product_id' => $product->id,
                            'category_id' => $categoryId
                        ];
                        ProductCategory::create($productCategory);
                    } else {
                        // exists
                        $existsCategories = array_diff($existsCategories, [$categoryId]);
                    }
                }

                // the rest of categories need to be deleted
                foreach ($existsCategories as $categoryId)
                {
                    ProductCategory::where('product_id', $product->id)
                                   ->where('category_id', $categoryId)
                                   ->delete();
                }
            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.products.index')->with("admin.error", "Updated Product failed: " . $e->getMessage());
        }
        return redirect()->route('admin.products.index')->with("admin.success", "Updated product successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->deleted_at = now();
        if ($product->save())
        {
            return redirect()->route('admin.products.index')->with("admin.success", "Deleted product successfully!");
        }
        return redirect()->route('admin.products.index')->with("admin.error", "Deleted Product failed!");
    }
}
