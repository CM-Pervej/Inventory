<x-app-layout>
    <div class="max-w-2xl mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-6">Add Supplier</h1>

        @if ($errors->any())
            <div class="alert alert-error mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('suppliers.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block mb-1">Name</label>
                <input type="text" name="name" class="input input-bordered w-full" value="{{ old('name') }}" required>
            </div>
            <div class="mb-4">
                <label class="block mb-1">Email</label>
                <input type="email" name="email" class="input input-bordered w-full" value="{{ old('email') }}">
            </div>
            <div class="mb-4">
                <label class="block mb-1">Phone</label>
                <input type="text" name="phone" class="input input-bordered w-full" value="{{ old('phone') }}">
            </div>
            <div class="mb-4">
                <label class="block mb-1">Address</label>
                <textarea name="address" class="textarea textarea-bordered w-full">{{ old('address') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</x-app-layout>
