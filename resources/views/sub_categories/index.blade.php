<x-app-layout>
<div class="max-w-4xl mx-auto mt-10">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Sub-Categories</h1>
        <a href="{{ route('sub-categories.create') }}" class="btn btn-primary">+ Add Sub-Category</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success mb-4">{{ session('success') }}</div>
    @endif

    <div class="overflow-x-auto">
        <table class="table w-full">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($subCategories as $subCategory)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $subCategory->category->name }}</td>
                        <td>{{ $subCategory->name }}</td>
                        <td>{{ $subCategory->description }}</td>
                        <td class="text-right space-x-2">
                            <a href="{{ route('sub-categories.edit', $subCategory->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('sub-categories.destroy', $subCategory->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-error" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No sub-categories found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</x-app-layout>
