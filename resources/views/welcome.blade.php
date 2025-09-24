<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Navbar -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center px-6 py-4">
            <h1 class="text-2xl font-bold text-indigo-600">InventoryPro</h1>
            <nav class="space-x-6">
                <a href="/" class="text-gray-600 hover:text-indigo-600">Home</a>
                <a href="/categories" class="text-gray-600 hover:text-indigo-600">Categories</a>
                <a href="/products" class="text-gray-600 hover:text-indigo-600">Products</a>
                <a href="/suppliers" class="text-gray-600 hover:text-indigo-600">Suppliers</a>
                <a href="/login" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">Login</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-indigo-600 text-white">
        <div class="container mx-auto px-6 py-20 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Modern Inventory Management System
            </h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">
                Track your stock, manage suppliers, and simplify your shop operations 
                with our powerful and user-friendly system.
            </p>
            <a href="/register" class="bg-white text-indigo-600 px-6 py-3 rounded-lg font-medium hover:bg-gray-100">
                Get Started
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="container mx-auto px-6 py-16">
        <div class="grid md:grid-cols-3 gap-10 text-center">
            <div class="p-6 bg-white shadow rounded-xl hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-3 text-indigo-600">📦 Product Management</h3>
                <p>Organize products by category, brand, and supplier with real-time stock updates.</p>
            </div>
            <div class="p-6 bg-white shadow rounded-xl hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-3 text-indigo-600">📊 Reports & Analytics</h3>
                <p>Generate sales and stock reports to make smarter business decisions.</p>
            </div>
            <div class="p-6 bg-white shadow rounded-xl hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-3 text-indigo-600">👥 User Roles</h3>
                <p>Assign roles to employees and manage access with secure authentication.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 InventoryPro. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
