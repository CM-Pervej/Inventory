<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Inventory System') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/8e69038194.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        
        <!-- Navigation -->
        <nav class="bg-white border-b border-gray-200 font-serif font-semibold">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex justify-between items-center h-16">
                    
                    <!-- Left Side -->
                    <div class="flex justify-between items-center h-16 px-4">
                        <!-- Logo -->
                        <div class="text-2xl text-indigo-900 flex items-center gap-2 font-semibold">
                            <i class="fa-solid fa-warehouse"></i>
                            <a href="{{ route('dashboard') }}">
                                {{ config('app.name', 'Inventory System') }}
                            </a>
                        </div>

                        <!-- Menu Links -->
                        <div class="flex gap-6 sm:ml-10">
                            <a href="{{ route('categories.index') }}" 
                            class="inline-block text-gray-700 hover:text-blue-500 {{ request()->routeIs('categories.*') ? 'text-blue-500 border-b-2 border-blue-500' : '' }}"> Categories </a>

                            <a href="{{ route('sub-categories.index') }}" 
                            class="inline-block text-gray-700 hover:text-blue-500 {{ request()->routeIs('sub-categories.*') ? 'text-blue-500 border-b-2 border-blue-500' : '' }}"> Sub-categories </a>

                            <a href="{{ route('brands.index') }}" 
                            class="inline-block text-gray-700 hover:text-blue-500 {{ request()->routeIs('brands.*') ? 'text-blue-500 border-b-2 border-blue-500' : '' }}"> Brands </a>

                            <a href="{{ route('suppliers.index') }}" 
                            class="inline-block text-gray-700 hover:text-blue-500 {{ request()->routeIs('suppliers.*') ? 'text-blue-500 border-b-2 border-blue-500' : '' }}"> Suppliers </a>

                            <a href="{{ route('products.index') }}" 
                            class="inline-block text-gray-700 hover:text-blue-500 {{ request()->routeIs('products.*') ? 'text-blue-500 border-b-2 border-blue-500' : '' }}"> Products </a>
                        </div>
                    </div>

                    <!-- Right Side (User Dropdown) -->
                    <div class="w-max">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" 
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>
