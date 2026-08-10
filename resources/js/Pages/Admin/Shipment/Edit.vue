<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm, router } from "@inertiajs/vue3";

const props = defineProps({
    shipment: {
        type: Object,
        required: true,
    },

    partners: {
        type: Array,
        default: () => [],
    },

    carriers: {
        type: Array,
        default: () => [],
    },
});

const form = useForm({
    container_number: props.shipment.container_number ?? "",
    container_size: props.shipment.container_size ?? "",
    vessel_name: props.shipment.vessel_name ?? "",
    partner_id: props.shipment.partner_id ?? "",
    carrier_id: props.shipment.carrier_id ?? "",
    status: props.shipment.status ?? "",
    eta: props.shipment.eta ?? "",
});

const submit = () => {
    form.put(
        route("admin.shipments.update", props.shipment.id),
        {
            preserveScroll: true,

            onSuccess: () => {
                console.log("Shipment updated successfully.");
            },

            onError: (errors) => {
                console.error("Shipment update failed:", errors);
            },
        }
    );
};
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Edit Shipment" />

        <div class="p-6">

            <h1 class="text-2xl font-bold mb-6">
                Edit Shipment
            </h1>

            <div class="bg-white rounded-xl shadow p-6">

                <form @submit.prevent="submit">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Container Number -->
                        <div>
                            <label class="block mb-2 font-medium">
                                Container Number
                            </label>

                            <input
                                v-model="form.container_number"
                                type="text"
                                class="w-full border rounded-lg px-4 py-2"
                                placeholder="Enter Container Number"
                            />

                            <p
                                v-if="form.errors.container_number"
                                class="text-red-500 text-sm mt-1"
                            >
                                {{ form.errors.container_number }}
                            </p>
                        </div>

                        <!-- Container Size -->
                        <div>
                            <label class="block mb-2 font-medium">
                                Container Size
                            </label>

                            <input
                                v-model="form.container_size"
                                type="text"
                                class="w-full border rounded-lg px-4 py-2"
                                placeholder="e.g. 20FT or 40FT"
                            />

                            <p
                                v-if="form.errors.container_size"
                                class="text-red-500 text-sm mt-1"
                            >
                                {{ form.errors.container_size }}
                            </p>
                        </div>

                        <!-- Vessel Name -->
                        <div>
                            <label class="block mb-2 font-medium">
                                Vessel Name
                            </label>

                            <input
                                v-model="form.vessel_name"
                                type="text"
                                class="w-full border rounded-lg px-4 py-2"
                                placeholder="Enter Vessel Name"
                            />

                            <p
                                v-if="form.errors.vessel_name"
                                class="text-red-500 text-sm mt-1"
                            >
                                {{ form.errors.vessel_name }}
                            </p>
                        </div>

                        <!-- Partner -->
                        <div>
                            <label class="block mb-2 font-medium">
                                Partner
                            </label>

                            <select
                                v-model="form.partner_id"
                                class="w-full border rounded-lg px-4 py-2"
                            >
                                <option value="">Select Partner</option>

                                <option
                                    v-for="partner in partners"
                                    :key="partner.id"
                                    :value="partner.id"
                                >
                                    {{ partner.name }}
                                </option>
                            </select>

                            <p
                                v-if="form.errors.partner_id"
                                class="text-red-500 text-sm mt-1"
                            >
                                {{ form.errors.partner_id }}
                            </p>
                        </div>

                        <!-- Carrier -->
                        <div>
                            <label class="block mb-2 font-medium">
                                Carrier
                            </label>

                            <select
                                v-model="form.carrier_id"
                                class="w-full border rounded-lg px-4 py-2"
                            >
                                <option value="">Select Carrier</option>

                                <option
                                    v-for="carrier in carriers"
                                    :key="carrier.id"
                                    :value="carrier.id"
                                >
                                    {{ carrier.name }}
                                </option>
                            </select>

                            <p
                                v-if="form.errors.carrier_id"
                                class="text-red-500 text-sm mt-1"
                            >
                                {{ form.errors.carrier_id }}
                            </p>
                        </div>

                        <!-- Status -->
                        <div>
                            <label class="block mb-2 font-medium">
                                Status
                            </label>

                            <input
                                v-model="form.status"
                                type="text"
                                placeholder="e.g. Cargo Received, In Transit"
                                class="w-full border rounded-lg px-4 py-2"
                            />

                            <p
                                v-if="form.errors.status"
                                class="text-red-500 text-sm mt-1"
                            >
                                {{ form.errors.status }}
                            </p>
                        </div>

                        <!-- ETA -->
                        <div>
                            <label class="block mb-2 font-medium">
                                Estimated Time of Arrival (ETA)
                            </label>

                            <input
                                v-model="form.eta"
                                type="date"
                                class="w-full border rounded-lg px-4 py-2"
                            />

                            <p
                                v-if="form.errors.eta"
                                class="text-red-500 text-sm mt-1"
                            >
                                {{ form.errors.eta }}
                            </p>
                        </div>

                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-8 flex justify-end gap-3">

                       <button
                            type="button"
                            @click="router.visit(route('admin.shipments.index'))"
                            class="px-5 py-2 border border-gray-300 rounded-lg hover:bg-gray-100"
                        >
                            Cancel
                        </button>

                        <button
                            type="submit"
                            :disabled="form.processing"
                            class="px-6 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 disabled:opacity-50 disabled:cursor-not-allowed"
                        >
                            {{ form.processing ? "Updating Shipment..." : "Update Shipment" }}
                        </button>

                    </div>

                </form>

            </div>

        </div>
    </AuthenticatedLayout>
</template>