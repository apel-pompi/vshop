<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <!-- Navbar start -->
         <Navbar/>
        <!-- Navbar End -->

        <!-- Sidebar start -->
        <Sidebar/>
        
        <!-- Sidebar End -->

        <slot/>
    </div>
</template>

<script setup>
import Navbar from './Navbar.vue'
import Sidebar from './Sidebar.vue'
</script>
