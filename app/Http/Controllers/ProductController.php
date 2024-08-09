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
        if (\Auth::check() && \Auth::user()->is_admin)
        {
            $title = 'Products';
            $products = Product::whereNull('deleted_at')->paginate(10);
            return view('admin.products.index', compact('title', 'products' ) );
        }


	    $title = "Single Product!";

        $products =Product::with('images')->paginate(16);
        
        $categories = Category::where('name', 'Size')->get();

        $brands = Category::where('name', 'Brand')->get();

        $demographies = Category::where('name', 'demography')->get();

	    return view( 'product.index', compact( 'title', 'products','categories','brands','demographies') );
        
    }

    public function fetchCategories()
    {

        // Pass the categories to the view
        return view('layouts.app', compact('categories'));
    }

    public function fetchBrands(){
        return view('layouts.app', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (\Auth::check() && \Auth::user()->is_admin)
        {
            $title = 'Products';

            // get all categories
            $categories = [];
            $categoryNames = $this->getCategoryNames();
            foreach ($categoryNames as $categoryName)
            {
                $categoryValue = Category::where('name', $categoryName)->distinct()->get();
                $categories[$categoryName] = $categoryValue;
            }

            return view('admin.products.create', compact( 'title', 'categories' ) );
        }
    }

    /**
     * Get all category names
     * @return mixed
     */
    private function getCategoryNames() {
        return Category::distinct()->pluck('name');
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
                $productImages = $requestParams['images'];
                // save product images relationship
                foreach ($productImages as $productImageFile)
                {
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
                foreach ($requestParams['categories'] as $categoryId)
                {
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


        return view('product.show', compact('product','all_products','categories'));

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
