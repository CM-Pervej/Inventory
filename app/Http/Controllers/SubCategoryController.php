<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the sub-categories.
     */
    public function index()
    {
        $subCategories = SubCategory::with('category')->latest()->paginate(10);
        return view('sub_categories.index', compact('subCategories'));
    }

    /**
     * Show the form for creating a new sub-category.
     */
    public function create()
    {
        $categories = Category::all();
        return view('sub_categories.create', compact('categories'));
    }

    /**
     * Store a newly created sub-category in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255|unique:sub_categories,name',
            'description' => 'nullable|string',
        ]);

        SubCategory::create($request->all());

        return redirect()->route('sub-categories.index')
                         ->with('success', 'Sub-category created successfully.');
    }

    /**
     * Show the form for editing the specified sub-category.
     */
    public function edit(SubCategory $subCategory)
    {
        $categories = Category::all();
        return view('sub_categories.edit', compact('subCategory', 'categories'));
    }

    /**
     * Update the specified sub-category in storage.
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255|unique:sub_categories,name,' . $subCategory->id,
            'description' => 'nullable|string',
        ]);

        $subCategory->update($request->all());

        return redirect()->route('sub-categories.index')
                         ->with('success', 'Sub-category updated successfully.');
    }

    /**
     * Remove the specified sub-category from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return redirect()->route('sub-categories.index')
                         ->with('success', 'Sub-category deleted successfully.');
    }
}
