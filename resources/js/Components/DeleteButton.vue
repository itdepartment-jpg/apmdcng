<!-- resources/js/Components/DeleteButton.vue -->
<template>
    <button @click="confirmDelete" class="text-red-600 hover:text-red-800">
        <TrashIcon class="h-5 w-5" />
    </button>

    <ConfirmationModal :show="showConfirm" @close="showConfirm = false">
        <template #title>
            Confirm Deletion
        </template>
        <template #content>
            Are you sure you want to delete this item? This action cannot be undone.
        </template>
        <template #footer>
            <button @click="showConfirm = false" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                Cancel
            </button>
            <button @click="deleteItem" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 ml-2">
                Delete
            </button>
        </template>
    </ConfirmationModal>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import { TrashIcon } from '@heroicons/vue/24/outline';
import ConfirmationModal from '@/Components/ConfirmationModal.vue';
import { router } from '@inertiajs/vue3';

const props = defineProps<{
    route: string;
    itemId: number | string;
}>();

const emit = defineEmits<{
    (e: 'deleted'): void;
}>();

const showConfirm = ref(false);

const confirmDelete = () => {
    showConfirm.value = true;
};

const deleteItem = () => {
    router.delete(route(props.route, props.itemId), {
        preserveScroll: true,
        onSuccess: () => {
            showConfirm.value = false;
            emit('deleted');
        },
    });
};
</script>
