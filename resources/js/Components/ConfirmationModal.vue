<template>
    <Modal :show="show" @close="closeModal">
        <div class="p-6">
            <h2 v-if="title" class="text-lg font-medium text-gray-900 mb-4">
                {{ title }}
            </h2>

            <div v-if="content" class="mb-6">
                {{ content }}
            </div>

            <div class="flex justify-end space-x-4">
                <button
                    @click="closeModal"
                    type="button"
                    class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 transition-colors"
                >
                    Cancel
                </button>
                <button
                    @click="confirmAction"
                    type="button"
                    class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors"
                    :disabled="processing"
                >
                    <span v-if="processing">Processing...</span>
                    <span v-else>{{ confirmText }}</span>
                </button>
            </div>
        </div>
    </Modal>
</template>

<script setup lang="ts">
import Modal from './Modal.vue'

interface Props {
    show: boolean
    title?: string
    content?: string
    confirmText?: string
    processing?: boolean
}

const props = withDefaults(defineProps<Props>(), {
    confirmText: 'Confirm',
    processing: false
})

const emit = defineEmits(['close', 'confirmed'])

const closeModal = () => {
    emit('close')
}

const confirmAction = () => {
    emit('confirmed')
}
</script>
