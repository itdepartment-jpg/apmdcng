```vue
<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";
import { ref } from "vue";

const props = defineProps({
    partner: Object,
});

const showSuccessMessage = ref(false);

const form = useForm({
    name: props.partner.name ?? "",
    contact_person: props.partner.contact_person ?? "",
    email: props.partner.email ?? "",
    phone: props.partner.phone ?? "",
    address: props.partner.address ?? "",
    is_active: props.partner.is_active,
});

const submit = () => {
    showSuccessMessage.value = false;

    form.put(route("admin.partners.update", props.partner.id), {
        preserveScroll: true,

        onSuccess: () => {
            showSuccessMessage.value = true;
        },
    });
};
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Edit Partner" />

        <div class="p-6">
            <!-- Page Header -->
            <h1 class="mb-6 text-2xl font-bold">
                Edit Partner
            </h1>

            <!-- Success Message -->
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
                            Partner updated successfully.
                        </p>
                    </div>

                    <button
                        type="button"
                        @click="showSuccessMessage = false"
                        class="text-green-600 transition hover:text-green-800"
                        aria-label="Close notification"
                    >
                        ×
                    </button>
                </div>
            </Transition>

            <!-- Form -->
            <div class="rounded-xl bg-white p-6 shadow">
                <form @submit.prevent="submit">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <!-- Partner Name -->
                        <div>
                            <label class="mb-2 block font-medium">
                                Partner Name
                            </label>

                            <input
                                v-model="form.name"
                                type="text"
                                class="w-full rounded-lg border px-4 py-2"
                                placeholder="Enter Partner Name"
                            />

                            <p
                                v-if="form.errors.name"
                                class="mt-1 text-sm text-red-500"
                            >
                                {{ form.errors.name }}
                            </p>
                        </div>

                        <!-- Contact Person -->
                        <div>
                            <label class="mb-2 block font-medium">
                                Contact Person
                            </label>

                            <input
                                v-model="form.contact_person"
                                type="text"
                                class="w-full rounded-lg border px-4 py-2"
                                placeholder="Enter Contact Person"
                            />

                            <p
                                v-if="form.errors.contact_person"
                                class="mt-1 text-sm text-red-500"
                            >
                                {{ form.errors.contact_person }}
                            </p>
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="mb-2 block font-medium">
                                Email Address
                            </label>

                            <input
                                v-model="form.email"
                                type="email"
                                class="w-full rounded-lg border px-4 py-2"
                                placeholder="Enter Email Address"
                            />

                            <p
                                v-if="form.errors.email"
                                class="mt-1 text-sm text-red-500"
                            >
                                {{ form.errors.email }}
                            </p>
                        </div>

                        <!-- Phone -->
                        <div>
                            <label class="mb-2 block font-medium">
                                Phone Number
                            </label>

                            <input
                                v-model="form.phone"
                                type="text"
                                class="w-full rounded-lg border px-4 py-2"
                                placeholder="Enter Phone Number"
                            />

                            <p
                                v-if="form.errors.phone"
                                class="mt-1 text-sm text-red-500"
                            >
                                {{ form.errors.phone }}
                            </p>
                        </div>

                        <!-- Address -->
                        <div class="md:col-span-2">
                            <label class="mb-2 block font-medium">
                                Address
                            </label>

                            <textarea
                                v-model="form.address"
                                rows="4"
                                class="w-full rounded-lg border px-4 py-2"
                                placeholder="Enter Partner Address"
                            ></textarea>

                            <p
                                v-if="form.errors.address"
                                class="mt-1 text-sm text-red-500"
                            >
                                {{ form.errors.address }}
                            </p>
                        </div>

                        <!-- Status -->
                        <div>
                            <label class="mb-2 block font-medium">
                                Status
                            </label>

                            <select
                                v-model="form.is_active"
                                class="w-full rounded-lg border px-4 py-2"
                            >
                                <option :value="true">
                                    Active
                                </option>

                                <option :value="false">
                                    Inactive
                                </option>
                            </select>

                            <p
                                v-if="form.errors.is_active"
                                class="mt-1 text-sm text-red-500"
                            >
                                {{ form.errors.is_active }}
                            </p>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="mt-8 flex justify-end gap-3">
                        <button
                            type="button"
                            class="rounded-lg border border-gray-300 px-5 py-2 hover:bg-gray-100"
                            @click="$inertia.visit('/admin/partners')"
                        >
                            Cancel
                        </button>

                        <button
                            type="submit"
                            :disabled="form.processing"
                            class="rounded-lg bg-yellow-500 px-6 py-2 text-white hover:bg-yellow-600 disabled:cursor-not-allowed disabled:opacity-50"
                        >
                            {{
                                form.processing
                                    ? "Updating Partner..."
                                    : "Update Partner"
                            }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
```
