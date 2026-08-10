<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, router, useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    contact_person: "",
    email: "",
    phone: "",
    address: "",
    is_active: true,
});

const submit = () => {
    form.post(route("admin.partners.store"));
};
</script>


<template>
    <AuthenticatedLayout>
        <Head title="Add Partner" />

        <div class="p-6">

            <h1 class="text-2xl font-bold mb-6">
                Create Partner
            </h1>

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