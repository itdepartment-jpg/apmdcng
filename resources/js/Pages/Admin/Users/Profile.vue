<script setup lang="ts">
import { ref, computed } from 'vue';
import { Head, useForm, usePage } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import { PencilIcon, LockClosedIcon, UserIcon, XMarkIcon, ArrowPathIcon } from '@heroicons/vue/24/outline';
import { useToast } from '@/Composables/useToast';

const { showSuccess, showError } = useToast();
const page = usePage();

interface User {
    id: number;
    name: string;
    email: string;
    password?: string;
    password_confirmation?: string;
}

// Get the authenticated user from the page props
const user = computed(() => page.props.auth.user as User);

// Form handling
const form = useForm({
    name: user.value.name,
    email: user.value.email,
    current_password: '',
    password: '',
    password_confirmation: '',
});

const showPasswordFields = ref(false);

const updateProfile = async () => {


    try {
        await form.put(route('admin.profile.update'), {
            preserveScroll: true,
            onSuccess: () => {
                showSuccess('Profile updated successfully');
                form.reset('password', 'password_confirmation', 'current_password');
                showPasswordFields.value = false;
            },
            onError: () => {
                showError('There was an error updating your profile');
            },
        });
    } catch (error) {
        showError('An unexpected error occurred');
    }
};
</script>

<template>
    <Head title="My Profile" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-2xl font-bold leading-tight text-gray-800">
                My Profile
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex flex-col md:flex-row gap-8">
                            <!-- Profile Picture Section -->
                            <div class="w-full md:w-1/3">
                                <div class="flex flex-col items-center">
                                    <div class="relative">
                                        <div class="h-32 w-32 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden">
                                            <UserIcon class="h-16 w-16 text-gray-500" />
                                        </div>
                                    </div>
                                    <h3 class="mt-4 text-lg font-medium text-gray-900">{{ user.name }}</h3>
                                    <p class="text-sm text-gray-500">{{ user.email }}</p>
                                </div>
                            </div>

                            <!-- Profile Form Section -->
                            <div class="w-full md:w-2/3">
                                <form @submit.prevent="updateProfile">
                                    <div class="space-y-6">
                                        <!-- Name -->
                                        <div>
                                            <InputLabel for="name" value="Full Name" />
                                            <TextInput
                                                id="name"
                                                v-model="form.name"
                                                type="text"
                                                class="mt-1 block w-full"
                                                :class="{ 'border-red-500': form.errors.name }"
                                            />
                                            <p v-if="form.errors.name" class="mt-1 text-sm text-red-600">
                                                {{ form.errors.name }}
                                            </p>
                                        </div>

                                        <!-- Email -->
                                        <div>
                                            <InputLabel for="email" value="Email" />
                                            <TextInput
                                                id="email"
                                                v-model="form.email"
                                                type="email"
                                                class="mt-1 block w-full"
                                                :class="{ 'border-red-500': form.errors.email }"
                                            />
                                            <p v-if="form.errors.email" class="mt-1 text-sm text-red-600">
                                                {{ form.errors.email }}
                                            </p>
                                        </div>

                                        <!-- Password Update Toggle -->
                                        <div class="pt-4 border-t border-gray-200">
                                            <button
                                                type="button"
                                                @click="showPasswordFields = !showPasswordFields"
                                                class="flex items-center text-sm text-blue-600 hover:text-blue-800"
                                            >
                                                <LockClosedIcon class="h-5 w-5 mr-1" />
                                                <span>{{ showPasswordFields ? 'Hide' : 'Change' }} Password</span>
                                            </button>
                                        </div>

                                        <!-- Password Fields (Conditional) -->
                                        <div v-if="showPasswordFields" class="space-y-4">
                                            <!-- Current Password -->
                                            <div>
                                                <InputLabel for="current_password" value="Current Password" />
                                                <TextInput
                                                    id="current_password"
                                                    v-model="form.current_password"
                                                    type="password"
                                                    class="mt-1 block w-full"
                                                    :class="{ 'border-red-500': form.errors.current_password }"
                                                />
                                                <p v-if="form.errors.current_password" class="mt-1 text-sm text-red-600">
                                                    {{ form.errors.current_password }}
                                                </p>
                                            </div>

                                            <!-- New Password -->
                                            <div>
                                                <InputLabel for="password" value="New Password" />
                                                <TextInput
                                                    id="password"
                                                    v-model="form.password"
                                                    type="password"
                                                    class="mt-1 block w-full"
                                                    :class="{ 'border-red-500': form.errors.password }"
                                                />
                                                <p v-if="form.errors.password" class="mt-1 text-sm text-red-600">
                                                    {{ form.errors.password }}
                                                </p>
                                            </div>

                                            <!-- Confirm Password -->
                                            <div>
                                                <InputLabel for="password_confirmation" value="Confirm New Password" />
                                                <TextInput
                                                    id="password_confirmation"
                                                    v-model="form.password_confirmation"
                                                    type="password"
                                                    class="mt-1 block w-full"
                                                    :class="{ 'border-red-500': form.errors.password_confirmation }"
                                                />
                                                <p v-if="form.errors.password_confirmation" class="mt-1 text-sm text-red-600">
                                                    {{ form.errors.password_confirmation }}
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Form Actions -->
                                        <div class="flex justify-end pt-4">
                                            <SecondaryButton
                                                type="button"
                                                @click="form.reset()"
                                                class="mr-2"
                                            >
                                                Reset
                                            </SecondaryButton>
                                            <PrimaryButton
                                                type="submit"
                                                :disabled="form.processing"
                                            >
                                                <ArrowPathIcon v-if="form.processing" class="h-4 w-4 animate-spin mr-2" />
                                                Save Changes
                                            </PrimaryButton>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
