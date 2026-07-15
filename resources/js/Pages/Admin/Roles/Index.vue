<script setup lang="ts">
import { ref } from 'vue'
import {Head, useForm} from '@inertiajs/vue3'
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {
    ArrowPathIcon,
    LockClosedIcon,
    PencilIcon,
    PlusIcon,
    TrashIcon,
    UserIcon,
    XMarkIcon
} from "@heroicons/vue/24/outline";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import Badge from "@/Components/Badge.vue";
import {ExclamationCircleIcon} from "@heroicons/vue/24/solid";
import ToggleSwitch from "@/Components/ToggleSwitch.vue";
import InputLabel from "@/Components/InputLabel.vue";
import Modal from "@/Components/Modal.vue";
import Pagination from "@/Components/Pagination.vue";
import DangerButton from "@/Components/DangerButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

// interface PageProps {
//     flash: {
//         success?: string
//     }
// }
//
// const page = usePage<PageProps>()

const form = useForm({
    role_name: '',
    permissions: [] as string[]
})

const addPermission = () => {
    form.permissions.push('')
}

const removePermission = (index: number) => {
    form.permissions.splice(index, 1)
}

const submitForm = () => {
    form.post(route('roles-permissions.store'))
}
</script>

<template>

    <Head title="Roles Management" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-2xl font-bold leading-tight text-gray-800">
                Roles Management
            </h2>
        </template>
        <div class="p-6 max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold mb-4">Create Role & Assign Permissions</h1>

            <form @submit.prevent="submitForm" class="space-y-6">
                <div>
                    <label class="block font-medium">Role Name</label>
                    <input
                        v-model="form.role_name"
                        type="text"
                        class="border p-2 w-full"
                        placeholder="e.g. admin"
                    />
                    <div v-if="form.errors.role_name" class="text-red-500 text-sm">
                        {{ form.errors.role_name }}
                    </div>
                </div>

                <div>
                    <label class="block font-medium mb-2">Permissions</label>
                    <div
                        v-for="(permission, index) in form.permissions"
                        :key="index"
                        class="flex items-center space-x-2 mb-2"
                    >
                        <input
                            v-model="form.permissions[index]"
                            type="text"
                            class="border p-2 w-full"
                            placeholder="e.g. edit articles"
                        />
                        <button
                            type="button"
                            @click="removePermission(index)"
                            class="text-red-600"
                        >
                            Remove
                        </button>
                    </div>
                    <button
                        type="button"
                        @click="addPermission"
                        class="text-blue-600 hover:underline"
                    >
                        + Add Permission
                    </button>
                </div>

                <button
                    type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
                >
                    Save
                </button>

                <!--            <div v-if="page.props.flash.success" class="text-green-600 mt-4">-->
                <!--                {{ page.props.flash.success }}-->
                <!--            </div>-->
            </form>
        </div>


    </AuthenticatedLayout>
</template>
