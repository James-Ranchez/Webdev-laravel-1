<template>
    <div>
        <Navbar />

        <div class="pt-32 max-w-6xl mx-auto">
            <h1 class="text-4xl font-bold mb-6">Products</h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div v-for="i in 6" :key="i" class="bg-white shadow rounded-xl p-6">
                    <div class="h-40 bg-gray-200 rounded mb-4"></div>
                    <h3 class="text-xl font-bold">Gadget {{ i }}</h3>
                    <p class="text-gray-600 mt-2">High-quality gadget description.</p>
                    <button class="mt-4 w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import Navbar from '../components/Navbar.vue';
</script>
