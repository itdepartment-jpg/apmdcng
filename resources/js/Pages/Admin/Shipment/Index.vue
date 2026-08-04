<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, router } from "@inertiajs/vue3";

defineProps({
    shipments: Object,
});

const deleteShipment = (id) => {
    if (confirm("Are you sure you want to delete this shipment?")) {
        router.delete(route("shipments.destroy", id));
    }
};
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Shipment Management" />

        <div class="p-6">

            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-2xl font-bold">
                        Shipment Management
                    </h1>

                    <p class="text-gray-500 mt-1">
                        Manage all shipment records and track cargo movements.
                    </p>
                </div>

                <Link
                    :href="route('shipments.create')"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg inline-block"
                >
                    + New Shipment
                </Link>
            </div>

            <!-- Table -->
            <div class="bg-white rounded-xl shadow overflow-hidden">

                <table class="min-w-full">

                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-3 text-left">Reference</th>
                            <th class="px-4 py-3 text-left">Container</th>
                            <th class="px-4 py-3 text-left">Vessel</th>
                            <th class="px-4 py-3 text-left">Partner</th>
                            <th class="px-4 py-3 text-left">Carrier</th>
                            <th class="px-4 py-3 text-left">Status</th>
                            <th class="px-4 py-3 text-left">ETA</th>
                            <th class="px-4 py-3 text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr
                            v-for="shipment in shipments.data"
                            :key="shipment.id"
                            class="border-t hover:bg-gray-50"
                        >

                            <td class="px-4 py-3 font-medium">
                                {{ shipment.shipment_reference }}
                            </td>

                            <td class="px-4 py-3">
                                {{ shipment.container_number }}
                            </td>

                            <td class="px-4 py-3">
                                {{ shipment.vessel_name }}
                            </td>

                            <td class="px-4 py-3">
                                {{ shipment.partner?.name ?? "-" }}
                            </td>

                            <td class="px-4 py-3">
                                {{ shipment.carrier?.name ?? "-" }}
                            </td>

                            <td class="px-4 py-3">
                                <span
                                    class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-700"
                                >
                                    {{ shipment.status }}
                                </span>
                            </td>

                            <td class="px-4 py-3">
                                {{ shipment.eta ? new Date(shipment.eta).toLocaleDateString() : "-" }}
                            </td>

                            <td class="px-4 py-3">
                                <div class="flex justify-center gap-2">

                                    <Link
                                        :href="route('shipments.edit', shipment.id)"
                                        class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded"
                                    >
                                        Edit
                                    </Link>

                                    <button
                                        @click="deleteShipment(shipment.id)"
                                        class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded"
                                    >
                                        Delete
                                    </button>

                                </div>
                            </td>

                        </tr>

                        <tr v-if="shipments.data.length === 0">
                            <td
                                colspan="8"
                                class="text-center py-8 text-gray-500"
                            >
                                No shipments found.
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>
    </AuthenticatedLayout>
</template>