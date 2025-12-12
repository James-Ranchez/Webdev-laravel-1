<template>
    <div>
        <Navbar />

        <div class="pt-32 max-w-3xl mx-auto">
            <h1 class="text-4xl font-bold mb-6 text-center">Contact Us</h1>

            <form class="bg-white shadow p-6 rounded-xl grid gap-4">
                <input class="border p-3 rounded" placeholder="Your Name">
                <input class="border p-3 rounded" placeholder="Email Address">
                <textarea class="border p-3 rounded" rows="5" placeholder="Message"></textarea>
                <button class="bg-blue-600 text-white py-3 rounded hover:bg-blue-700">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</template>

<script setup>
import Navbar from '../components/Navbar.vue';
</script>
