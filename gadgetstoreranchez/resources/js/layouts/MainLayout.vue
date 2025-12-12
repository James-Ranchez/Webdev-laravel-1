<template>
  <div>
    <nav class="flex gap-4 p-4 bg-white shadow">
      <Link href="/" class="font-medium">Home</Link>
      <Link href="/products" class="font-medium">Products</Link>
      <Link href="/about" class="font-medium">About</Link>
      <Link href="/contact" class="font-medium">Contact</Link>
    </nav>

    <main class="p-6">
      <slot />
    </main>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
