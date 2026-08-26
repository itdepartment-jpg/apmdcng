<script setup>
import { computed, reactive, watch } from "vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, router } from "@inertiajs/vue3";

import {
    ArrowPathIcon,
    CheckCircleIcon,
    ClockIcon,
    FunnelIcon,
    MagnifyingGlassIcon,
    PencilIcon,
    PlusIcon,
    TrashIcon,
    TruckIcon,
    XMarkIcon,
} from "@heroicons/vue/24/outline";

/*
|--------------------------------------------------------------------------
| Props
|--------------------------------------------------------------------------
*/

const props = defineProps({
    shipments: {
        type: Object,
        required: true,
    },

    filters: {
        type: Object,
        default: () => ({}),
    },

    statuses: {
        type: Array,
        default: () => [],
    },

    partners: {
        type: Array,
        default: () => [],
    },

    carriers: {
        type: Array,
        default: () => [],
    },

    stats: {
        type: Object,
        default: () => ({
            total: 0,
            on_transit: 0,
            awaiting_loading: 0,
            delivered: 0,
        }),
    },
});


/*
|--------------------------------------------------------------------------
| Filters
|--------------------------------------------------------------------------
*/

const filters = reactive({
    search: props.filters?.search ?? "",
    status: props.filters?.status ?? "",
    partner_id: props.filters?.partner_id
        ? String(props.filters.partner_id)
        : "",
    carrier_id: props.filters?.carrier_id
        ? String(props.filters.carrier_id)
        : "",
    eta_from: props.filters?.eta_from ?? "",
    eta_to: props.filters?.eta_to ?? "",
});


/*
|--------------------------------------------------------------------------
| Active Filter Count
|--------------------------------------------------------------------------
*/

const activeFilterCount = computed(() => {
    return Object.values(filters).filter(
        (value) => value !== "" && value !== null && value !== undefined
    ).length;
});


/*
|--------------------------------------------------------------------------
| Apply Filters
|--------------------------------------------------------------------------
*/

const applyFilters = () => {
    router.get(
        route("admin.shipments.index"),
        {
            search: filters.search || undefined,
            status: filters.status || undefined,
            partner_id: filters.partner_id || undefined,
            carrier_id: filters.carrier_id || undefined,
            eta_from: filters.eta_from || undefined,
            eta_to: filters.eta_to || undefined,
        },
        {
            preserveState: true,
            preserveScroll: true,
            replace: true,
        }
    );
};


/*
|--------------------------------------------------------------------------
| Search
|--------------------------------------------------------------------------
*/

let searchTimeout = null;

watch(
    () => filters.search,
    () => {
        if (searchTimeout) {
            clearTimeout(searchTimeout);
        }

        searchTimeout = setTimeout(() => {
            applyFilters();
        }, 400);
    }
);


/*
|--------------------------------------------------------------------------
| Filter Change
|--------------------------------------------------------------------------
*/

const filterChanged = () => {
    applyFilters();
};


/*
|--------------------------------------------------------------------------
| Clear Filters
|--------------------------------------------------------------------------
*/

const clearFilters = () => {
    filters.search = "";
    filters.status = "";
    filters.partner_id = "";
    filters.carrier_id = "";
    filters.eta_from = "";
    filters.eta_to = "";

    router.get(
        route("admin.shipments.index"),
        {},
        {
            preserveState: true,
            preserveScroll: true,
            replace: true,
        }
    );
};


/*
|--------------------------------------------------------------------------
| Delete Shipment
|--------------------------------------------------------------------------
*/

const deleteShipment = (shipment) => {
    if (
        !confirm(
            `Are you sure you want to delete shipment ${shipment.shipment_reference}?`
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
                console.error(
                    "Failed to delete shipment:",
                    errors
                );
            },
        }
    );
};


/*
|--------------------------------------------------------------------------
| Format Date
|--------------------------------------------------------------------------
*/

const formatDate = (date) => {
    if (!date) {
        return "-";
    }

    return new Date(date).toLocaleDateString("en-GB", {
        day: "2-digit",
        month: "short",
        year: "numeric",
    });
};


/*
|--------------------------------------------------------------------------
| Status Styling
|--------------------------------------------------------------------------
*/

const statusClass = (status) => {
    const value = String(status || "").toUpperCase();

    if (
        value.includes("DELIVERED") ||
        value.includes("COMPLETED")
    ) {
        return "bg-green-100 text-green-700";
    }

    if (
        value.includes("TRANSIT") ||
        value.includes("LOADING")
    ) {
        return "bg-blue-100 text-blue-700";
    }

    if (value.includes("AWAITING")) {
        return "bg-yellow-100 text-yellow-700";
    }

    if (
        value.includes("DELAY") ||
        value.includes("DETENTION") ||
        value.includes("CANCEL")
    ) {
        return "bg-red-100 text-red-700";
    }

    return "bg-gray-100 text-gray-700";
};


/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/

const goToPage = (url) => {
    if (!url) {
        return;
    }

    router.visit(url, {
        preserveState: true,
        preserveScroll: true,
    });
};
</script>


<template>

    <Head title="Shipment Management" />

    <AuthenticatedLayout>

        <div class="p-6">

            <!-- ====================================================== -->
            <!-- Header -->
            <!-- ====================================================== -->

            <div
                class="flex flex-col gap-4 mb-6 sm:flex-row sm:items-center sm:justify-between"
            >

                <div>

                    <h1 class="text-2xl font-bold text-gray-900">
                        Shipment Management
                    </h1>

                    <p class="mt-1 text-gray-500">
                        Manage shipment records and track cargo movements.
                    </p>

                </div>


                <Link
                    :href="route('admin.shipments.create')"
                    class="inline-flex items-center justify-center gap-2 px-4 py-2.5 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition"
                >
                    <PlusIcon class="w-5 h-5" />
                    New Shipment
                </Link>

            </div>


            <!-- ====================================================== -->
            <!-- Summary Cards -->
            <!-- ====================================================== -->

            <div
                class="grid grid-cols-1 gap-4 mb-6 sm:grid-cols-2 xl:grid-cols-4"
            >

                <!-- Total -->
                <div
                    class="p-5 bg-white border border-gray-100 rounded-xl shadow-sm"
                >

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm font-medium text-gray-500">
                                Total Shipments
                            </p>

                            <p class="mt-2 text-2xl font-bold text-gray-900">
                                {{ props.stats.total }}
                            </p>

                        </div>

                        <div
                            class="flex items-center justify-center w-11 h-11 rounded-lg bg-blue-50"
                        >
                            <TruckIcon class="w-6 h-6 text-blue-600" />
                        </div>

                    </div>

                </div>


                <!-- On Transit -->
                <div
                    class="p-5 bg-white border border-gray-100 rounded-xl shadow-sm"
                >

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm font-medium text-gray-500">
                                On Transit
                            </p>

                            <p class="mt-2 text-2xl font-bold text-gray-900">
                                {{ props.stats.on_transit }}
                            </p>

                        </div>

                        <div
                            class="flex items-center justify-center w-11 h-11 rounded-lg bg-indigo-50"
                        >
                            <ArrowPathIcon class="w-6 h-6 text-indigo-600" />
                        </div>

                    </div>

                </div>


                <!-- Awaiting Loading -->
                <div
                    class="p-5 bg-white border border-gray-100 rounded-xl shadow-sm"
                >

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm font-medium text-gray-500">
                                Awaiting Loading
                            </p>

                            <p class="mt-2 text-2xl font-bold text-gray-900">
                                {{ props.stats.awaiting_loading }}
                            </p>

                        </div>

                        <div
                            class="flex items-center justify-center w-11 h-11 rounded-lg bg-yellow-50"
                        >
                            <ClockIcon class="w-6 h-6 text-yellow-600" />
                        </div>

                    </div>

                </div>


                <!-- Delivered -->
                <div
                    class="p-5 bg-white border border-gray-100 rounded-xl shadow-sm"
                >

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm font-medium text-gray-500">
                                Delivered
                            </p>

                            <p class="mt-2 text-2xl font-bold text-gray-900">
                                {{ props.stats.delivered }}
                            </p>

                        </div>

                        <div
                            class="flex items-center justify-center w-11 h-11 rounded-lg bg-green-50"
                        >
                            <CheckCircleIcon class="w-6 h-6 text-green-600" />
                        </div>

                    </div>

                </div>

            </div>


            <!-- ====================================================== -->
            <!-- Filters -->
            <!-- ====================================================== -->

            <div
                class="p-5 mb-6 bg-white border border-gray-100 rounded-xl shadow-sm"
            >

                <div
                    class="flex flex-col gap-4 lg:flex-row lg:items-end"
                >

                    <!-- Search -->
                    <div class="flex-1">

                        <label
                            class="block mb-1.5 text-sm font-medium text-gray-700"
                        >
                            Search
                        </label>

                        <div class="relative">

                            <MagnifyingGlassIcon
                                class="absolute w-5 h-5 text-gray-400 left-3 top-1/2 -translate-y-1/2"
                            />

                            <input
                                v-model="filters.search"
                                type="text"
                                placeholder="Reference, container or vessel..."
                                class="w-full py-2.5 pl-10 pr-4 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-blue-500"
                            />

                        </div>

                    </div>


                    <!-- Status -->
                    <div class="w-full lg:w-48">

                        <label
                            class="block mb-1.5 text-sm font-medium text-gray-700"
                        >
                            Status
                        </label>

                        <select
                            v-model="filters.status"
                            @change="filterChanged"
                            class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-blue-500"
                        >

                            <option value="">
                                All Statuses
                            </option>

                            <option
                                v-for="status in props.statuses"
                                :key="status"
                                :value="status"
                            >
                                {{ status }}
                            </option>

                        </select>

                    </div>


                    <!-- Partner -->
                    <div class="w-full lg:w-48">

                        <label
                            class="block mb-1.5 text-sm font-medium text-gray-700"
                        >
                            Partner
                        </label>

                        <select
                            v-model="filters.partner_id"
                            @change="filterChanged"
                            class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-blue-500"
                        >

                            <option value="">
                                All Partners
                            </option>

                            <option
                                v-for="partner in props.partners"
                                :key="partner.id"
                                :value="partner.id"
                            >
                                {{ partner.name }}
                            </option>

                        </select>

                    </div>


                    <!-- Carrier -->
                    <div class="w-full lg:w-48">

                        <label
                            class="block mb-1.5 text-sm font-medium text-gray-700"
                        >
                            Carrier
                        </label>

                        <select
                            v-model="filters.carrier_id"
                            @change="filterChanged"
                            class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-blue-500"
                        >

                            <option value="">
                                All Carriers
                            </option>

                            <option
                                v-for="carrier in props.carriers"
                                :key="carrier.id"
                                :value="carrier.id"
                            >
                                {{ carrier.name }}
                            </option>

                        </select>

                    </div>


                    <!-- Clear -->
                    <button
                        v-if="activeFilterCount"
                        type="button"
                        @click="clearFilters"
                        class="inline-flex items-center justify-center gap-2 px-4 py-2.5 text-sm font-medium text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-50 transition"
                    >
                        <XMarkIcon class="w-4 h-4" />
                        Clear
                    </button>

                </div>


                <!-- ETA -->
                <div
                    class="grid grid-cols-1 gap-4 pt-4 mt-4 border-t border-gray-100 sm:grid-cols-2 lg:max-w-xl"
                >

                    <div>

                        <label
                            class="block mb-1.5 text-sm font-medium text-gray-700"
                        >
                            ETA From
                        </label>

                        <input
                            v-model="filters.eta_from"
                            @change="filterChanged"
                            type="date"
                            class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-blue-500"
                        />

                    </div>


                    <div>

                        <label
                            class="block mb-1.5 text-sm font-medium text-gray-700"
                        >
                            ETA To
                        </label>

                        <input
                            v-model="filters.eta_to"
                            @change="filterChanged"
                            type="date"
                            class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-blue-500"
                        />

                    </div>

                </div>


                <!-- Active Filters -->
                <div
                    v-if="activeFilterCount"
                    class="flex items-center gap-2 mt-4 text-sm text-gray-500"
                >
                    <FunnelIcon class="w-4 h-4" />

                    {{ activeFilterCount }}
                    active filter{{ activeFilterCount > 1 ? "s" : "" }}
                </div>

            </div>


            <!-- ====================================================== -->
            <!-- Shipment Table -->
            <!-- ====================================================== -->

            <div
                class="overflow-hidden bg-white border border-gray-100 rounded-xl shadow-sm"
            >

                <!-- Table Header -->
                <div
                    class="flex flex-col gap-3 px-5 py-4 border-b border-gray-100 sm:flex-row sm:items-center sm:justify-between"
                >

                    <div>

                        <h2 class="font-semibold text-gray-900">
                            Shipments
                        </h2>

                        <p class="mt-0.5 text-sm text-gray-500">
                            Showing
                            {{ props.shipments.from ?? 0 }}
                            -
                            {{ props.shipments.to ?? 0 }}
                            of
                            {{ props.shipments.total }}
                            shipments
                        </p>

                    </div>

                </div>


                <!-- Table -->
                <div class="overflow-x-auto">

                    <table class="min-w-full">

                        <thead class="bg-gray-50">

                            <tr>

                                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">
                                    Reference
                                </th>

                                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">
                                    Container
                                </th>

                                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">
                                    Vessel
                                </th>

                                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">
                                    Partner
                                </th>

                                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">
                                    Carrier
                                </th>

                                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">
                                    Status
                                </th>

                                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">
                                    ETA
                                </th>

                                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-center text-gray-500 uppercase">
                                    Actions
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            <tr
                                v-for="shipment in props.shipments.data"
                                :key="shipment.id"
                                class="border-t border-gray-100 hover:bg-gray-50 transition"
                            >

                                <td class="px-5 py-4 font-medium text-gray-900">
                                    {{ shipment.shipment_reference }}
                                </td>

                                <td class="px-5 py-4 text-gray-600">
                                    {{ shipment.container_number }}
                                </td>

                                <td class="px-5 py-4 text-gray-600">
                                    {{ shipment.vessel_name }}
                                </td>

                                <td class="px-5 py-4 text-gray-600">
                                    {{ shipment.partner?.name ?? "-" }}
                                </td>

                                <td class="px-5 py-4 text-gray-600">
                                    {{ shipment.carrier?.name ?? "-" }}
                                </td>

                                <td class="px-5 py-4">

                                    <span
                                        class="inline-flex px-2.5 py-1 rounded-full text-xs font-semibold"
                                        :class="statusClass(shipment.status)"
                                    >
                                        {{ shipment.status }}
                                    </span>

                                </td>

                                <td class="px-5 py-4 text-gray-600 whitespace-nowrap">
                                    {{ formatDate(shipment.eta) }}
                                </td>

                                <td class="px-5 py-4">

                                    <div class="flex justify-center gap-2">

                                        <!-- Edit -->
                                        <Link
                                            :href="route('admin.shipments.edit', shipment.id)"
                                            class="inline-flex items-center justify-center w-9 h-9 rounded-lg text-blue-600 hover:bg-blue-50 hover:text-blue-800 transition"
                                            title="Edit Shipment"
                                        >
                                            <PencilIcon class="w-5 h-5" />
                                        </Link>


                                        <!-- Delete -->
                                        <button
                                            type="button"
                                            @click="deleteShipment(shipment)"
                                            class="inline-flex items-center justify-center w-9 h-9 rounded-lg text-red-600 hover:bg-red-50 hover:text-red-800 transition"
                                            title="Delete Shipment"
                                        >
                                            <TrashIcon class="w-5 h-5" />
                                        </button>

                                    </div>

                                </td>

                            </tr>


                            <!-- Empty State -->
                            <tr
                                v-if="props.shipments.data.length === 0"
                            >

                                <td
                                    colspan="8"
                                    class="px-5 py-12 text-center"
                                >

                                    <TruckIcon
                                        class="w-10 h-10 mx-auto text-gray-300"
                                    />

                                    <p class="mt-3 font-medium text-gray-600">
                                        No shipments found.
                                    </p>

                                    <p class="mt-1 text-sm text-gray-400">
                                        Try changing your search or filters.
                                    </p>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                <!-- ================================================== -->
                <!-- Pagination -->
                <!-- ================================================== -->

                <div
                    v-if="props.shipments.last_page > 1"
                    class="flex flex-col gap-4 px-5 py-4 border-t border-gray-100 sm:flex-row sm:items-center sm:justify-between"
                >

                    <p class="text-sm text-gray-500">
                        Page
                        <span class="font-medium text-gray-700">
                            {{ props.shipments.current_page }}
                        </span>
                        of
                        <span class="font-medium text-gray-700">
                            {{ props.shipments.last_page }}
                        </span>
                    </p>


                    <div class="flex items-center gap-1 overflow-x-auto">

                        <template
                            v-for="(link, index) in props.shipments.links"
                            :key="index"
                        >

                            <button
                                v-if="link.url"
                                type="button"
                                @click="goToPage(link.url)"
                                class="min-w-9 h-9 px-3 rounded-lg text-sm transition whitespace-nowrap"
                                :class="
                                    link.active
                                        ? 'bg-blue-600 text-white'
                                        : 'text-gray-600 hover:bg-gray-100'
                                "
                                v-html="link.label"
                            ></button>


                            <span
                                v-else
                                class="flex items-center justify-center min-w-9 h-9 px-3 text-sm text-gray-300"
                                v-html="link.label"
                            ></span>

                        </template>

                    </div>

                </div>

            </div>

        </div>

    </AuthenticatedLayout>

</template>