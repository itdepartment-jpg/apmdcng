<script setup lang="ts">
import { ref, computed } from "vue";
import { Head, router, useForm } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

import {
    PencilIcon,
    PlusIcon,
    TrashIcon,
    ArrowPathIcon,
    XMarkIcon,
    UserIcon,
} from "@heroicons/vue/24/outline";

import {
    ExclamationCircleIcon,
} from "@heroicons/vue/24/solid";

import Modal from "@/Components/Modal.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import DangerButton from "@/Components/DangerButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import Pagination from "@/Components/Pagination.vue";
import ToggleSwitch from "@/Components/ToggleSwitch.vue";
import Badge from "@/Components/Badge.vue";



interface UserRole {
    name: string;
}

interface User {
    id: number;
    name: string;
    email: string;
    is_active: boolean;
    created_at: string;
    last_login_at?: string | null;
    roles: UserRole[];
}

interface Role {
    id: number;
    name: string;
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

    roles: Role[];

  can: {
        create: boolean;
        edit: boolean;
        delete: boolean;
        impersonate: boolean;
        superAdmin: boolean;
        currentUserId: number;
    };

    filters: {
        search?: string;
        role?: string;
        status?: string;
    };
}

const props = defineProps<Props>();

const users = ref(props.users);

const search = ref(props.filters?.search ?? "");

function applySearch() {
    router.get(
        route("admin.users.index"),
        {
            search: search.value || undefined,
            role: selectedRole.value || undefined,
            status: selectedStatus.value || undefined,
        },
        {
            preserveState: false,
            preserveScroll: true,
            replace: true,
        }
    );
}

const selectedRole = ref(props.filters?.role ?? "");
const selectedStatus = ref(props.filters?.status ?? "");

const showFormModal = ref(false);
const showDeleteModal = ref(false);

const userToEdit = ref<User | null>(null);
const userToDelete = ref<User | null>(null);

const isLoading = ref(false);

const createForm = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
    roles: [] as string[],
    is_active: true,
});

const editForm = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
    roles: [] as string[],
    is_active: true,
});

const modalTitle = computed(() =>
    userToEdit.value ? "Edit User" : "Create New User"
);

const currentForm = computed(() =>
    userToEdit.value ? editForm : createForm
);

type BadgeColor =
    | "gray"
    | "red"
    | "yellow"
    | "green"
    | "blue"
    | "indigo"
    | "purple"
    | "pink";

const roleColors: Record<string, BadgeColor> = {
    "super-admin": "purple",
    admin: "blue",
    editor: "green",
};

function getRoleColor(roleName: string): BadgeColor {
    return roleColors[roleName] ?? "gray";
}

function hasSuperAdminRole(user: User): boolean {
    return user.roles.some((role) => role.name === "super-admin");
}

function canManageUser(user: User): boolean {
    if (hasSuperAdminRole(user)) {
        return props.can.superAdmin;
    }

    return true;
}

function isCurrentUser(user: User): boolean {
    return user.id === props.can.currentUserId;
}

function openFormModal(user: User | null = null) {
    userToEdit.value = user;

    if (user) {
        editForm.name = user.name;
        editForm.email = user.email;
        editForm.password = "";
        editForm.password_confirmation = "";
        editForm.is_active = user.is_active;
        editForm.roles = user.roles.map((role) => role.name);
    } else {
        createForm.reset();
        createForm.clearErrors();
        createForm.is_active = true;
        createForm.roles = [];
    }

    showFormModal.value = true;
}

function closeFormModal() {
    showFormModal.value = false;

    createForm.reset();
    createForm.clearErrors();

    editForm.reset();
    editForm.clearErrors();

    userToEdit.value = null;
}

function storeUser() {
    isLoading.value = true;

    createForm.post(route("admin.users.store"), {
        preserveScroll: true,

        onSuccess: () => {
            closeFormModal();
            refreshUsers();
        },

        onFinish: () => {
            isLoading.value = false;
        },
    });
}

function updateUser() {
    if (!userToEdit.value) {
        return;
    }

    isLoading.value = true;

    editForm.put(
        route("admin.users.update", userToEdit.value.id),
        {
            preserveScroll: true,

            onSuccess: () => {
                closeFormModal();
                refreshUsers();
            },

            onFinish: () => {
                isLoading.value = false;
            },
        }
    );
}

function openDeleteModal(user: User) {
    userToDelete.value = user;
    showDeleteModal.value = true;
}

function closeDeleteModal() {
    showDeleteModal.value = false;
    userToDelete.value = null;
}

function deleteUser() {
    if (!userToDelete.value) {
        return;
    }

    isLoading.value = true;

    router.delete(
        route("admin.users.destroy", userToDelete.value.id),
        {
            preserveScroll: true,

            onSuccess: () => {
                closeDeleteModal();
                refreshUsers();
            },

            onFinish: () => {
                isLoading.value = false;
            },
        }
    );
}

function toggleUserStatus(user: User) {
    router.put(
        route("admin.users.toggle-status", user.id),
        {},
        {
            preserveScroll: true,

            onSuccess: () => {
                refreshUsers();
            },
        }
    );
}

function refreshUsers() {
    router.visit(route("admin.users.index"), {
        preserveState: true,
        preserveScroll: true,
        only: ["users"],
        onSuccess: (page) => {
            users.value = page.props.users as typeof props.users;
        },
    });
}

function loadPage(url: string | null) {
    if (!url) {
        return;
    }

    router.visit(url, {
        preserveScroll: true,
    });
}
</script>

<template>
    <Head title="User Management" />

    

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-2xl font-bold leading-tight text-gray-800">
                User Management
            </h2>
        </template>

        <div class="p-6">

            <!-- Header -->
            <div class="flex justify-between items-center mb-6">

                <div>
                    <h1 class="text-2xl font-bold">
                        User Management
                    </h1>

                    <p class="text-gray-500 mt-1">
                        Manage system users and their access to the APMDC administration portal.
                    </p>
                </div>

                <button
                    v-if="props.can.create"
                    type="button"
                    @click="openFormModal()"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg inline-flex items-center gap-2 transition"
                >
                    <PlusIcon class="w-5 h-5" />
                    New User
                </button>

            </div>

            <!-- Filters -->
<div class="bg-white rounded-xl shadow p-4 mb-6">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

        <!-- Search -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Search Users
            </label>

            <input
                v-model="search"
                type="text"
                placeholder="Search by name or email..."
                @keyup.enter="applySearch"
                class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
            />

            <button
                type="button"
                @click="applySearch"
                class="mt-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm transition"
            >
                Search
            </button>
        </div>

        <!-- Role -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Role
            </label>

            <select
                v-model="selectedRole"
                @change="applySearch"
                class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
            >
                <option value="">
                    All Roles
                </option>

                <option
                    v-for="role in props.roles"
                    :key="role.id"
                    :value="role.name"
                >
                    {{ role.name }}
                </option>
            </select>
        </div>

        <!-- Status -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Status
            </label>

            <select
                v-model="selectedStatus"
                @change="applySearch"
                class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
            >
                <option value="">
                    All Statuses
                </option>

                <option value="active">
                    Active
                </option>

                <option value="inactive">
                    Inactive
                </option>
            </select>
        </div>

    </div>

</div>

            <!-- Users Table -->
            <div class="bg-white rounded-xl shadow overflow-hidden">

                <div class="overflow-x-auto">

                    <table class="min-w-full">

                        <thead class="bg-gray-100">

                            <tr>

                                <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
                                    User
                                </th>

                                <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
                                    Email
                                </th>

                                <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
                                    Roles
                                </th>

                                <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
                                    Status
                                </th>

                                <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
                                    Last Login
                                </th>

                                <th class="px-4 py-3 text-center text-sm font-semibold text-gray-700">
                                    Actions
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr
                                v-for="user in users.data"
                                :key="user.id"
                                class="border-t hover:bg-gray-50 transition"
                            >

                                <!-- User -->
                                <td class="px-4 py-4">

                                    <div class="flex items-center">

                                        <div
                                            class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center mr-3"
                                        >
                                            <UserIcon class="w-5 h-5 text-gray-500" />
                                        </div>

                                        <div>

                                            <div class="font-medium text-gray-900">
                                                {{ user.name }}
                                            </div>

                                            <div class="text-xs text-gray-500">
                                                ID: {{ user.id }}
                                            </div>

                                        </div>

                                    </div>

                                </td>

                                <!-- Email -->
                                <td class="px-4 py-4 text-sm text-gray-700">
                                    {{ user.email }}
                                </td>

                                <!-- Roles -->
                                <td class="px-4 py-4">

                                    <div
                                        v-if="user.roles.length"
                                        class="flex flex-wrap gap-1"
                                    >

                                        <Badge
                                            v-for="role in user.roles"
                                            :key="role.name"
                                            :color="getRoleColor(role.name)"
                                        >
                                            {{ role.name }}
                                        </Badge>

                                    </div>

                                    <span
                                        v-else
                                        class="text-sm text-gray-400"
                                    >
                                        No role assigned
                                    </span>

                                </td>

                                <!-- Status -->
                                <td class="px-4 py-4">

                                    <div class="flex items-center gap-2">

                                        <ToggleSwitch
                                                :modelValue="user.is_active"
                                                :disabled="isCurrentUser(user)"
                                                @update:modelValue="toggleUserStatus(user)"
                                            />
                                                                                    <span
                                            class="text-sm"
                                            :class="
                                                user.is_active
                                                    ? 'text-green-600'
                                                    : 'text-red-600'
                                            "
                                        >
                                            {{ user.is_active ? "Active" : "Inactive" }}
                                        </span>

                                    </div>

                                </td>

                                <!-- Last Login -->
                                <td class="px-4 py-4 text-sm text-gray-500">

                                    {{
                                        user.last_login_at
                                            ? new Date(
                                                  user.last_login_at
                                              ).toLocaleString()
                                            : "Never"
                                    }}

                                </td>

                               <!-- Actions -->
                                <td class="px-4 py-4">
                                    <div class="flex justify-center gap-2">

                                        <!-- Edit -->
                                        <button
                                            v-if="props.can.edit && canManageUser(user)"
                                            type="button"
                                            @click="openFormModal(user)"
                                            class="inline-flex items-center justify-center w-9 h-9 rounded-lg text-blue-600 hover:bg-blue-50 hover:text-blue-800 transition"
                                            title="Edit User"
                                        >
                                            <PencilIcon class="w-5 h-5" />
                                        </button>

                                        <!-- Delete -->
                                        <button
                                            v-if="
                                                props.can.delete &&
                                                canManageUser(user) &&
                                                !isCurrentUser(user)
                                            "
                                            type="button"
                                            @click="openDeleteModal(user)"
                                            class="inline-flex items-center justify-center w-9 h-9 rounded-lg text-red-600 hover:bg-red-50 hover:text-red-800 transition"
                                            title="Delete User"
                                        >
                                            <TrashIcon class="w-5 h-5" />
                                        </button>

                                    </div>
                                </td>

                            </tr>

                            <!-- Empty -->
                            <tr v-if="users.data.length === 0">

                                <td
                                    colspan="6"
                                    class="text-center py-10 text-gray-500"
                                >
                                    No users found.
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

            <!-- Pagination -->
            <Pagination
                v-if="users.data.length > 0"
                :links="users.links"
                :current-page="users.current_page"
                :last-page="users.last_page"
                @page-changed="loadPage"
                class="mt-6"
            />

        </div>

        <!-- =====================================================
             CREATE / EDIT USER MODAL
        ====================================================== -->

        <Modal
            :show="showFormModal"
            @close="closeFormModal"
            max-width="2xl"
        >

            <div class="p-6">

                <div class="flex items-center justify-between mb-6">

                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">
                            {{ modalTitle }}
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            {{
                                userToEdit
                                    ? "Update this user's account and access."
                                    : "Create a new user account."
                            }}
                        </p>
                    </div>

                    <button
                        type="button"
                        @click="closeFormModal"
                        class="text-gray-400 hover:text-gray-600"
                    >
                        <XMarkIcon class="w-6 h-6" />
                    </button>

                </div>

                <form
                    @submit.prevent="
                        userToEdit ? updateUser() : storeUser()
                    "
                >

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Name -->
                        <div>

                            <InputLabel
                                for="name"
                                value="Full Name"
                            />

                            <TextInput
                                id="name"
                                v-model="currentForm.name"
                                type="text"
                                class="mt-1 block w-full"
                                required
                            />

                            <p
                                v-if="currentForm.errors.name"
                                class="mt-1 text-sm text-red-600"
                            >
                                {{ currentForm.errors.name }}
                            </p>

                        </div>

                        <!-- Email -->
                        <div>

                            <InputLabel
                                for="email"
                                value="Email Address"
                            />

                            <TextInput
                                id="email"
                                v-model="currentForm.email"
                                type="email"
                                class="mt-1 block w-full"
                                required
                            />

                            <p
                                v-if="currentForm.errors.email"
                                class="mt-1 text-sm text-red-600"
                            >
                                {{ currentForm.errors.email }}
                            </p>

                        </div>

                        <!-- Password -->
                        <div>

                            <InputLabel
                                for="password"
                                :value="
                                    userToEdit
                                        ? 'New Password'
                                        : 'Password'
                                "
                            />

                            <TextInput
                                id="password"
                                v-model="currentForm.password"
                                type="password"
                                class="mt-1 block w-full"
                                :required="!userToEdit"
                            />

                            <p
                                v-if="userToEdit"
                                class="mt-1 text-xs text-gray-500"
                            >
                                Leave blank to keep the current password.
                            </p>

                            <p
                                v-if="currentForm.errors.password"
                                class="mt-1 text-sm text-red-600"
                            >
                                {{ currentForm.errors.password }}
                            </p>

                        </div>

                        <!-- Confirm Password -->
                        <div>

                            <InputLabel
                                for="password_confirmation"
                                value="Confirm Password"
                            />

                            <TextInput
                                id="password_confirmation"
                                v-model="currentForm.password_confirmation"
                                type="password"
                                class="mt-1 block w-full"
                                :required="!userToEdit"
                            />

                            <p
                                v-if="
                                    currentForm.errors.password_confirmation
                                "
                                class="mt-1 text-sm text-red-600"
                            >
                                {{
                                    currentForm.errors
                                        .password_confirmation
                                }}
                            </p>

                        </div>

                        <!-- Status -->
                        <div>

                            <InputLabel
                                value="Account Status"
                            />

                            <div class="mt-3 flex items-center gap-3">

                                <ToggleSwitch
                                    v-model="currentForm.is_active"
                                />

                                <span class="text-sm text-gray-600">
                                    {{
                                        currentForm.is_active
                                            ? "Active"
                                            : "Inactive"
                                    }}
                                </span>

                            </div>

                        </div>

                        <!-- Roles -->
                        <div class="md:col-span-2">

                            <InputLabel value="Assign Role" />

                            <div
                                class="mt-3 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3"
                            >

                                <label
                                    v-for="role in props.roles"
                                    :key="role.id"
                                    class="flex items-center gap-3 border rounded-lg p-3 hover:bg-gray-50 cursor-pointer"
                                >

                                    <input
                                        v-model="currentForm.roles"
                                        type="checkbox"
                                        :value="role.name"
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                                    />

                                    <span class="text-sm text-gray-700">
                                        {{ role.name }}
                                    </span>

                                </label>

                            </div>

                            <p
                                v-if="currentForm.errors.roles"
                                class="mt-1 text-sm text-red-600"
                            >
                                {{ currentForm.errors.roles }}
                            </p>

                        </div>

                    </div>

                    <!-- Actions -->
                    <div class="mt-8 flex justify-end gap-3">

                        <SecondaryButton
                            type="button"
                            @click="closeFormModal"
                        >
                            Cancel
                        </SecondaryButton>

                        <PrimaryButton
                            type="submit"
                            :disabled="currentForm.processing || isLoading"
                        >

                            <ArrowPathIcon
                                v-if="currentForm.processing || isLoading"
                                class="w-4 h-4 mr-2 animate-spin"
                            />

                            {{
                                userToEdit
                                    ? "Update User"
                                    : "Create User"
                            }}

                        </PrimaryButton>

                    </div>

                </form>

            </div>

        </Modal>

        <!-- =====================================================
             DELETE MODAL
        ====================================================== -->

        <Modal
            :show="showDeleteModal"
            @close="closeDeleteModal"
            max-width="md"
        >

            <div class="p-6">

                <div class="flex items-start gap-4">

                    <ExclamationCircleIcon
                        class="w-12 h-12 text-red-500 flex-shrink-0"
                    />

                    <div>

                        <h3 class="text-lg font-semibold text-gray-900">
                            Delete User
                        </h3>

                        <p class="mt-2 text-sm text-gray-500">
                            Are you sure you want to delete this user?
                        </p>

                        <p
                            v-if="userToDelete"
                            class="mt-3 font-medium text-gray-900"
                        >
                            {{ userToDelete.name }}
                        </p>

                        <p
                            v-if="userToDelete"
                            class="text-sm text-gray-500"
                        >
                            {{ userToDelete.email }}
                        </p>

                    </div>

                </div>

                <div class="mt-6 flex justify-end gap-3">

                    <SecondaryButton
                        type="button"
                        @click="closeDeleteModal"
                    >
                        Cancel
                    </SecondaryButton>

                    <DangerButton
                        type="button"
                        @click="deleteUser"
                        :disabled="isLoading"
                    >
                        <ArrowPathIcon
                            v-if="isLoading"
                            class="w-4 h-4 mr-2 animate-spin"
                        />

                        Delete User
                    </DangerButton>

                </div>

            </div>

        </Modal>

    </AuthenticatedLayout>
</template>