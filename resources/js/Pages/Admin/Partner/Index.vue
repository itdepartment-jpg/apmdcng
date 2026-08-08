<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, router } from "@inertiajs/vue3";

defineProps({
    partners: Object,
});

const deletePartner = (id) => {
    if (confirm("Are you sure you want to delete this partner?")) {
        router.delete(route("partners.destroy", id));
    }
};
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Partner Management" />

        <div class="p-6">

            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-2xl font-bold">
                        Partner Management
                    </h1>

                    <p class="text-gray-500 mt-1">
                        Manage logistics partners and organizations responsible for handling shipments.
                    </p>
                </div>

                <Link
                    :href="route('admin.partners.create')"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg inline-block"
                >
                    + New Partner
                </Link>
            </div>

            <!-- Table -->
            <div class="bg-white rounded-xl shadow overflow-hidden">

                <table class="min-w-full">

                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-3 text-left">Partner</th>
                            <th class="px-4 py-3 text-left">Contact Person</th>
                            <th class="px-4 py-3 text-left">Email Address</th>
                            <th class="px-4 py-3 text-left">Phone Number</th>
                            <th class="px-4 py-3 text-left">Status</th>
                            <th class="px-4 py-3 text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr
                            v-for="partner in partners.data"
                            :key="partner.id"
                            class="border-t hover:bg-gray-50"
                        >

                            <td class="px-4 py-3 font-medium">
                                {{ partner.name }}
                            </td>

                            <td class="px-4 py-3">
                                {{ partner.contact_person ?? "-" }}
                            </td>

                            <td class="px-4 py-3">
                                {{ partner.email ?? "-" }}
                            </td>

                            <td class="px-4 py-3">
                                {{ partner.phone ?? "-" }}
                            </td>

                            <td class="px-4 py-3">
                                <span
                                    :class="partner.is_active
                                        ? 'bg-green-100 text-green-700'
                                        : 'bg-red-100 text-red-700'"
                                    class="px-3 py-1 rounded-full text-xs font-semibold"
                                >
                                    {{ partner.is_active ? "Active" : "Inactive" }}
                                </span>
                            </td>

                            <td class="px-4 py-3">
                                <div class="flex justify-center gap-2">

                                    <Link
                                        :href="route('partners.edit', partner.id)"
                                        class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded"
                                    >
                                        Edit
                                    </Link>

                                    <button
                                        @click="deletePartner(partner.id)"
                                        class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded"
                                    >
                                        Delete
                                    </button>

                                </div>
                            </td>

                        </tr>

                        <tr v-if="partners.data.length === 0">
                            <td
                                colspan="6"
                                class="text-center py-8 text-gray-500"
                            >
                                No partners have been added yet.
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>
    </AuthenticatedLayout>
</template>