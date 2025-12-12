<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gadget Store</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">

<!-- Navbar -->
<nav class="bg-white shadow-md">
    <div class="container mx-auto flex justify-between items-center p-4">
        <a href="/" class="text-xl font-bold text-blue-600">GadgetStore</a>
        <ul class="flex gap-6">
            <li><a href="/" class="hover:text-blue-500">Home</a></li>
            <li><a href="/products" class="hover:text-blue-500">Products</a></li>
            <li><a href="/about" class="hover:text-blue-500">About Us</a></li>
            <li><a href="/contact" class="hover:text-blue-500">Contact Us</a></li>
        </ul>
        <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Cart</a>
    </div>
</nav>

<div id="app" class="container mx-auto p-6">
    @yield('content')
</div>

</body>
</html>
