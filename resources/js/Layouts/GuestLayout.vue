<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="flex h-max min-h-screen">
        <div class="fixed w-1/2 top-1/2 -translate-y-1/2 flex items-center">
            <!-- Insert Image -->
        </div>

        <div
            class="ml-[50%] w-1/2 flex flex-col gap-10 items-center justify-center bg-lightyellow"
        >
            <slot />
        </div>
    </div>
</template>
