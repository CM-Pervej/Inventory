<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome to Inventory Management System') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Greeting -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    👋 Hello <strong>{{ Auth::user()->name }}</strong>,  
                    you are logged in!
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <div class="card bg-base-100 shadow-md">
                    <div class="card-body text-center">
                        <h2 class="card-title">Categories</h2>
                        <p>Manage product categories</p>
                        <a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm mt-2">Go</a>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-md">
                    <div class="card-body text-center">
                        <h2 class="card-title">Products</h2>
                        <p>View and manage products</p>
                        <a href="#" class="btn btn-primary btn-sm mt-2">Go</a>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-md">
                    <div class="card-body text-center">
                        <h2 class="card-title">Suppliers</h2>
                        <p>Track suppliers</p>
                        <a href="#" class="btn btn-primary btn-sm mt-2">Go</a>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-md">
                    <div class="card-body text-center">
                        <h2 class="card-title">Stock</h2>
                        <p>Stock movements & reports</p>
                        <a href="#" class="btn btn-primary btn-sm mt-2">Go</a>
                    </div>
                </div>
            </div>

            <!-- Extra -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    This is your main dashboard.  
                    Use the navigation above or quick links to manage your inventory.
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
