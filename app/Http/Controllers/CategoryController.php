<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ProductCategory;
use Exception;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Category';
        if (\Auth::check() && \Auth::user()->is_admin) {
            $categories = Category::paginate(10);
            return view('admin.category.index', compact('title','categories'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Category';
        return view('admin.category.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'value' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
    
        try {
            // Create a new category
            $category = new Category();
            $category->name = $request->input('name');
            $category->value = $request->input('value');
            $category->description = $request->input('description');
            $category->save();
    
            // Redirect with success message
            return redirect()->route('admin.category.index')->with('admin.success', 'Category created successfully.');
        } catch (Exception $e) {
            // Handle exceptions and errors
            return redirect()->route('admin.category.index')->with('admin.error', 'Failed to create category: ' . $e->getMessage());
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit Category';

        $category = Category::findorFail($id);

        return view('admin.category.edit', compact('title','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'value' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
    
        try {
            // Find the existing category
            $category = Category::findOrFail($id);
    
            // Update category fields
            $category->name = $request->input('name');
            $category->value = $request->input('value');
            $category->description = $request->input('description');
            $category->save();
    
            // Redirect with success message
            return redirect()->route('admin.category.index')->with('admin.success', 'Category updated successfully.');
        } catch (Exception $e) {
            // Handle exceptions and errors
            return redirect()->route('admin.category.index')->with('admin.error', 'Failed to update category: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        
        // Delete the category
        if ($category->delete()) {
            return redirect()->route('admin.category.index')->with("admin.success", "Deleted category successfully!");
        }

        return redirect()->route('admin.category.index')->with("admin.error", "Deleted category failed!");
        }
}
