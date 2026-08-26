see what i have there before 

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, router } from "@inertiajs/vue3";

defineProps({
    shipments: {
        type: Object,
        required: true,
    },
});

const deleteShipment = (shipment) => {
    if (
        !confirm(
            `Are you sure you want to delete shipment ${shipment.tracking_number}?`
        )
    ) {
        return;
    }

    router.delete(
        route("admin.shipments.destroy", shipment.id),
        {
            preserveScroll: true,

            onSuccess: () => {
                console.log("Shipment deleted successfully.");
            },

            onError: (errors) => {
                console.error("Failed to delete shipment:", errors);
            },
        }
    );
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
                    :href="route('admin.shipments.create')"
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
                                        :href="route('admin.shipments.edit', shipment.id)"
                                        class="inline-flex items-center justify-center w-9 h-9 rounded-lg text-blue-600 hover:bg-blue-50 hover:text-blue-800 transition"
                                        title="Edit Shipment"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5
                                                M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"
                                            />
                                        </svg>
                                    </Link>

                                    <button
                                        type="button"
                                        @click="deleteShipment(shipment)"
                                        class="inline-flex items-center gap-2 px-3 py-1.5 text-sm text-red-600 hover:text-red-800 hover:bg-red-50 rounded-lg transition"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                            />
                                        </svg>

                            
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