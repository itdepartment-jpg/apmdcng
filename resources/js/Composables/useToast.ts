import { ref } from 'vue';
import Toast from '@/Components/Toast.vue';

interface ToastMessage {
    message: string;
    type: 'success' | 'error' | 'warning' | 'info';
    duration?: number;
}

const toasts = ref<ToastMessage[]>([]);

export const useToast = () => {
    const showToast = (message: string, type: ToastMessage['type'] = 'success', duration = 5000) => {
        const toast = { message, type, duration };
        toasts.value.push(toast);

        setTimeout(() => {
            toasts.value = toasts.value.filter(t => t !== toast);
        }, duration);
    };

    const showSuccess = (message: string) => showToast(message, 'success');
    const showError = (message: string) => showToast(message, 'error');
    const showWarning = (message: string) => showToast(message, 'warning');
    const showInfo = (message: string) => showToast(message, 'info');

    return {
        toasts,
        showToast,
        showSuccess,
        showError,
        showWarning,
        showInfo
    };
};

export const ToastContainer = {
    setup() {
        const { toasts } = useToast();
        return { toasts };
    },
    components: { Toast },
    template: `
    <div class="fixed top-0 right-0 z-50">
      <Toast
        v-for="(toast, index) in toasts"
        :key="index"
        :message="toast.message"
        :type="toast.type"
        :duration="toast.duration"
      />
    </div>
  `
};
