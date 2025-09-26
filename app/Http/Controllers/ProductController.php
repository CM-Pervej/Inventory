<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'subCategory', 'brand', 'supplier'])->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $brands = Brand::all();
        $suppliers = Supplier::all();
        return view('products.create', compact('categories', 'subCategories', 'brands', 'suppliers'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'brand_id' => 'required|exists:brands,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'sku' => 'required|string|unique:products,sku',
            'size' => 'nullable|string|max:100',
            'color' => 'nullable|string|max:100',
            'material' => 'nullable|string|max:100',
            'gender' => 'nullable|in:Men,Women,Kids,Unisex',
            'purchase_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'purchase_quantity' => 'required|integer',
            'stock_quantity' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|in:Active,Out of Stock,Discontinued',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $brands = Brand::all();
        $suppliers = Supplier::all();
        return view('products.edit', compact('product', 'categories', 'subCategories', 'brands', 'suppliers'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'brand_id' => 'required|exists:brands,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'sku' => 'required|string|unique:products,sku,' . $product->id,
            'size' => 'nullable|string|max:100',
            'color' => 'nullable|string|max:100',
            'material' => 'nullable|string|max:100',
            'gender' => 'nullable|in:Men,Women,Kids,Unisex',
            'purchase_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'purchase_quantity' => 'required|integer',
            'stock_quantity' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|in:Active,Out of Stock,Discontinued',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
