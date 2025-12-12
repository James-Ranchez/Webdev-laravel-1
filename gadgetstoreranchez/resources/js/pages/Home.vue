<template>
    <div>
        <Navbar />

        <section class="pt-32 pb-20 bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-center">
            <h1 class="text-5xl font-bold">Welcome to Ranchez Gadget Store!</h1>
            <p class="text-xl mt-4">Your one-stop shop for the latest tech gadgets.</p>
            <a href="/products" class="mt-6 inline-block bg-white text-blue-700 font-bold px-6 py-3 rounded-lg shadow hover:bg-gray-200">
                Shop Now
            </a>
        </section>

        <section class="max-w-6xl mx-auto mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white shadow p-6 rounded-xl text-center">
                <h3 class="text-xl font-bold">Smartphones</h3>
                <p class="text-gray-600 mt-2">Latest models with the fastest processors.</p>
            </div>
            <div class="bg-white shadow p-6 rounded-xl text-center">
                <h3 class="text-xl font-bold">Laptops</h3>
                <p class="text-gray-600 mt-2">High-performance laptops for work and gaming.</p>
            </div>
            <div class="bg-white shadow p-6 rounded-xl text-center">
                <h3 class="text-xl font-bold">Accessories</h3>
                <p class="text-gray-600 mt-2">Headphones, chargers, cases and more.</p>
            </div>
        </section>
    </div>
</template>

<script setup>
import Navbar from '../components/Navbar.vue';
</script>
