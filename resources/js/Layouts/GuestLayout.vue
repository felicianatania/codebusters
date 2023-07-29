<script setup>

defineProps({
    imageSrc: String
});

</script>

<template>
    <div class="flex h-max min-h-screen">
        <div class="fixed w-1/2 top-1/2 -translate-y-1/2 flex items-center justify-center">
            <img class="w-[70%]" :src="imageSrc" alt="Authentication Image">
        </div>

        <div
            class="ml-[50%] py-20 w-1/2 flex flex-col gap-10 items-center justify-center bg-lightyellow"
        >
            <slot />
        </div>
    </div>
</template>
