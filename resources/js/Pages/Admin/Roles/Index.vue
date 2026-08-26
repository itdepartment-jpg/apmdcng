<script setup lang="ts">
import { ref } from "vue";
import { Head, useForm } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

import {
    PlusIcon,
    PencilIcon,
    TrashIcon,
    ShieldCheckIcon,
    XMarkIcon,
    LockClosedIcon,
} from "@heroicons/vue/24/outline";

import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";

/*
|--------------------------------------------------------------------------
| Types
|--------------------------------------------------------------------------
*/

interface Permission {
    id: number;
    name: string;
}

interface Role {
    id: number;
    name: string;
    guard_name: string;
    permissions?: Permission[];
}

/*
|--------------------------------------------------------------------------
| Props
|--------------------------------------------------------------------------
*/

const props = defineProps<{
    roles: Role[];
    permissions: Permission[];
}>();

/*
|--------------------------------------------------------------------------
| Create Role Form
|--------------------------------------------------------------------------
*/

const form = useForm({
    role_name: "",
    permissions: [] as string[],
});

const deleteForm = useForm({});

/*
|--------------------------------------------------------------------------
| Edit Role State
|--------------------------------------------------------------------------
*/

const editingRole = ref<Role | null>(null);
const deletingRole = ref<Role | null>(null);

const editForm = useForm({
    role_name: "",
    permissions: [] as string[],
});

/*
|--------------------------------------------------------------------------
| Create Role
|--------------------------------------------------------------------------
*/

const submitForm = () => {
    form.post(route("admin.roles-permissions.store"), {
        preserveScroll: true,

        onSuccess: () => {
            form.reset();
        },
    });
};

const cancelForm = () => {
    form.reset();
    form.clearErrors();
};

/*
|--------------------------------------------------------------------------
| Edit Role
|--------------------------------------------------------------------------
*/

const openEditModal = (role: Role) => {
    editingRole.value = role;

    editForm.role_name = role.name;

    editForm.permissions = role.permissions
        ? role.permissions.map((permission) => permission.name)
        : [];

    editForm.clearErrors();
};

const closeEditModal = () => {
    editingRole.value = null;

    editForm.reset();
    editForm.clearErrors();
};

const confirmDeleteRole = (role: Role) => {
    deletingRole.value = role;
};

const closeDeleteModal = () => {
    deletingRole.value = null;
};

const deleteRole = () => {
    if (!deletingRole.value) {
        return;
    }

    deleteForm.delete(
        route(
            "admin.roles-permissions.destroy",
            deletingRole.value.id
        ),
        {
            preserveScroll: true,

            onSuccess: () => {
                closeDeleteModal();
                deleteForm.reset();
            },
        }
    );
};
const updateRole = () => {
    if (!editingRole.value) {
        return;
    }

    editForm.put(
        route(
            "roles-permissions.update",
            editingRole.value.id
        ),
        {
            preserveScroll: true,

            onSuccess: () => {
                closeEditModal();
            },
        }
    );
};
</script>

<template>

    <Head title="Roles & Permissions" />

    <AuthenticatedLayout>

        <!-- ========================================================= -->
        <!-- Dashboard Header -->
        <!-- ========================================================= -->

        <template #header>

            <h2 class="text-2xl font-bold leading-tight text-gray-800">
                Roles & Permissions
            </h2>

        </template>


        <div class="p-6">

            <!-- ===================================================== -->
            <!-- Page Header -->
            <!-- ===================================================== -->

            <div class="flex items-center justify-between mb-6">

                <div>

                    <h1 class="text-2xl font-bold text-gray-900">
                        Roles & Permissions
                    </h1>

                    <p class="mt-1 text-gray-500">
                        Create roles and manage the permissions assigned to them.
                    </p>

                </div>

                <div
                    class="flex items-center justify-center w-11 h-11 rounded-lg bg-blue-50"
                >
                    <ShieldCheckIcon class="w-6 h-6 text-blue-600" />
                </div>

            </div>


            <!-- ===================================================== -->
            <!-- Create Role -->
            <!-- ===================================================== -->

            <div class="overflow-hidden bg-white rounded-xl shadow">

                <!-- Header -->
                <div class="px-6 py-5 border-b border-gray-100">

                    <div class="flex items-center gap-3">

                        <div
                            class="flex items-center justify-center w-10 h-10 rounded-lg bg-blue-50"
                        >
                            <PlusIcon class="w-5 h-5 text-blue-600" />
                        </div>

                        <div>

                            <h2 class="text-lg font-semibold text-gray-900">
                                Create New Role
                            </h2>

                            <p class="text-sm text-gray-500">
                                Create a role and assign permissions to it.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Form -->
                <form
                    @submit.prevent="submitForm"
                    class="p-6"
                >

                    <!-- Role Name -->
                    <div class="max-w-2xl">

                        <InputLabel
                            for="role_name"
                            value="Role Name"
                        />

                        <TextInput
                            id="role_name"
                            v-model="form.role_name"
                            type="text"
                            class="block w-full mt-1"
                            placeholder="e.g. content-manager"
                            required
                        />

                        <p
                            v-if="form.errors.role_name"
                            class="mt-1 text-sm text-red-600"
                        >
                            {{ form.errors.role_name }}
                        </p>

                    </div>


                    <!-- Permissions -->
                    <div class="mt-8">

                        <div class="mb-4">

                            <h3 class="text-base font-semibold text-gray-900">
                                Permissions
                            </h3>

                            <p class="mt-1 text-sm text-gray-500">
                                Select the permissions this role should have.
                            </p>

                        </div>


                        <div
                            v-if="props.permissions.length"
                            class="grid grid-cols-1 gap-3 max-w-5xl sm:grid-cols-2 lg:grid-cols-3"
                        >

                            <label
                                v-for="permission in props.permissions"
                                :key="permission.id"
                                class="flex items-center gap-3 p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition"
                            >

                                <input
                                    v-model="form.permissions"
                                    type="checkbox"
                                    :value="permission.name"
                                    class="text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                                />

                                <span class="text-sm text-gray-700">
                                    {{ permission.name }}
                                </span>

                            </label>

                        </div>


                        <div
                            v-else
                            class="p-6 text-sm text-center text-gray-500 border border-dashed border-gray-300 rounded-lg"
                        >
                            No permissions available.
                        </div>


                        <p
                            v-if="form.errors.permissions"
                            class="mt-3 text-sm text-red-600"
                        >
                            {{ form.errors.permissions }}
                        </p>

                    </div>


                    <!-- Actions -->
                    <div
                        class="flex justify-end gap-3 pt-6 mt-8 border-t border-gray-100"
                    >

                        <SecondaryButton
                            type="button"
                            @click="cancelForm"
                        >
                            <XMarkIcon class="w-4 h-4 mr-2" />
                            Cancel
                        </SecondaryButton>

                        <PrimaryButton
                            type="submit"
                            :disabled="form.processing"
                        >

                            <PlusIcon class="w-4 h-4 mr-2" />

                            {{
                                form.processing
                                    ? "Creating..."
                                    : "Create Role"
                            }}

                        </PrimaryButton>

                    </div>

                </form>

            </div>


            <!-- ===================================================== -->
            <!-- Roles List -->
            <!-- ===================================================== -->

            <div class="mt-8 overflow-hidden bg-white rounded-xl shadow">

                <!-- Header -->
                <div class="px-6 py-5 border-b border-gray-100">

                    <div class="flex items-center gap-3">

                        <div
                            class="flex items-center justify-center w-10 h-10 rounded-lg bg-purple-50"
                        >
                            <ShieldCheckIcon class="w-5 h-5 text-purple-600" />
                        </div>

                        <div>

                            <h2 class="text-lg font-semibold text-gray-900">
                                Roles
                            </h2>

                            <p class="text-sm text-gray-500">
                                Manage system roles and their assigned permissions.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Table -->
                <div class="overflow-x-auto">

                    <table class="min-w-full">

                        <thead class="bg-gray-50">

                            <tr>

                                <th
                                    class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase"
                                >
                                    Role
                                </th>

                                <th
                                    class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase"
                                >
                                    Guard
                                </th>

                                <th
                                    class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase"
                                >
                                    Permissions
                                </th>

                                <th
                                    class="px-6 py-3 text-xs font-semibold tracking-wider text-right text-gray-500 uppercase"
                                >
                                    Actions
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            <tr
                                v-for="role in props.roles"
                                :key="role.id"
                                class="border-t hover:bg-gray-50 transition"
                            >

                                <!-- Role -->
                                <td class="px-6 py-4">

                                    <div class="flex items-center gap-3">

                                        <div
                                            class="flex items-center justify-center w-9 h-9 rounded-lg bg-gray-100"
                                        >
                                            <ShieldCheckIcon
                                                class="w-5 h-5 text-gray-600"
                                            />
                                        </div>

                                        <div>

                                            <p class="font-medium text-gray-900">
                                                {{ role.name }}
                                            </p>

                                            <p
                                                v-if="role.name === 'super-admin'"
                                                class="mt-0.5 text-xs text-red-500"
                                            >
                                                System Role
                                            </p>

                                        </div>

                                    </div>

                                </td>


                                <!-- Guard -->
                                <td class="px-6 py-4">

                                    <span
                                        class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-700"
                                    >
                                        {{ role.guard_name }}
                                    </span>

                                </td>


                                <!-- Permissions -->
                                <td class="px-6 py-4">

                                    <div
                                        v-if="role.name === 'super-admin'"
                                        class="text-sm font-medium text-purple-600"
                                    >
                                        All Permissions
                                    </div>

                                    <div
                                        v-else-if="role.permissions?.length"
                                        class="flex flex-wrap gap-2"
                                    >

                                        <span
                                            v-for="permission in role.permissions"
                                            :key="permission.id"
                                            class="inline-flex px-2.5 py-1 rounded-full text-xs font-medium bg-blue-50 text-blue-700"
                                        >
                                            {{ permission.name }}
                                        </span>

                                    </div>

                                    <span
                                        v-else
                                        class="text-sm text-gray-400"
                                    >
                                        No permissions assigned
                                    </span>

                                </td>


                               <!-- Actions -->
<td class="px-6 py-4">

    <div class="flex justify-end gap-2">

        <!-- Edit -->
        <button
            v-if="!['super-admin', 'admin'].includes(role.name)"
            type="button"
            @click="openEditModal(role)"
            class="inline-flex items-center justify-center w-9 h-9 rounded-lg text-blue-600 hover:bg-blue-50 hover:text-blue-800 transition"
            title="Edit Role"
        >
            <PencilIcon class="w-5 h-5" />
        </button>


        <!-- Delete -->
        <button
            v-if="!['super-admin', 'admin'].includes(role.name)"
            type="button"
            @click="confirmDeleteRole(role)"
            class="inline-flex items-center justify-center w-9 h-9 rounded-lg text-red-600 hover:bg-red-50 hover:text-red-800 transition"
            title="Delete Role"
        >
            <TrashIcon class="w-5 h-5" />
        </button>


        <!-- Protected -->
        <span
            v-if="['super-admin', 'admin'].includes(role.name)"
            class="text-xs text-gray-400"
        >
            Protected
        </span>

    </div>

</td>

                            </tr>


                            <!-- Empty State -->
                            <tr v-if="props.roles.length === 0">

                                <td
                                    colspan="4"
                                    class="px-6 py-10 text-center text-gray-500"
                                >
                                    No roles found.
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>


            <!-- ===================================================== -->
            <!-- Permissions List -->
            <!-- ===================================================== -->

            <div class="mt-8 overflow-hidden bg-white rounded-xl shadow">

                <!-- Header -->
                <div class="px-6 py-5 border-b border-gray-100">

                    <div class="flex items-center gap-3">

                        <div
                            class="flex items-center justify-center w-10 h-10 rounded-lg bg-green-50"
                        >
                            <LockClosedIcon class="w-5 h-5 text-green-600" />
                        </div>

                        <div>

                            <h2 class="text-lg font-semibold text-gray-900">
                                Permissions
                            </h2>

                            <p class="text-sm text-gray-500">
                                All permissions currently available in the system.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Permissions Grid -->
                <div class="p-6">

                    <div
                        v-if="props.permissions.length"
                        class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
                    >

                        <div
                            v-for="permission in props.permissions"
                            :key="permission.id"
                            class="flex items-center gap-3 p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition"
                        >

                            <div
                                class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-gray-100"
                            >
                                <LockClosedIcon class="w-4 h-4 text-gray-500" />
                            </div>

                            <span class="text-sm font-medium text-gray-700">
                                {{ permission.name }}
                            </span>

                        </div>

                    </div>


                    <div
                        v-else
                        class="py-10 text-center text-gray-500"
                    >
                        No permissions found.
                    </div>

                </div>

            </div>

        </div>


        <!-- ========================================================= -->
        <!-- Edit Role Modal -->
        <!-- ========================================================= -->

        <div
            v-if="editingRole"
            class="fixed inset-0 z-50 flex items-center justify-center p-4"
        >

            <!-- Backdrop -->
            <div
                class="absolute inset-0 bg-black/50"
                @click="closeEditModal"
            ></div>


            <!-- Modal -->
            <div
                class="relative w-full max-w-3xl overflow-hidden bg-white rounded-xl shadow-xl"
            >

                <!-- Header -->
                <div
                    class="flex items-center justify-between px-6 py-5 border-b border-gray-100"
                >

                    <div>

                        <h2 class="text-xl font-semibold text-gray-900">
                            Edit Role
                        </h2>

                        <p class="mt-1 text-sm text-gray-500">
                            Update the role name and assigned permissions.
                        </p>

                    </div>

                    <button
                        type="button"
                        @click="closeEditModal"
                        class="inline-flex items-center justify-center w-9 h-9 rounded-lg text-gray-500 hover:bg-gray-100 transition"
                        title="Close"
                    >
                        <XMarkIcon class="w-5 h-5" />
                    </button>

                </div>


                <!-- Form -->
                <form
                    @submit.prevent="updateRole"
                    class="p-6"
                >

                    <!-- Role Name -->
                    <div>

                        <InputLabel
                            for="edit_role_name"
                            value="Role Name"
                        />

                        <TextInput
                            id="edit_role_name"
                            v-model="editForm.role_name"
                            type="text"
                            class="block w-full mt-1"
                            required
                        />

                        <p
                            v-if="editForm.errors.role_name"
                            class="mt-1 text-sm text-red-600"
                        >
                            {{ editForm.errors.role_name }}
                        </p>

                    </div>


                    <!-- Permissions -->
                    <div class="mt-6">

                        <h3 class="text-base font-semibold text-gray-900">
                            Permissions
                        </h3>

                        <p class="mt-1 mb-4 text-sm text-gray-500">
                            Select the permissions assigned to this role.
                        </p>


                        <div
                            v-if="props.permissions.length"
                            class="grid grid-cols-1 gap-3 max-h-80 overflow-y-auto sm:grid-cols-2 lg:grid-cols-3"
                        >

                            <label
                                v-for="permission in props.permissions"
                                :key="permission.id"
                                class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition"
                            >

                                <input
                                    v-model="editForm.permissions"
                                    type="checkbox"
                                    :value="permission.name"
                                    class="text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                                />

                                <span class="text-sm text-gray-700">
                                    {{ permission.name }}
                                </span>

                            </label>

                        </div>


                        <p
                            v-if="editForm.errors.permissions"
                            class="mt-2 text-sm text-red-600"
                        >
                            {{ editForm.errors.permissions }}
                        </p>

                    </div>


                    <!-- Modal Actions -->
                    <div
                        class="flex justify-end gap-3 pt-6 mt-6 border-t border-gray-100"
                    >

                        <SecondaryButton
                            type="button"
                            @click="closeEditModal"
                        >
                            <XMarkIcon class="w-4 h-4 mr-2" />
                            Cancel
                        </SecondaryButton>

                        <PrimaryButton
                            type="submit"
                            :disabled="editForm.processing"
                        >
                            {{
                                editForm.processing
                                    ? "Updating..."
                                    : "Update Role"
                            }}
                        </PrimaryButton>

                    </div>

                </form>

            </div>

        </div>

        <!-- Delete Role Modal -->
<div
    v-if="deletingRole"
    class="fixed inset-0 z-50 flex items-center justify-center p-4"
>

    <!-- Backdrop -->
    <div
        class="absolute inset-0 bg-black/50"
        @click="closeDeleteModal"
    ></div>


    <!-- Modal -->
    <div
        class="relative w-full max-w-md bg-white rounded-xl shadow-xl overflow-hidden"
    >

        <!-- Header -->
        <div class="px-6 py-5 border-b border-gray-100">

            <div class="flex items-center gap-3">

                <div
                    class="flex items-center justify-center w-10 h-10 rounded-lg bg-red-50"
                >
                    <TrashIcon class="w-5 h-5 text-red-600" />
                </div>

                <div>
                    <h2 class="text-lg font-semibold text-gray-900">
                        Delete Role
                    </h2>

                    <p class="text-sm text-gray-500">
                        This action cannot be undone.
                    </p>
                </div>

            </div>

        </div>


        <!-- Body -->
        <div class="px-6 py-5">

            <p class="text-sm text-gray-600">
                Are you sure you want to delete the role
                <strong class="text-gray-900">
                    {{ deletingRole.name }}
                </strong>?
            </p>

            <p class="mt-3 text-sm text-gray-500">
                The role will be permanently removed from the system.
            </p>

        </div>


        <!-- Actions -->
        <div
            class="flex justify-end gap-3 px-6 py-4 bg-gray-50 border-t border-gray-100"
        >

            <SecondaryButton
                type="button"
                @click="closeDeleteModal"
            >
                Cancel
            </SecondaryButton>

            <button
    type="button"
    @click="deleteRole"
    :disabled="deleteForm.processing"
    class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 disabled:opacity-50 disabled:cursor-not-allowed transition"
>
    <TrashIcon
        v-if="!deleteForm.processing"
        class="w-4 h-4 mr-2"
    />

    <span>
        {{ deleteForm.processing ? "Deleting..." : "Delete Role" }}
    </span>
</button>
        </div>

    </div>

</div>

    </AuthenticatedLayout>
</template>