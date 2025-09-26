<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Inventory Dashboard
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto px-4">
        <!-- Summary Cards -->
        <div class="grid grid-cols-5 gap-6 mb-6">
            <a href="{{ route('categories.index') }}">
                <div class="card bg-blue-500 text-white p-4 shadow-lg rounded-lg hover:shadow-2xl transition">
                    <div class="text-sm">Total Categories</div>
                    <div class="text-2xl font-bold">{{ $totalCategories }}</div>
                </div>
            </a>

            <a href="{{ route('sub-categories.index') }}">
                <div class="card bg-indigo-500 text-white p-4 shadow-lg rounded-lg hover:shadow-2xl transition">
                    <div class="text-sm">Total Sub-Categories</div>
                    <div class="text-2xl font-bold">{{ $totalSubCategories }}</div>
                </div>
            </a>

            <a href="{{ route('products.index') }}">
                <div class="card bg-green-500 text-white p-4 shadow-lg rounded-lg hover:shadow-2xl transition">
                    <div class="text-sm">Total Products</div>
                    <div class="text-2xl font-bold">{{ $totalProducts }}</div>
                </div>
            </a>

            <a href="{{ route('suppliers.index') }}">
                <div class="card bg-yellow-500 text-white p-4 shadow-lg rounded-lg hover:shadow-2xl transition">
                    <div class="text-sm">Total Suppliers</div>
                    <div class="text-2xl font-bold">{{ $totalSuppliers }}</div>
                </div>
            </a>

            <a href="{{ route('brands.index') }}">
                <div class="card bg-red-500 text-white p-4 shadow-lg rounded-lg hover:shadow-2xl transition">
                    <div class="text-sm">Total Brands</div>
                    <div class="text-2xl font-bold">{{ $totalBrands }}</div>
                </div>
            </a>
        </div>

        <!-- Recent Products Table -->
        <div class="bg-white shadow rounded-lg p-4">
            <h3 class="text-lg font-semibold mb-4">Recent Products</h3>
            <div class="overflow-x-auto">
                <table class="table-auto w-full border-collapse border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 border">#</th>
                            <th class="px-4 py-2 border">Name</th>
                            <th class="px-4 py-2 border">Category</th>
                            <th class="px-4 py-2 border">Sub-Category</th>
                            <th class="px-4 py-2 border">Brand</th>
                            <th class="px-4 py-2 border">Quantity</th>
                            <th class="px-4 py-2 border">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $index => $product)
                        <tr class="{{ $index % 2 == 1 ? 'bg-gray-50' : '' }}">
                            <td class="px-4 py-2 border">{{ $index + 1 }}</td>
                            <td class="px-4 py-2 border">{{ $product->name }}</td>
                            <td class="px-4 py-2 border">{{ $product->category->name ?? '-' }}</td>
                            <td class="px-4 py-2 border">{{ $product->subCategory->name ?? '-' }}</td>
                            <td class="px-4 py-2 border">{{ $product->brand->name ?? '-' }}</td>
                            <td class="px-4 py-2 border">{{ $product->quantity }}</td>
                            <td class="px-4 py-2 border">${{ $product->price }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="px-4 py-2 border text-center">No products found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
