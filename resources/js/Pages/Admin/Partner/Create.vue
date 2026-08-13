<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, router, useForm } from "@inertiajs/vue3";

const showSuccessMessage = ref(false);
const form = useForm({
    name: "",
    contact_person: "",
    email: "",
    phone: "",
    address: "",
    is_active: true,
});

const submit = () => {
    showSuccessMessage.value = false;

    form.post(route("partners.store"), {
        preserveScroll: true,

        onSuccess: () => {
            showSuccessMessage.value = true;

            form.reset();

            form.is_active = true;
        },
    });
};
</script>


<template>
    <AuthenticatedLayout>
        <Head title="Add Partner" />

        <div class="p-6">

            <h1 class="text-2xl font-bold mb-6">
                Create Partner
            </h1>

            <Transition
    enter-active-class="transition-all duration-300 ease-out"
    enter-from-class="opacity-0 -translate-y-2"
    enter-to-class="opacity-100 translate-y-0"
    leave-active-class="transition-all duration-200 ease-in"
    leave-from-class="opacity-100 translate-y-0"
    leave-to-class="opacity-0 -translate-y-2"
>
    <div
        v-if="showSuccessMessage"
        class="mb-6 flex items-center gap-4 rounded-xl border border-green-200 bg-green-50 px-5 py-4 shadow-sm"
    >
        <div
            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-green-100 text-green-600"
        >
            <svg
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M5 13l4 4L19 7"
                />
            </svg>
        </div>

        <div class="flex-1">
            <p class="font-semibold text-green-800">
                Success
            </p>

            <p class="text-sm text-green-700">
                Partner created successfully.
            </p>
        </div>

        <button
            type="button"
            @click="showSuccessMessage = false"
            class="text-green-600 hover:text-green-800"
        >
            ×
        </button>
    </div>
</Transition>

            <div class="bg-white rounded-xl shadow p-6">

                <form @submit.prevent="submit">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Partner Name -->
                        <div>
                            <label class="block mb-2 font-medium">
                                Partner Name
                            </label>

                            <input
                                v-model="form.name"
                                type="text"
                                class="w-full border rounded-lg px-4 py-2"
                                placeholder="Enter Partner Name"
                            />

                            <p
                                v-if="form.errors.name"
                                class="text-red-500 text-sm mt-1"
                            >
                                {{ form.errors.name }}
                            </p>
                        </div>

                        <!-- Contact Person -->
                        <div>
                            <label class="block mb-2 font-medium">
                                Contact Person
                            </label>

                            <input
                                v-model="form.contact_person"
                                type="text"
                                class="w-full border rounded-lg px-4 py-2"
                                placeholder="Enter Contact Person"
                            />

                            <p
                                v-if="form.errors.contact_person"
                                class="text-red-500 text-sm mt-1"
                            >
                                {{ form.errors.contact_person }}
                            </p>
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="block mb-2 font-medium">
                                Email Address
                            </label>

                            <input
                                v-model="form.email"
                                type="email"
                                class="w-full border rounded-lg px-4 py-2"
                                placeholder="Enter Email Address"
                            />

                            <p
                                v-if="form.errors.email"
                                class="text-red-500 text-sm mt-1"
                            >
                                {{ form.errors.email }}
                            </p>
                        </div>

                        <!-- Phone -->
                        <div>
                            <label class="block mb-2 font-medium">
                                Phone Number
                            </label>

                            <input
                                v-model="form.phone"
                                type="text"
                                class="w-full border rounded-lg px-4 py-2"
                                placeholder="Enter Phone Number"
                            />

                            <p
                                v-if="form.errors.phone"
                                class="text-red-500 text-sm mt-1"
                            >
                                {{ form.errors.phone }}
                            </p>
                        </div>

                        <!-- Address -->
                        <div class="md:col-span-2">
                            <label class="block mb-2 font-medium">
                                Address
                            </label>

                            <textarea
                                v-model="form.address"
                                rows="4"
                                class="w-full border rounded-lg px-4 py-2"
                                placeholder="Enter Partner Address"
                            ></textarea>

                            <p
                                v-if="form.errors.address"
                                class="text-red-500 text-sm mt-1"
                            >
                                {{ form.errors.address }}
                            </p>
                        </div>

                        <!-- Status -->
                        <div>
                            <label class="block mb-2 font-medium">
                                Status
                            </label>

                            <select
                                v-model="form.is_active"
                                class="w-full border rounded-lg px-4 py-2"
                            >
                                <option :value="true">Active</option>
                                <option :value="false">Inactive</option>
                            </select>

                            <p
                                v-if="form.errors.is_active"
                                class="text-red-500 text-sm mt-1"
                            >
                                {{ form.errors.is_active }}
                            </p>
                        </div>

                    </div>

                   <!-- Action Buttons -->
                    <div class="mt-8 flex items-center justify-end gap-3">

                        <!-- Cancel -->
                        <button
                            type="button"
                            @click="router.visit(route('admin.partners.index'))"
                            class="px-5 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 transition"
                        >
                            Cancel
                        </button>

                        <!-- Save Partner -->
                        <button
                            type="submit"
                            :disabled="form.processing"
                            class="px-6 py-2 rounded-lg bg-blue-600 text-white font-medium hover:bg-blue-700 transition disabled:opacity-50 disabled:cursor-not-allowed"
                        >
                            {{ form.processing ? "Saving Partner..." : "Save Partner" }}
                        </button>

                    </div>
                </form>

            </div>

        </div>

    </AuthenticatedLayout>
</template>