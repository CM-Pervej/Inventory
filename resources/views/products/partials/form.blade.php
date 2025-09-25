<div>
    <label class="block">Name</label>
    <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" class="w-full border px-2 py-1">
</div>

<div>
    <label class="block">Category</label>
    <select name="category_id" class="w-full border px-2 py-1">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>

<div>
    <label class="block">Sub Category</label>
    <select name="sub_category_id" class="w-full border px-2 py-1">
        @foreach ($subCategories as $subCategory)
            <option value="{{ $subCategory->id }}" {{ old('sub_category_id', $product->sub_category_id ?? '') == $subCategory->id ? 'selected' : '' }}>
                {{ $subCategory->name }}
            </option>
        @endforeach
    </select>
</div>

<div>
    <label class="block">Brand</label>
    <select name="brand_id" class="w-full border px-2 py-1">
        @foreach ($brands as $brand)
            <option value="{{ $brand->id }}" {{ old('brand_id', $product->brand_id ?? '') == $brand->id ? 'selected' : '' }}>
                {{ $brand->name }}
            </option>
        @endforeach
    </select>
</div>

<div>
    <label class="block">Supplier</label>
    <select name="supplier_id" class="w-full border px-2 py-1">
        @foreach ($suppliers as $supplier)
            <option value="{{ $supplier->id }}" {{ old('supplier_id', $product->supplier_id ?? '') == $supplier->id ? 'selected' : '' }}>
                {{ $supplier->name }}
            </option>
        @endforeach
    </select>
</div>

<div>
    <label class="block">SKU</label>
    <input type="text" name="sku" value="{{ old('sku', $product->sku ?? '') }}" class="w-full border px-2 py-1">
</div>

<div>
    <label class="block">Size</label>
    <select name="size" class="w-full border px-2 py-1">
        <option value="">--Select--</option>
        @foreach (['S','M','L','XL'] as $size)
            <option value="{{ $size }}" {{ old('size', $product->size ?? '') == $size ? 'selected' : '' }}>
                {{ $size }}
            </option>
        @endforeach
    </select>
</div>

<div>
    <label class="block">Color</label>
    <input type="text" name="color" value="{{ old('color', $product->color ?? '') }}" class="w-full border px-2 py-1">
</div>

<div>
    <label class="block">Material</label>
    <input type="text" name="material" value="{{ old('material', $product->material ?? '') }}" class="w-full border px-2 py-1">
</div>

<div>
    <label class="block">Gender</label>
    <select name="gender" class="w-full border px-2 py-1">
        <option value="">--Select--</option>
        @foreach (['Men','Women','Kids','Unisex'] as $gender)
            <option value="{{ $gender }}" {{ old('gender', $product->gender ?? '') == $gender ? 'selected' : '' }}>
                {{ $gender }}
            </option>
        @endforeach
    </select>
</div>

<div>
    <label class="block">Purchase Price</label>
    <input type="number" step="0.01" name="purchase_price" value="{{ old('purchase_price', $product->purchase_price ?? '') }}" class="w-full border px-2 py-1">
</div>

<div>
    <label class="block">Selling Price</label>
    <input type="number" step="0.01" name="selling_price" value="{{ old('selling_price', $product->selling_price ?? '') }}" class="w-full border px-2 py-1">
</div>

<div>
    <label class="block">Purchase Quantity</label>
    <input type="number" name="purchase_quantity" value="{{ old('purchase_quantity', $product->purchase_quantity ?? '') }}" class="w-full border px-2 py-1">
</div>

<div>
    <label class="block">Stock Quantity</label>
    <input type="number" name="stock_quantity" value="{{ old('stock_quantity', $product->stock_quantity ?? '') }}" class="w-full border px-2 py-1">
</div>

<div>
    <label class="block">Image</label>
    <input type="file" name="image" class="w-full border px-2 py-1">
    @if(isset($product) && $product->image)
        <img src="{{ asset('storage/'.$product->image) }}" class="h-16 mt-2">
    @endif
</div>

<div>
    <label class="block">Status</label>
    <select name="status" class="w-full border px-2 py-1">
        @foreach (['Active','Out of Stock','Discontinued'] as $status)
            <option value="{{ $status }}" {{ old('status', $product->status ?? '') == $status ? 'selected' : '' }}>
                {{ $status }}
            </option>
        @endforeach
    </select>
</div>
