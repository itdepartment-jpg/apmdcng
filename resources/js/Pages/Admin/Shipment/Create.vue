<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";

defineProps({
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
    container_number: "",
    container_size: "",
    vessel_name: "",
    partner_id: "",
    carrier_id: "",
    status: "",
    eta: "",
});

const submit = () => {
    form.post(route("admin.shipments.store"), {
        preserveScroll: true,

        onSuccess: () => {
            form.reset();
        },

        onError: (errors) => {
            console.error("Shipment validation errors:", errors);
        },

        onFinish: () => {
            console.log("Shipment submission finished.");
        },
    });
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
                <label class="block mb-2 font-medium text-gray-700">
                    Container Number
                </label>

                <input
                    v-model="form.container_number"
                    type="text"
                    placeholder="Enter container number"
                    class="w-full rounded-lg border-gray-300 px-4 py-2 focus:border-[#EA222F] focus:ring-[#EA222F]"
                />

                <InputError
                    class="mt-2"
                    :message="form.errors.container_number"
                />
            </div>

            <!-- Container Size -->
            <div>
                <label class="block mb-2 font-medium text-gray-700">
                    Container Size
                </label>

                <input
                    v-model="form.container_size"
                    type="text"
                    placeholder="e.g. 20FT or 40FT"
                    class="w-full rounded-lg border-gray-300 px-4 py-2 focus:border-[#EA222F] focus:ring-[#EA222F]"
                />

                <InputError
                    class="mt-2"
                    :message="form.errors.container_size"
                />
            </div>

            <!-- Vessel Name -->
            <div>
                <label class="block mb-2 font-medium text-gray-700">
                    Vessel Name
                </label>

                <input
                    v-model="form.vessel_name"
                    type="text"
                    placeholder="Enter vessel name"
                    class="w-full rounded-lg border-gray-300 px-4 py-2 focus:border-[#EA222F] focus:ring-[#EA222F]"
                />

                <InputError
                    class="mt-2"
                    :message="form.errors.vessel_name"
                />
            </div>

            <!-- Partner -->
            <div>
                <label class="block mb-2 font-medium text-gray-700">
                    Partner
                </label>

                <select
                    v-model="form.partner_id"
                    class="w-full rounded-lg border-gray-300 px-4 py-2 focus:border-[#EA222F] focus:ring-[#EA222F]"
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

                <InputError
                    class="mt-2"
                    :message="form.errors.partner_id"
                />
            </div>

            <!-- Carrier -->
            <div>
                <label class="block mb-2 font-medium text-gray-700">
                    Carrier
                </label>

                <select
                    v-model="form.carrier_id"
                    class="w-full rounded-lg border-gray-300 px-4 py-2 focus:border-[#EA222F] focus:ring-[#EA222F]"
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

                <InputError
                    class="mt-2"
                    :message="form.errors.carrier_id"
                />
            </div>

            <!-- Status -->
            <div>
                <label class="block mb-2 font-medium text-gray-700">
                    Status
                </label>

                <input
                    v-model="form.status"
                    type="text"
                    placeholder="e.g. Cargo Received, In Transit, Arrived at Port"
                    class="w-full rounded-lg border-gray-300 px-4 py-2 focus:border-[#EA222F] focus:ring-[#EA222F]"
                />

                <InputError
                    class="mt-2"
                    :message="form.errors.status"
                />
            </div>

            <!-- ETA -->
            <div>
                <label class="block mb-2 font-medium text-gray-700">
                    Estimated Time of Arrival (ETA)
                </label>

                <input
                    v-model="form.eta"
                    type="date"
                    class="w-full rounded-lg border-gray-300 px-4 py-2 focus:border-[#EA222F] focus:ring-[#EA222F]"
                />

                <InputError
                    class="mt-2"
                    :message="form.errors.eta"
                />
            </div>

        </div>

        <!-- Action Buttons -->
        <div class="mt-8 flex items-center justify-end gap-3">

            <!-- Cancel -->
            <button
                type="button"
                @click="$inertia.visit('/admin/shipments')"
                class="px-5 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 transition"
            >
                Cancel
            </button>

            <!-- Save -->
            <button
                type="submit"
                :disabled="form.processing"
                class="px-6 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition disabled:cursor-not-allowed disabled:opacity-50"
            >
                {{ form.processing ? 'Saving Shipment...' : 'Save Shipment' }}
            </button>

        </div>

    </form>

</div>
        </div>
    </AuthenticatedLayout>
</template>