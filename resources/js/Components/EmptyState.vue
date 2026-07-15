<template>
    <div class="text-center py-12">
        <div class="mx-auto h-24 w-24 text-gray-400">
            <slot name="icon">
                <UsersIcon class="h-full w-full" />
            </slot>
        </div>
        <h3 class="mt-2 text-lg font-medium text-gray-900">
            <slot>{{ message }}</slot>
        </h3>
        <p v-if="description" class="mt-1 text-sm text-gray-500">
            {{ description }}
        </p>
        <div v-if="actionText" class="mt-6">
            <button
                type="button"
                @click="$emit('action')"
                class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
            >
                <PlusIcon class="-ml-1 mr-2 h-5 w-5" />
                {{ actionText }}
            </button>
        </div>
    </div>
</template>

<script setup lang="ts">
import { UsersIcon, PlusIcon } from '@heroicons/vue/24/outline';

interface Props {
    message?: string;
    description?: string;
    actionText?: string;
}

withDefaults(defineProps<Props>(), {
    message: 'No data available',
    description: '',
    actionText: ''
});

defineEmits(['action']);
</script>
