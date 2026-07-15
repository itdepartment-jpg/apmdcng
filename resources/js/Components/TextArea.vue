<template>
  <textarea
      :id="id"
      :value="modelValue"
      @input="handleInput"
      rows="3"
      :class="[
      'block w-full rounded-md shadow-sm',
      error ? 'border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500',
      disabled ? 'bg-gray-100' : ''
    ]"
      :disabled="disabled"
      :placeholder="placeholder"
  ></textarea>
</template>

<script setup lang="ts">
const props = defineProps<{
    id?: string;
    modelValue: string | number;
    error?: boolean;
    disabled?: boolean;
    placeholder?: string;
}>();

const emit = defineEmits<{
    (e: 'update:modelValue', value: string | number): void;
}>();

function handleInput(event: Event) {
    const target = event.target as HTMLTextAreaElement | null;
    if (target) {
        emit('update:modelValue', target.value);
    }
}
</script>
