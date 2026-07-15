<script setup lang="ts">
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps<{
    canResetPassword?: boolean;
    status?: string;
}>();

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => {
            form.reset('password');
        },
    });
};
</script>

<template>
    <Head title="APMDC Login" />

    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#303791] to-[#EA222F] relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full opacity-5 bg-[url('/images/world-map-light.svg')] bg-center bg-no-repeat"></div>
            <div class="absolute top-1/2 left-1/2 w-[120%] h-[120%] bg-[radial-gradient(circle_at_center,rgba(234,34,47,0.05)_0%,transparent_70%)]"></div>
        </div>

        <!-- Floating Shipping Icons -->
        <div class="absolute top-20 left-10 w-16 h-16 z-50 opacity-10 text-white animate-float-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="w-28 h-28">
                <path fill="none" stroke="currentColor" d="M0 23.5a3 3 0 0 0 3-3a3 3 0 1 0 6 0a3 3 0 1 0 6 0a3 3 0 1 0 6 0a3 3 0 0 0 3 3M5.5 10.237V3.5h13v6.737M12 0v3.5M5.5 19c0-.174-.12-.77-.279-1.476c-.448-2.004-1.342-3.878-2.55-5.538L2.5 11.75v-.25l8.118-3.418A2.26 2.26 0 0 0 12 6m0 0c0 .909.545 1.73 1.383 2.082L21.5 11.5v.25l-.172.236c-1.207 1.66-2.101 3.534-2.55 5.538c-.157.705-.278 1.302-.278 1.476M12 6v13" stroke-width="1"/>
            </svg>
        </div>

        <div class="w-full max-w-md p-8 space-y-8 bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl border border-gray-200/30 relative z-10">
            <div class="text-center">
                <div class="flex items-center justify-center mb-6">
                    <img src="/images/APMDC-Logo.png" alt="APMDC Logo" class="h-16 w-auto mr-3">
                    <span class="text-2xl font-bold text-[#303791]">APMDC</span>
                </div>
                <h2 class="text-3xl font-extrabold text-gray-900 font-poppins">
                    Secure Access Portal
                </h2>
                <p class="mt-2 text-sm text-[#EA222F] font-medium">
                    Maritime & Logistics Management System
                </p>
            </div>

            <div v-if="status" class="p-4 mb-4 rounded-lg bg-green-100 text-green-800 text-sm border border-green-200">
                {{ status }}
            </div>

            <form @submit.prevent="submit" class="mt-8 space-y-6">
                <div class="rounded-md shadow-sm space-y-4">
                    <div>
                        <InputLabel for="email" value="Email Address" class="block text-sm font-medium text-[#303791]" />
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-[#EA222F]" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>
                            <TextInput
                                id="email"
                                type="email"
                                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#EA222F] focus:border-[#EA222F] bg-white/80 transition-all duration-200"
                                placeholder="your@email.com"
                                v-model="form.email"
                                required
                                autofocus
                                autocomplete="username"
                            />
                        </div>
                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div>
                        <InputLabel for="password" value="Password" class="block text-sm font-medium text-[#303791]" />
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-[#EA222F]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <TextInput
                                id="password"
                                type="password"
                                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#EA222F] focus:border-[#EA222F] bg-white/80 transition-all duration-200"
                                placeholder="••••••••"
                                v-model="form.password"
                                required
                                autocomplete="current-password"
                            />
                        </div>
                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <Checkbox name="remember" v-model:checked="form.remember"
                                class="h-4 w-4 text-[#EA222F] focus:ring-[#EA222F] border-gray-300 rounded" />
                        <span class="ml-2 text-sm text-[#303791]">
                            Remember me
                        </span>
                    </label>

                    <div class="text-sm">
                        <Link
                            v-if="canResetPassword"
                            :href="route('password.request')"
                            class="font-medium text-[#EA222F] hover:text-[#d11a26] transition-colors duration-200"
                        >
                            Forgot password?
                        </Link>
                    </div>
                </div>

                <div>
                    <PrimaryButton
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-gradient-to-r from-[#303791] to-[#EA222F] hover:from-[#2a317d] hover:to-[#d11a26] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#EA222F] shadow-lg transition-all duration-200 transform hover:-translate-y-0.5"
                        :class="{ 'opacity-75': form.processing }"
                        :disabled="form.processing"
                    >
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-white/80 group-hover:text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <span class="flex items-center">
                            <span v-if="form.processing" class="mr-2">
                                <svg class="animate-spin h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                            </span>
                            {{ form.processing ? 'Signing in...' : 'Sign in to Portal' }}
                        </span>
                    </PrimaryButton>
                </div>
            </form>

            <!-- Trust Indicators -->
            <div class="mt-8 pt-6 border-t border-gray-200">
                <div class="text-center">
                    <p class="text-xs text-gray-500 mb-4">TRUSTED BY INDUSTRY LEADERS</p>
                    <div class="flex justify-center items-center space-x-4">
                        <div class="flex items-center">
                            <i class="fas fa-shield-alt text-[#EA222F] text-sm mr-1"></i>
                            <span class="text-xs text-gray-600">ISO 9001:2015 Certified</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-lock text-[#EA222F] text-sm mr-1"></i>
                            <span class="text-xs text-gray-600">Secure & Encrypted</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center text-sm text-[#303791]">
                <p>
                    Need access to the system?
                    <Link :href="route('home')" class="font-medium text-[#EA222F] hover:text-[#d11a26] transition-colors duration-200 ml-1">
                        Contact Administrator
                    </Link>
                </p>
            </div>
        </div>

        <!-- Additional Floating Element -->
        <div class="absolute bottom-20 right-20 w-12 h-12 opacity-10 text-white animate-float-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="w-16 h-16">
                <path fill="currentColor" d="M5.688 19.116q-1.092 0-1.851-.763q-.76-.763-.76-1.853H2.5q-.343 0-.575-.232t-.233-.576V6.616q0-.691.463-1.153T3.308 5h11.615q.667 0 1.141.475t.475 1.14v2h1.5q.383 0 .726.172q.344.172.566.475l2.815 3.79q.081.101.121.222t.04.263v2.155q0 .344-.231.576t-.576.232h-.808q0 1.09-.764 1.853t-1.855.762t-1.852-.762t-.76-1.853H8.309q0 1.096-.764 1.856t-1.856.76m.004-1q.675 0 1.145-.47t.47-1.146t-.47-1.145t-1.145-.47t-1.145.47t-.47 1.145t.47 1.145t1.145.47m-3-2.615h.647q.213-.662.869-1.138t1.484-.478q.79 0 1.466.468q.675.467.888 1.148h7.493V6.616q0-.27-.174-.443T14.923 6H3.308q-.231 0-.423.192q-.193.193-.193.424zm15.385 2.616q.675 0 1.145-.47q.47-.471.47-1.146t-.47-1.145t-1.145-.47t-1.145.47t-.47 1.145t.47 1.145t1.145.47m-1.54-4.615h4.712L18.5 9.866q-.096-.116-.221-.183T18 9.616h-1.461zm-7.422-2.75"/>
            </svg>
        </div>
    </div>
</template>

<style scoped>
@keyframes float-1 {
    0% { transform: translateY(0) translateX(0) rotate(0deg); }
    50% { transform: translateY(-20px) translateX(10px) rotate(2deg); }
    100% { transform: translateY(0) translateX(0) rotate(0deg); }
}

@keyframes float-2 {
    0% { transform: translateY(0) translateX(0) rotate(-5deg); }
    50% { transform: translateY(15px) translateX(-15px) rotate(5deg); }
    100% { transform: translateY(0) translateX(0) rotate(-5deg); }
}

.animate-float-1 {
    animation: float-1 8s ease-in-out infinite;
}

.animate-float-2 {
    animation: float-2 10s ease-in-out infinite;
}
</style>
