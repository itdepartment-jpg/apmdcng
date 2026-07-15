<template>
    <Transition name="toast">
        <div v-if="show" class="fixed top-4 right-4 z-50">
            <div :class="['rounded-md p-4 shadow-lg', typeClasses]">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <component :is="iconComponent" class="h-5 w-5" />
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium">
                            {{ message }}
                        </p>
                    </div>
                    <div class="ml-auto pl-3">
                        <button
                            @click="show = false"
                            class="inline-flex rounded-md focus:outline-none"
                        >
                            <XMarkIcon class="h-5 w-5" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </Transition>
</template>

<script setup lang="ts">
import { computed, ref } from 'vue';
import { CheckCircleIcon, ExclamationCircleIcon, XMarkIcon } from '@heroicons/vue/24/outline';

const props = defineProps({
    message: { type: String, required: true },
    type: { type: String, default: 'success' },
    duration: { type: Number, default: 5000 }
});

const show = ref(true);

const typeClasses = computed(() => {
    return {
        success: 'bg-green-50 text-green-800',
        error: 'bg-red-50 text-red-800',
        warning: 'bg-yellow-50 text-yellow-800',
        info: 'bg-blue-50 text-blue-800'
    }[props.type];
});

const iconComponent = computed(() => {
    return {
        success: CheckCircleIcon,
        error: ExclamationCircleIcon,
        warning: ExclamationCircleIcon,
        info: ExclamationCircleIcon
    }[props.type];
});

setTimeout(() => {
    show.value = false;
}, props.duration);
</script>

<style>
.toast-enter-active,
.toast-leave-active {
    transition: all 0.3s ease;
}

.toast-enter-from,
.toast-leave-to {
    opacity: 0;
    transform: translateY(-20px);
}
</style>
