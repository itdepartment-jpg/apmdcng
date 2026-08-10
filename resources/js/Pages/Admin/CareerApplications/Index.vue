<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, router } from "@inertiajs/vue3";

interface Career {
    id: number;
    title: string;
    department: string;
}

interface CareerApplication {
    id: number;
    full_name: string;
    email: string;
    phone: string;
    status: string;
    created_at: string;
    career: Career;
}

const props = defineProps<{
    applications: CareerApplication[];
}>();

const deleteApplication = (id: number) => {
    if (!confirm("Are you sure you want to delete this application?")) {
        return;
    }

    router.delete(
        route("admin.career-applications.destroy", id)
    );
};

const statusClasses = (status: string) => {
    switch (status) {
        case "New":
            return "bg-blue-100 text-blue-700";

        case "Reviewing":
            return "bg-yellow-100 text-yellow-700";

        case "Shortlisted":
            return "bg-purple-100 text-purple-700";

        case "Interview":
            return "bg-indigo-100 text-indigo-700";

        case "Hired":
            return "bg-green-100 text-green-700";

        case "Rejected":
            return "bg-red-100 text-red-700";

        default:
            return "bg-gray-100 text-gray-700";
    }
};

const formatDate = (date: string) => {
    return new Date(date).toLocaleDateString("en-GB", {
        day: "2-digit",
        month: "short",
        year: "numeric",
    });
};
</script>

<template>

    <Head title="Career Applications" />

    <AuthenticatedLayout>

        <div class="space-y-6">

            <!-- =========================================
                HEADER
            ========================================== -->

            <div class="flex items-center justify-between">

                <div>

                    <h1 class="text-3xl font-bold text-gray-900">
                        Career Applications
                    </h1>

                    <p class="mt-2 text-gray-500">
                        Review and manage applications submitted for open positions.
                    </p>

                </div>

                <div
                    class="rounded-xl bg-[#303791]/10 px-5 py-3 text-sm font-semibold text-[#303791]"
                >
                    {{ applications.length }}
                    {{ applications.length === 1 ? "Application" : "Applications" }}
                </div>

            </div>


            <!-- =========================================
                APPLICATIONS TABLE
            ========================================== -->

            <div
                class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm"
            >

                <div class="overflow-x-auto">

                    <table class="min-w-full">

                        <!-- Header -->

                        <thead class="border-b bg-gray-50">

                            <tr>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                                    Applicant
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                                    Position
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                                    Contact
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                                    Applied
                                </th>

                                <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700">
                                    Status
                                </th>

                                <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700">
                                    Actions
                                </th>

                            </tr>

                        </thead>


                        <!-- Body -->

                        <tbody class="divide-y divide-gray-100">

                            <tr
                                v-for="application in applications"
                                :key="application.id"
                                class="transition hover:bg-gray-50"
                            >

                                <!-- Applicant -->

                                <td class="px-6 py-5">

                                    <div class="font-semibold text-gray-900">
                                        {{ application.full_name }}
                                    </div>

                                    <div class="mt-1 text-sm text-gray-500">
                                        Application #{{ application.id }}
                                    </div>

                                </td>


                                <!-- Position -->

                                <td class="px-6 py-5">

                                    <div class="font-medium text-[#303791]">
                                        {{ application.career?.title ?? "Career Deleted" }}
                                    </div>

                                    <div
                                        v-if="application.career?.department"
                                        class="mt-1 text-sm text-gray-500"
                                    >
                                        {{ application.career.department }}
                                    </div>

                                </td>


                                <!-- Contact -->

                                <td class="px-6 py-5">

                                    <div class="text-sm text-gray-700">
                                        {{ application.email }}
                                    </div>

                                    <div class="mt-1 text-sm text-gray-500">
                                        {{ application.phone }}
                                    </div>

                                </td>


                                <!-- Date -->

                                <td class="whitespace-nowrap px-6 py-5 text-sm text-gray-600">

                                    {{ formatDate(application.created_at) }}

                                </td>


                                <!-- Status -->

                                <td class="px-6 py-5 text-center">

                                    <span
                                        class="inline-flex rounded-full px-3 py-1 text-xs font-semibold"
                                        :class="statusClasses(application.status)"
                                    >
                                        {{ application.status }}
                                    </span>

                                </td>


                                <!-- Actions -->

                                <td class="px-6 py-5">

                                    <div class="flex items-center justify-center gap-4">

                                        <Link
                                            :href="route(
                                                'admin.career-applications.show',
                                                application.id
                                            )"
                                            class="font-medium text-[#303791] transition hover:text-[#EA222F]"
                                        >
                                            View
                                        </Link>

                                        <span class="text-gray-300">
                                            |
                                        </span>

                                        <button
                                            type="button"
                                            @click="deleteApplication(application.id)"
                                            class="font-medium text-red-600 transition hover:text-red-800"
                                        >
                                            Delete
                                        </button>

                                    </div>

                                </td>

                            </tr>


                            <!-- =====================================
                                EMPTY STATE
                            ====================================== -->

                            <tr v-if="applications.length === 0">

                                <td
                                    colspan="6"
                                    class="px-6 py-16 text-center"
                                >

                                    <div class="space-y-4">

                                        <div
                                            class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-[#303791]/10 text-[#303791]"
                                        >

                                            <i class="fas fa-file-user text-2xl"></i>

                                        </div>

                                        <div>

                                            <h3 class="text-lg font-semibold text-gray-700">
                                                No Applications Yet
                                            </h3>

                                            <p class="mt-2 text-gray-500">
                                                Career applications will appear here when applicants submit their applications.
                                            </p>

                                        </div>

                                    </div>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </AuthenticatedLayout>

</template>