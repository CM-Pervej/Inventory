<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Products</h2>

        <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Product</a>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-2 mt-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        @foreach($products->groupBy(fn($p) => $p->category->name) as $category => $categoryProducts)
            <div class="mt-8">
                <h3 class="text-xl font-bold mb-2 bg-gray-300 px-2 py-1 rounded">Category: {{ $category ?? '-' }}</h3>

                @foreach($categoryProducts->groupBy(fn($p) => $p->subCategory->name) as $subCategory => $subCategoryProducts)
                    <div class="mt-4">
                        <h4 class="text-lg font-semibold mb-2 bg-gray-100 px-2 py-1 rounded">Sub Category: {{ $subCategory ?? '-' }}</h4>

                        <div class="overflow-x-auto">
                            <table class="table-auto border border-gray-300 min-w-[1200px] text-sm">
                                <thead class="bg-gray-200 text-left">
                                    <tr>
                                        <th class="px-2 py-1 border">ID</th>
                                        <th class="px-2 py-1 border">Image</th>
                                        <th class="px-2 py-1 border">Name</th>
                                        <th class="px-2 py-1 border">Brand</th>
                                        <th class="px-2 py-1 border">Supplier</th>
                                        <th class="px-2 py-1 border">SKU</th>
                                        <th class="px-2 py-1 border">Size</th>
                                        <th class="px-2 py-1 border">Color</th>
                                        <th class="px-2 py-1 border">Material</th>
                                        <th class="px-2 py-1 border">Gender</th>
                                        <th class="px-2 py-1 border">Price</th>
                                        <th class="px-2 py-1 border">Purchase</th>
                                        <th class="px-2 py-1 border">Stock</th>
                                        <th class="px-2 py-1 border">Quantity</th>
                                        <th class="px-2 py-1 border">Status</th>
                                        <th class="px-2 py-1 border">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($subCategoryProducts as $index => $product)
                                    <tr class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }}">
                                        <!-- List Number -->
                                        <td class="px-2 py-1 border whitespace-nowrap">{{ $index + 1 }}</td>

                                        <td class="px-2 py-1 border whitespace-nowrap">
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-16 h-16 object-cover rounded">
                                        </td>
                                        <td class="px-2 py-1 border whitespace-nowrap">{{ $product->name }}</td>
                                        <td class="px-2 py-1 border whitespace-nowrap">{{ $product->brand->name ?? '-' }}</td>
                                        <td class="px-2 py-1 border whitespace-nowrap">{{ $product->supplier->name ?? '-' }}</td>
                                        <td class="px-2 py-1 border whitespace-nowrap">{{ $product->sku }}</td>
                                        <td class="px-2 py-1 border whitespace-nowrap text-center">{{ $product->size }}</td>
                                        <td class="px-2 py-1 border whitespace-nowrap">{{ $product->color }}</td>
                                        <td class="px-2 py-1 border whitespace-nowrap">{{ $product->material }}</td>
                                        <td class="px-2 py-1 border whitespace-nowrap">{{ $product->gender }}</td>
                                        <td class="px-2 py-1 border whitespace-nowrap text-right">{{ $product->selling_price }}</td>
                                        <td class="px-2 py-1 border whitespace-nowrap text-right">{{ $product->purchase_price }}</td>
                                        <td class="px-2 py-1 border whitespace-nowrap text-right">{{ $product->stock_quantity }}</td>
                                        <td class="px-2 py-1 border whitespace-nowrap text-right">{{ $product->purchase_quantity }}</td>
                                        <td class="px-2 py-1 border whitespace-nowrap">{{ $product->status }}</td>
                                        <td class="px-2 py-1 border whitespace-nowrap">
                                            <a href="{{ route('products.edit', $product) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</x-app-layout>
