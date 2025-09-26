<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Supplier;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCategories = Category::count();
        $totalSubCategories = SubCategory::count();
        $totalProducts = Product::count();
        $totalSuppliers = Supplier::count();
        $totalBrands = Brand::count();

        $products = Product::with(['category', 'brand'])
                           ->latest()
                           ->take(10) // Show recent 10 products
                           ->get();

        return view('dashboard', compact(
            'totalCategories',
            'totalSubCategories',
            'totalProducts',
            'totalSuppliers',
            'totalBrands',
            'products'
        ));
    }
}
