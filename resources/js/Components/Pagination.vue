<template>
    <nav class="flex items-center justify-between border-t border-gray-200 px-4 sm:px-0">
        <div class="-mt-px flex w-0 flex-1">
            <button
                @click="$emit('page-changed', links[0].url)"
                :disabled="!links[0].url"
                :class="[
          'inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700',
          !links[0].url ? 'opacity-50 cursor-not-allowed' : ''
        ]"
            >
                <ChevronLeftIcon class="mr-3 h-5 w-5 text-gray-400" aria-hidden="true" />
                Previous
            </button>
        </div>
        <div class="hidden md:-mt-px md:flex">
            <template v-for="(link, index) in links.slice(1, -1)" :key="index">
                <button
                    v-if="link.url"
                    @click="$emit('page-changed', link.url)"
                    :class="[
            'inline-flex items-center border-t-2 px-4 pt-4 text-sm font-medium',
            link.active
              ? 'border-blue-500 text-blue-600'
              : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'
          ]"
                >
                    {{ link.label }}
                </button>
                <span
                    v-else
                    class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500"
                >
          {{ link.label }}
        </span>
            </template>
        </div>
        <div class="-mt-px flex w-0 flex-1 justify-end">
            <button

                @click="$emit('page-changed', links[links.length - 1].url)"
                :disabled="!links[links.length - 1].url"
                :class="[
          'inline-flex items-center border-t-2 border-transparent pl-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700',
          !links[links.length - 1].url ? 'opacity-50 cursor-not-allowed' : ''
        ]"
            >
                Next
                <ChevronRightIcon class="ml-3 h-5 w-5 text-gray-400" aria-hidden="true" />
            </button>
        </div>
    </nav>
</template>

<script setup lang="ts">
import { ChevronLeftIcon, ChevronRightIcon } from '@heroicons/vue/24/outline';


interface PaginationLink {
    url: string | null;
    label: string;
    active: boolean;
}

defineProps<{
    links: PaginationLink[];
    currentPage: number;
    lastPage: number;
}>();

defineEmits<{
    (event: 'page-changed', url: string | null): void;
}>();

// defineProps({
//     links: { type: Array, required: true },
//     currentPage: { type: Number, required: true },
//     lastPage: { type: Number, required: true }
// });

// defineEmits(['page-changed']);
</script>
