<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: {
        placeholder: String,
        type: String,
        required: true,
    },
});

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        class="py-1.5 px-3 text-name font-medium text-black border-gray-300 focus:border-lightorange focus:ring-lightorange rounded focus:shadow-md placeholder:text-gray-400 placeholder:text-subname placeholder:font-normal"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"
    />
</template>
