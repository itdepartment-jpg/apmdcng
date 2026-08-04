<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";

const props = defineProps({
    carrier: Object,
});

const form = useForm({
    name: props.carrier.name ?? "",
    code: props.carrier.code ?? "",
    website: props.carrier.website ?? "",
    contact_person: props.carrier.contact_person ?? "",
    email: props.carrier.email ?? "",
    phone: props.carrier.phone ?? "",
    is_active: props.carrier.is_active,
});

const submit = () => {
    form.put(route("carriers.update", props.carrier.id));
};
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Edit Carrier" />

        <div class="p-6">

            <h1 class="text-2xl font-bold mb-6">
                Edit Carrier
            </h1>

            <div class="bg-white rounded-xl shadow p-6">

                <form @submit.prevent="submit">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Carrier Name -->
                        <div>
                            <label class="block mb-2 font-medium">Carrier Name</label>
                            <input v-model="form.name" type="text" class="w-full border rounded-lg px-4 py-2" />
                            <p v-if="form.errors.name" class="text-red-500 text-sm mt-1">{{ form.errors.name }}</p>
                        </div>

                        <!-- Carrier Code -->
                        <div>
                            <label class="block mb-2 font-medium">Carrier Code</label>
                            <input v-model="form.code" type="text" class="w-full border rounded-lg px-4 py-2" />
                            <p v-if="form.errors.code" class="text-red-500 text-sm mt-1">{{ form.errors.code }}</p>
                        </div>

                        <!-- Website -->
                        <div>
                            <label class="block mb-2 font-medium">Website</label>
                            <input v-model="form.website" type="url" class="w-full border rounded-lg px-4 py-2" />
                            <p v-if="form.errors.website" class="text-red-500 text-sm mt-1">{{ form.errors.website }}</p>
                        </div>

                        <!-- Contact Person -->
                        <div>
                            <label class="block mb-2 font-medium">Contact Person</label>
                            <input v-model="form.contact_person" type="text" class="w-full border rounded-lg px-4 py-2" />
                            <p v-if="form.errors.contact_person" class="text-red-500 text-sm mt-1">{{ form.errors.contact_person }}</p>
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="block mb-2 font-medium">Email Address</label>
                            <input v-model="form.email" type="email" class="w-full border rounded-lg px-4 py-2" />
                            <p v-if="form.errors.email" class="text-red-500 text-sm mt-1">{{ form.errors.email }}</p>
                        </div>

                        <!-- Phone -->
                        <div>
                            <label class="block mb-2 font-medium">Phone Number</label>
                            <input v-model="form.phone" type="text" class="w-full border rounded-lg px-4 py-2" />
                            <p v-if="form.errors.phone" class="text-red-500 text-sm mt-1">{{ form.errors.phone }}</p>
                        </div>

                        <!-- Status -->
                        <div>
                            <label class="block mb-2 font-medium">Status</label>

                            <select
                                v-model="form.is_active"
                                class="w-full border rounded-lg px-4 py-2"
                            >
                                <option :value="true">Active</option>
                                <option :value="false">Inactive</option>
                            </select>

                            <p v-if="form.errors.is_active" class="text-red-500 text-sm mt-1">
                                {{ form.errors.is_active }}
                            </p>
                        </div>

                    </div>

                    <div class="mt-8 flex justify-end gap-3">

                        <button
                            type="button"
                            class="px-5 py-2 border border-gray-300 rounded-lg hover:bg-gray-100"
                            @click="$inertia.visit('/admin/carriers')"
                        >
                            Cancel
                        </button>

                        <button
                            type="submit"
                            :disabled="form.processing"
                            class="px-6 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 disabled:opacity-50"
                        >
                            {{ form.processing ? 'Updating...' : 'Update Carrier' }}
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </AuthenticatedLayout>
</template>