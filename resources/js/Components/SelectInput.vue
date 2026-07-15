<template>
    <select
        :id="id"
        :value="modelValue"
        @change="handleChange"
        :class="[
      'block w-full rounded-md shadow-sm',
      error ? 'border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500',
      disabled ? 'bg-gray-100' : ''
    ]"
        :disabled="disabled"
    >
        <option v-for="option in options" :key="option.toString()" :value="option">
            {{ option }}
        </option>
    </select>
</template>

<script setup lang="ts">
defineProps<{
    id?: string;
    modelValue: string | number;
    options: (string | number)[];
    error?: boolean;
    disabled?: boolean;
}>();

const emit = defineEmits<{
    (e: 'update:modelValue', value: string | number): void;
}>();

function handleChange(event: Event) {
    const target = event.target as HTMLSelectElement | null;
    if (target) {
        emit('update:modelValue', target.value);
    }
}
</script>
