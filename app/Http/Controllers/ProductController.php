<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
	    $title = "Single Product!";

        $products =Product::with('images')->get();

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

    public function fetchBrands(){
        return view('layouts.app', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
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
