<script setup lang="ts">
import { ref, watch,computed } from 'vue';
import { Head, router, useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TextArea from '@/Components/TextArea.vue';
import {
    PencilIcon,
    PlusIcon,
    TrashIcon,
    ArrowPathIcon,
    XMarkIcon,
    DocumentTextIcon,
    EyeIcon,
    LockClosedIcon,
    UserIcon
} from '@heroicons/vue/24/outline';
import { ExclamationCircleIcon, CheckCircleIcon, XCircleIcon } from '@heroicons/vue/24/solid';
import Modal from '@/Components/Modal.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import DangerButton from '@/Components/DangerButton.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import Pagination from '@/Components/Pagination.vue';
import { useToast } from '@/Composables/useToast';
import SelectInput from '@/Components/SelectInput.vue';
import ToggleSwitch from '@/Components/ToggleSwitch.vue';
import Badge from '@/Components/Badge.vue';
// import {watch} from "vue";

interface User {
    id: number;
    name: string;
    email: string;
    is_active: boolean;
    created_at: string;
    last_login_at?: string;
    last_login_ip?: string;
    password: string;
    password_confirmation: string;
    roles: {
        name: string;
    }[];
}

interface Props {
    users: {
        data: User[];
        current_page: number;
        last_page: number;
        next_page_url: string | null;
        prev_page_url: string | null;
        links: any[];
    };
    roles: {
        id: number;
        name: string;
    }[];
    // can: {
    //     create: boolean;
    //     edit: boolean;
    //     delete: boolean;
    //     impersonate: boolean;
    // };
    filters: {
        search?: string;
        // role?: string;
        // status?: string;
    };
}

const props = defineProps<Props>();
const { showSuccess, showError } = useToast();

// State management
const users = ref(props.users);
const showFormModal = ref(false);
const showDeleteModal = ref(false);
const showPasswordResetModal = ref(false);
const userToDelete = ref<User | null>(null);
const userToEdit = ref<User | null>(null);
const userToResetPassword = ref<User | null>(null);
const isLoading = ref(false);
const search = ref(props.filters?.search || '');
// const roleFilter = ref(props.filters?.role || '');
// const statusFilter = ref(props.filters?.status || '');

// Form handling
const createForm = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    roles: [] as string[],
    is_active: true,

});

const editForm = useForm({
    name: '',
    email: '',
    roles: [] as string[],
    is_active: true,
    password: '',
    password_confirmation: '',
});

const passwordResetForm = useForm({
    email: '',
});

// Computed properties
const modalTitle = computed(() =>
    userToEdit.value ? 'Edit User' : 'Create New User'
);

const currentForm = computed(() =>
    userToEdit.value ? editForm : createForm
);

const roleOptions = computed(() => [
    { value: '', label: 'All Roles' },
    ...props.roles.map(role => ({
        value: role.name,
        label: role.name
    }))
]);

const statusOptions = [
    { value: '', label: 'All Statuses' },
    { value: 'active', label: 'Active' },
    { value: 'inactive', label: 'Inactive' },
];

type RoleName = 'super-admin' | 'admin' | 'editor' | 'user';
type BadgeColor = 'gray' | 'red' | 'yellow' | 'green' | 'blue' | 'indigo' | 'purple' | 'pink';

const roleColors: Record<RoleName, BadgeColor> = {
    'super-admin': 'purple',
    'admin': 'blue',
    'editor': 'green',
    'user': 'gray'
} as const;

function getRoleColor(roleName: string): BadgeColor {
    const color = roleColors[roleName as RoleName];
    return color ?? 'gray'; // Using nullish coalescing
}



// Methods
const openFormModal = (user: User | null = null) => {
    userToEdit.value = user;

    if (user) {
        editForm.name = user.name;
        editForm.email = user.email;
        editForm.is_active = user.is_active;
        editForm.roles = user.roles.map(role => role.name);
    } else {
        createForm.reset();
    }

    showFormModal.value = true;
};

const closeFormModal = () => {
    showFormModal.value = false;
    if (userToEdit.value) {
        editForm.reset();
    } else {
        createForm.reset();
    }
    userToEdit.value = null;
};

const openDeleteModal = (user: User) => {
    userToDelete.value = user;
    showDeleteModal.value = true;
};

const closeDeleteModal = () => {
    showDeleteModal.value = false;
    userToDelete.value = null;
};

const openPasswordResetModal = (user: User) => {
    userToResetPassword.value = user;
    passwordResetForm.email = user.email;
    showPasswordResetModal.value = true;
};

const closePasswordResetModal = () => {
    showPasswordResetModal.value = false;
    userToResetPassword.value = null;
    passwordResetForm.reset();
};

const storeUser = async () => {

    try {
        isLoading.value = true;
        await createForm.post(route('admin.users.store'), {
            preserveScroll: true,
            onSuccess: () => {
                showSuccess('User created successfully');
                closeFormModal();
                refreshUsers();
            },
            onError: () => {
                showError('There was an error creating the user');
            },
        });
    } finally {
        isLoading.value = false;
    }
};

const updateUser = async () => {
    if (!userToEdit.value) return;

    try {
        isLoading.value = true;
        await editForm.put(route('admin.users.update', userToEdit.value.id), {
            preserveScroll: true,
            onSuccess: () => {
                showSuccess('User updated successfully');
                closeFormModal();
                refreshUsers();
            },
            onError: () => {
                showError('There was an error updating the user');
            },
        });
    } finally {
        isLoading.value = false;
    }
};

const deleteUser = async () => {
    if (!userToDelete.value) return;

    try {
        isLoading.value = true;
        await router.delete(route('admin.users.destroy', userToDelete.value.id), {
            preserveScroll: true,
            onSuccess: () => {
                showSuccess('User deleted successfully');
                closeDeleteModal();
                refreshUsers();
            },
            onError: () => {
                showError('There was an error deleting the user');
            },
        });
    } finally {
        isLoading.value = false;
    }
};

const sendPasswordReset = async () => {
    if (!userToResetPassword.value) return;

    try {
        isLoading.value = true;
        await passwordResetForm.post(route('admin.users.send-password-reset'), {
            preserveScroll: true,
            onSuccess: () => {
                showSuccess('Password reset link sent successfully');
                closePasswordResetModal();
            },
            onError: () => {
                showError('There was an error sending the password reset link');
            },
        });
    } finally {
        isLoading.value = false;
    }
};

const toggleUserStatus = (user: User) => {
    router.put(route('admin.users.toggle-status', user.id), {}, {
        preserveScroll: true,
        onSuccess: () => {
            showSuccess(`User ${user.is_active ? 'deactivated' : 'activated'} successfully`);
            refreshUsers();
        },
        onError: () => {
            showError('There was an error updating user status');
        },
    });
};

const impersonateUser = (user: User) => {
    if (confirm(`Login as ${user.name}? You can return to your admin session by logging out.`)) {
        router.post(route('admin.users.impersonate', user.id));
    }
};

const refreshUsers = () => {
    router.visit(route('admin.users.index'), {
        preserveState: true,
        only: ['users'],
        onSuccess: () => {
            users.value = props.users;
        }
    });
};

const loadPage = (url: string | null) => {
    if (!url) return;
    router.visit(url, {
        preserveScroll: true,
        onSuccess: () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        },
    });
};

// Watch filters and reload when they change
// watch([search, roleFilter, statusFilter], () => {
//     router.get(route('admin.users.index'), {
//         search: search.value,
//         role: roleFilter.value,
//         status: statusFilter.value
//     }, {
//         preserveState: true,
//         replace: true
//     });
// });
</script>

<template>
    <Head title="Users Management" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-2xl font-bold leading-tight text-gray-800">
                Users Management
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <!-- Header with create button -->
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                            <div>
                                <h1 class="text-2xl font-bold text-gray-900">Users</h1>
                                <p class="text-sm text-gray-500 mt-1">
                                    Manage system users and their permissions
                                </p>
                            </div>
                            <PrimaryButton
                                @click="openFormModal()"
                                class="flex items-center gap-2"
                            >
                                <PlusIcon class="h-5 w-5" />
                                <span>New User</span>
                            </PrimaryButton>
                        </div>

                        <!-- Search and Filters -->
                        <div class="mb-6 flex flex-col sm:flex-row items-start sm:items-center gap-4">
<!--                            <TextInput-->
<!--                                v-model="search"-->
<!--                                placeholder="Search users..."-->
<!--                                class="w-full sm:w-64"-->
<!--                            />-->
<!--                            <SelectInput-->
<!--                                v-model="roleFilter"-->
<!--                                :options="roleOptions"-->
<!--                                placeholder="Filter by role"-->
<!--                                class="w-full sm:w-48"-->
<!--                            />-->
<!--                            <SelectInput-->
<!--                                v-model="statusFilter"-->
<!--                                :options="statusOptions"-->
<!--                                placeholder="Filter by status"-->
<!--                                class="w-full sm:w-48"-->
<!--                            />-->
                        </div>

                        <!-- Empty state -->
                        <div v-if="users.data.length === 0" class="border-2 border-dashed border-gray-200 rounded-lg p-8 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <UserIcon class="h-12 w-12 text-gray-400 mb-4" />
                                <h3 class="text-lg font-medium text-gray-900 mb-1">
                                    No users found
                                </h3>
                                <p class="text-sm text-gray-500 mb-4">
                                    Create users to grant access to the system
                                </p>
                                <PrimaryButton
                                    @click="openFormModal()"
                                    class="flex items-center gap-2"
                                >
                                    <PlusIcon class="h-5 w-5" />
                                    <span>New User</span>
                                </PrimaryButton>
                            </div>
                        </div>

                        <!-- Users table -->
                        <div v-else class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Roles
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Last Login
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="user in users.data" :key="user.id">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center">
                                                <UserIcon class="h-6 w-6 text-gray-500" />
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ user.name }}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    ID: {{ user.id }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ user.email }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex flex-wrap gap-1">
                                            <Badge
                                                v-for="role in user.roles"
                                                :key="role.name"
                                                :color="getRoleColor(role.name)"
                                            >
                                                {{ role.name }}
                                            </Badge>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <ToggleSwitch
                                                :modelValue="user.is_active"
                                                @update:modelValue="toggleUserStatus(user)"
                                                :disabled="user.roles.some(r => r.name === 'super-admin')"
                                            />

                                            <span class="ml-2 text-sm text-gray-500">
                                                {{ user.is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            {{ user.last_login_at ? new Date(user.last_login_at).toLocaleString() : 'Never' }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end space-x-2">
<!--                                            <button-->
<!--                                                @click="impersonateUser(user)"-->
<!--                                                class="text-purple-600 hover:text-purple-900 p-1 rounded-md hover:bg-purple-50"-->
<!--                                                title="Login as this user"-->
<!--                                                :disabled="user.roles.some(r => r.name === 'super-admin')"-->
<!--                                            >-->
<!--                                                <EyeIcon class="h-5 w-5" />-->
<!--                                            </button>-->
<!--                                            <button-->
<!--                                                @click="openPasswordResetModal(user)"-->
<!--                                                class="text-blue-600 hover:text-blue-900 p-1 rounded-md hover:bg-blue-50"-->
<!--                                                title="Reset password"-->
<!--                                            >-->
<!--                                                <LockClosedIcon class="h-5 w-5" />-->
<!--                                            </button>-->
                                            <button
                                                @click="openFormModal(user)"
                                                class="text-indigo-600 hover:text-indigo-900 p-1 rounded-md hover:bg-indigo-50"
                                                title="Edit"
                                                :disabled="user.roles.some(r => r.name === 'super-admin')"
                                            >
                                                <PencilIcon class="h-5 w-5" />
                                            </button>
                                            <button
                                                @click="openDeleteModal(user)"
                                                class="text-red-600 hover:text-red-900 p-1 rounded-md hover:bg-red-50"
                                                title="Delete"
                                                :disabled="user.roles.some(r => r.name === 'super-admin')"
                                            >
                                                <TrashIcon class="h-5 w-5" />
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <!-- Pagination -->
                            <Pagination
                                :links="users.links"
                                :current-page="users.current_page"
                                :last-page="users.last_page"
                                @page-changed="loadPage"
                                class="mt-6"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Create/Edit Modal -->
        <Modal :show="showFormModal" @close="closeFormModal" max-width="2xl">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-gray-900">
                        {{ modalTitle }}
                    </h3>
                    <button
                        @click="closeFormModal"
                        class="text-gray-400 hover:text-gray-500 focus:outline-none"
                    >
                        <XMarkIcon class="h-6 w-6" />
                    </button>
                </div>

                <form @submit.prevent="userToEdit ? updateUser() : storeUser()">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Name -->
                        <div>
                            <InputLabel for="name" value="Full Name" required />
                            <TextInput
                                id="name"
                                v-model="currentForm.name"
                                type="text"
                                class="mt-1 block w-full"
                                :class="{ 'border-red-500': currentForm.errors.name }"
                                required
                            />
                            <p v-if="currentForm.errors.name" class="mt-1 text-sm text-red-600">
                                {{ currentForm.errors.name }}
                            </p>
                        </div>

                        <!-- Email -->
                        <div>
                            <InputLabel for="email" value="Email" required />
                            <TextInput
                                id="email"
                                v-model="currentForm.email"
                                type="email"
                                class="mt-1 block w-full"
                                :class="{ 'border-red-500': currentForm.errors.email }"
                                :disabled="!!userToEdit"
                                required
                            />
                            <p v-if="currentForm.errors.email" class="mt-1 text-sm text-red-600">
                                {{ currentForm.errors.email }}
                            </p>
                        </div>

                        <!-- Only show password fields when creating a new user -->
                        <template v-if="!userToEdit">
                            <!-- Password -->
                            <div>
                                <InputLabel for="password" value="Password" required />
                                <TextInput
                                    id="password"
                                    v-model="createForm.password"
                                    type="password"
                                    class="mt-1 block w-full"
                                    :class="{ 'border-red-500': createForm.errors.password }"
                                    required
                                />
                                <p v-if="createForm.errors.password" class="mt-1 text-sm text-red-600">
                                    {{ createForm.errors.password }}
                                </p>
                            </div>

                            <!-- Password Confirmation -->
                            <div>
                                <InputLabel for="password_confirmation" value="Confirm Password" required />
                                <TextInput
                                    id="password_confirmation"
                                    v-model="createForm.password_confirmation"
                                    type="password"
                                    class="mt-1 block w-full"
                                    :class="{ 'border-red-500': createForm.errors.password_confirmation }"
                                    required
                                />
                                <p v-if="createForm.errors.password_confirmation" class="mt-1 text-sm text-red-600">
                                    {{ createForm.errors.password_confirmation }}
                                </p>
                            </div>
                        </template>

                        <!-- Show password update fields when editing (optional) -->
                        <template v-else>
                            <div>
                                <InputLabel for="password" value="New Password (leave blank to keep current)" />
                                <TextInput
                                    id="password"
                                    v-model="editForm.password"
                                    type="password"
                                    class="mt-1 block w-full"
                                    :class="{ 'border-red-500': editForm.errors.password }"
                                />
                                <p v-if="editForm.errors.password" class="mt-1 text-sm text-red-600">
                                    {{ editForm.errors.password }}
                                </p>
                            </div>

                            <div>
                                <InputLabel for="password_confirmation" value="Confirm New Password" />
                                <TextInput
                                    id="password_confirmation"
                                    v-model="editForm.password_confirmation"
                                    type="password"
                                    class="mt-1 block w-full"
                                    :class="{ 'border-red-500': editForm.errors.password_confirmation }"
                                />
                                <p v-if="editForm.errors.password_confirmation" class="mt-1 text-sm text-red-600">
                                    {{ editForm.errors.password_confirmation }}
                                </p>
                            </div>
                        </template>

                        <!-- Status -->
                        <div>
                            <InputLabel for="is_active" value="Status" />
                            <div class="mt-2 flex items-center">
                                <ToggleSwitch
                                    v-model="currentForm.is_active"
                                    class="mr-2"
                                />
                                <span class="text-sm text-gray-600">
                                    {{ currentForm.is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </div>
                        </div>

                        <!-- Roles -->
                        <div class="md:col-span-2">
                            <InputLabel for="roles" value="Roles" />
                            <div class="mt-2 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                                <div v-for="role in roles" :key="role.id" class="flex items-center">
                                    <input
                                        :id="`role-${role.id}`"
                                        v-model="currentForm.roles"
                                        type="checkbox"
                                        :value="role.name"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                    />
                                    <label :for="`role-${role.id}`" class="ml-3 text-sm text-gray-700">
                                        {{ role.name }}
                                    </label>
                                </div>
                            </div>
                            <p v-if="currentForm.errors.roles" class="mt-1 text-sm text-red-600">
                                {{ currentForm.errors.roles }}
                            </p>
                        </div>


                    </div>

                    <!-- Form Actions -->
                    <div class="mt-6 flex justify-end space-x-3">
                        <SecondaryButton @click="closeFormModal" type="button">
                            Cancel
                        </SecondaryButton>
                        <PrimaryButton type="submit" :disabled="currentForm.processing">
                            <ArrowPathIcon v-if="currentForm.processing" class="h-4 w-4 animate-spin mr-2" />
                            {{ userToEdit ? 'Update' : 'Create' }} User
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </Modal>

        <!-- Delete Confirmation Modal -->
        <Modal :show="showDeleteModal" @close="closeDeleteModal" max-width="md">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-gray-900">
                        Delete User
                    </h3>
                    <button
                        @click="closeDeleteModal"
                        class="text-gray-400 hover:text-gray-500 focus:outline-none"
                    >
                        <XMarkIcon class="h-6 w-6" />
                    </button>
                </div>

                <div class="flex items-start">
                    <div class="mr-3 flex-shrink-0">
                        <ExclamationCircleIcon class="h-12 w-12 text-red-500" />
                    </div>
                    <div>
                        <h4 class="text-lg font-medium text-gray-900 mb-2">
                            Are you sure you want to delete this user?
                        </h4>
                        <p class="text-sm text-gray-500">
                            This action cannot be undone. All data associated with this user will be permanently removed.
                        </p>
                        <p v-if="userToDelete" class="mt-2 font-medium">
                            {{ userToDelete.name }} ({{ userToDelete.email }})
                        </p>
                        <div v-if="userToDelete?.roles.length" class="mt-2">
                            <p class="text-sm font-medium">Roles:</p>
                            <div class="flex flex-wrap gap-1 mt-1">
                                <Badge
                                    v-for="role in userToDelete.roles"
                                    :key="role.name"
                                    :color="getRoleColor(role.name)"
                                >
                                    {{ role.name }}
                                </Badge>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <SecondaryButton @click="closeDeleteModal" type="button">
                        Cancel
                    </SecondaryButton>
                    <DangerButton
                        @click="deleteUser"
                        type="button"
                        :disabled="isLoading"
                    >
                        <ArrowPathIcon v-if="isLoading" class="h-4 w-4 animate-spin mr-2" />
                        Delete User
                    </DangerButton>
                </div>
            </div>
        </Modal>

        <!-- Password Reset Modal -->
        <Modal :show="showPasswordResetModal" @close="closePasswordResetModal" max-width="md">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-gray-900">
                        Send Password Reset
                    </h3>
                    <button
                        @click="closePasswordResetModal"
                        class="text-gray-400 hover:text-gray-500 focus:outline-none"
                    >
                        <XMarkIcon class="h-6 w-6" />
                    </button>
                </div>

                <div class="flex items-start">
                    <div class="mr-3 flex-shrink-0">
                        <LockClosedIcon class="h-12 w-12 text-blue-500" />
                    </div>
                    <div>
                        <h4 class="text-lg font-medium text-gray-900 mb-2">
                            Send password reset link to this user?
                        </h4>
                        <p class="text-sm text-gray-500">
                            The user will receive an email with instructions to reset their password.
                        </p>
                        <p v-if="userToResetPassword" class="mt-2 font-medium">
                            {{ userToResetPassword.email }}
                        </p>
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <SecondaryButton @click="closePasswordResetModal" type="button">
                        Cancel
                    </SecondaryButton>
                    <PrimaryButton
                        @click="sendPasswordReset"
                        type="button"
                        :disabled="isLoading"
                    >
                        <ArrowPathIcon v-if="isLoading" class="h-4 w-4 animate-spin mr-2" />
                        Send Reset Link
                    </PrimaryButton>
                </div>
            </div>
        </Modal>
    </AuthenticatedLayout>
</template>
