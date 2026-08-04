<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, router } from "@inertiajs/vue3";

defineProps({
    carriers: Object,
});

const deleteCarrier = (id) => {
    if (confirm("Are you sure you want to delete this carrier?")) {
        router.delete(route("carriers.destroy", id));
    }
};
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Carrier Management" />

        <div class="p-6">

            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-2xl font-bold">
                        Carrier Management
                    </h1>

                    <p class="text-gray-500 mt-1">
                        Manage shipping carriers used for transporting cargo and containers.
                    </p>
                </div>

                <Link
                    :href="route('carriers.create')"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg inline-block"
                >
                    + New Carrier
                </Link>
            </div>

            <!-- Table -->
            <div class="bg-white rounded-xl shadow overflow-hidden">

                <table class="min-w-full">

                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-3 text-left">Carrier</th>
                            <th class="px-4 py-3 text-left">Code</th>
                            <th class="px-4 py-3 text-left">Website</th>
                            <th class="px-4 py-3 text-left">Contact Person</th>
                            <th class="px-4 py-3 text-left">Phone</th>
                            <th class="px-4 py-3 text-left">Status</th>
                            <th class="px-4 py-3 text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr
                            v-for="carrier in carriers.data"
                            :key="carrier.id"
                            class="border-t hover:bg-gray-50"
                        >

                            <td class="px-4 py-3 font-medium">
                                {{ carrier.name }}
                            </td>

                            <td class="px-4 py-3">
                                {{ carrier.code ?? "-" }}
                            </td>

                            <td class="px-4 py-3">
                                <a
                                    v-if="carrier.website"
                                    :href="carrier.website"
                                    target="_blank"
                                    class="text-blue-600 hover:underline"
                                >
                                    Visit Website
                                </a>

                                <span v-else>-</span>
                            </td>

                            <td class="px-4 py-3">
                                {{ carrier.contact_person ?? "-" }}
                            </td>

                            <td class="px-4 py-3">
                                {{ carrier.phone ?? "-" }}
                            </td>

                            <td class="px-4 py-3">
                                <span
                                    :class="carrier.is_active
                                        ? 'bg-green-100 text-green-700'
                                        : 'bg-red-100 text-red-700'"
                                    class="px-3 py-1 rounded-full text-xs font-semibold"
                                >
                                    {{ carrier.is_active ? "Active" : "Inactive" }}
                                </span>
                            </td>

                            <td class="px-4 py-3">
                                <div class="flex justify-center gap-2">

                                    <Link
                                        :href="route('carriers.edit', carrier.id)"
                                        class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded"
                                    >
                                        Edit
                                    </Link>

                                    <button
                                        @click="deleteCarrier(carrier.id)"
                                        class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded"
                                    >
                                        Delete
                                    </button>

                                </div>
                            </td>

                        </tr>

                        <tr v-if="carriers.data.length === 0">
                            <td
                                colspan="7"
                                class="text-center py-8 text-gray-500"
                            >
                                No carriers have been added yet.
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>
    </AuthenticatedLayout>
</template>