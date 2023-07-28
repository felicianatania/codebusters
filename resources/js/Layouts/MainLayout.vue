<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <div id="MainLayout" class=" bg-red-600">
        <div>
            Main Layouts
        </div>

        <slot />
    </div>
</template>
