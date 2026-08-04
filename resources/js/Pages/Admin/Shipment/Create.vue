<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";

defineProps({
    partners: Array,
    carriers: Array,
});

const form = useForm({
    container_number: "",
    container_size: "",
    vessel_name: "",
    partner_id: "",
    carrier_id: "",
    status: "",
    eta: "",
});

const submit = () => {
    form.post(route("shipments.store"));
};
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Add Shipment" />
        <div class="p-6">

            <h1 class="text-2xl font-bold mb-6">
                Create Shipment
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
                        </div>

                        <!-- Status -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Status
                            </label>

                            <input
                                v-model="form.status"
                                type="text"
                                placeholder="e.g. Cargo Received, In Transit, Arrived at Port"
                                class="w-full rounded-lg border-gray-300 focus:border-[#EA222F] focus:ring-[#EA222F]"
                            />

                            <InputError
                                class="mt-2"
                                :message="form.errors.status"
                            />
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
                        </div>

                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-8 flex justify-end gap-3">

                        <button
                            type="button"
                            class="px-5 py-2 border border-gray-300 rounded-lg hover:bg-gray-100"
                            @click="$inertia.visit('/admin/shipments')"
                        >
                            Cancel
                        </button>

                        <button
                            type="submit"
                            :disabled="form.processing"
                            class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 disabled:opacity-50 disabled:cursor-not-allowed"
                        >
                            {{ form.processing ? "Saving Shipment..." : "Save Shipment" }}
                        </button>

                    </div>

                </form>

            </div>

        </div>
    </AuthenticatedLayout>
</template>