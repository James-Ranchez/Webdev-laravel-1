<template>
  <div class="border rounded-lg shadow hover:shadow-lg transition p-4 flex flex-col">
    <img :src="product.image" class="w-full h-48 object-cover rounded mb-4" />
    <h2 class="font-bold text-lg">{{ product.name }}</h2>
    <p class="text-gray-600 mt-1">{{ product.description }}</p>
    <p class="font-bold text-blue-600 mt-2">${{ product.price }}</p>
    <button @click="addToCart"
            class="mt-auto bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
      Add to Cart ({{ count }})
    </button>
  </div>
</template>

<script>
export default {
  props: ['product'],
  data() {
    return { count: 0 };
  },
  methods: {
    addToCart() {
      this.count++;
      alert(`${this.product.name} added to cart!`);
    }
  }
};
</script>
