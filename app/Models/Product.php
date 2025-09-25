<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'sub_category_id',
        'brand_id',
        'supplier_id',
        'sku',
        'size',
        'color',
        'material',
        'gender',
        'purchase_price',
        'selling_price',
        'purchase_quantity',
        'stock_quantity',
        'image',
        'status',
    ];

    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
