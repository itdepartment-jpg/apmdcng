<template>
    <div>
        <input
            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            v-model="model"
            ref="input"
            @input="handleInput"
        />
    </div>
</template>

<script setup lang="ts">
import { onMounted, ref, watch } from 'vue';

const model = defineModel<string>({ required: true });

const input = ref<HTMLInputElement | null>(null);

onMounted(() => {
    if (input.value?.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value?.focus() });

// Method to handle input and restrict it to decimal and integer values only
const handleInput = (event: Event) => {
    const inputElement = event.target as HTMLInputElement;
    // Allow only digits, dot, and delete keys
    inputElement.value = inputElement.value.replace(/[^0-9.]/g, '');
    // Ensure only one dot is present
    if ((inputElement.value.match(/\./g) || []).length > 1) {
        inputElement.value = inputElement.value.slice(0, inputElement.value.length - 1);
    }
    model.value = inputElement.value;
};

// Watcher to sync prop value with local ref
watch(() => model.value, (newValue) => {
    if (input.value) {
        input.value.value = newValue;
    }
});
</script>
