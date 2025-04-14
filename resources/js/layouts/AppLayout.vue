<template>
    <div class="min-h-screen bg-gradient-to-r from-neutral-50 to-blue-50 text-black font-sans">
        <header class="flex justify-between items-center bg-white px-6 py-4">
            <img src="/images/logo.png" alt="VennX Logo" class="h-6">
            <nav class="space-x-6 text-sm font-medium text-gray-700">
                <a href="#">Why VennX</a>
                <a href="#">Solution</a>
                <a href="#">Events</a>
                <a href="#">Company</a>
            </nav>
        </header>
        <slot />
    </div>
</template>
<script setup lang="ts">
</script>
