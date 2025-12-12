@extends('layout')

@section('content')
<!-- Hero Section -->
<div class="bg-blue-600 text-white rounded-lg p-12 mb-8 flex flex-col items-center text-center">
    <h1 class="text-4xl font-bold mb-4">Welcome to GadgetStore</h1>
    <p class="mb-6 text-lg">The best tech gadgets at unbeatable prices</p>
    <a href="/products" class="bg-white text-blue-600 px-6 py-3 rounded font-bold hover:bg-gray-100">Shop Now</a>
</div>

<!-- Featured Products -->
<h2 class="text-2xl font-bold mb-4">Featured Products</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach($gadgets as $gadget)
        <product-card :product='@json($gadget)'></product-card>
    @endforeach
</div>
@endsection
