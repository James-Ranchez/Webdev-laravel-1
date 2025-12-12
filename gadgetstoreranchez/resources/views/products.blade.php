@extends('layout')

@section('content')
<h1 class="text-3xl font-bold mb-6">Our Products</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach($gadgets as $gadget)
        <product-card :product='@json($gadget)'></product-card>
    @endforeach
</div>
@endsection
