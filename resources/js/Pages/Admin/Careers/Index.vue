<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, router } from "@inertiajs/vue3";

interface Career {
    id: number;
    reference_no: string | null;
    title: string;
    department: string;
    location: string;
    employment_type: string;

    experience_required: string | null;
    education: string | null;
    salary: string | null;
    vacancies: number | null;

    application_deadline: string | null;

    description: string | null;
    responsibilities: string | null;
    requirements: string | null;

    status: string;
    featured: boolean;
    job_document: string | null;
}

const props = defineProps<{
    careers: Career[];
}>();

const deleteCareer = (id: number) => {
    if (!confirm("Are you sure you want to delete this career?")) {
        return;
    }

    router.delete(
        route("admin.careers.destroy", id),
        {
            preserveScroll: true,

            onSuccess: () => {
                console.log("Career deleted successfully.");
            },

            onError: (errors) => {
                console.error("Failed to delete career:", errors);
            },
        }
    );
};
</script>

<template>
    <Head title="Career Management" />

    <AuthenticatedLayout>

    <div class="space-y-8">

        <!-- =========================================
            Page Header
        ========================================== -->

        <div class="flex items-center justify-between">

            <div>

                <h1 class="text-3xl font-bold text-[#1B1F3B]">
                    Career Management
                </h1>

                <p class="mt-2 text-gray-500">
                    Create, manage and publish career opportunities on the APMDC website.
                </p>

            </div>

            <Link
                :href="route('admin.careers.create')"
                class="rounded-xl bg-[#303791] px-6 py-3 font-medium text-white transition duration-300 hover:bg-[#EA222F]"
            >
                + Create Career
            </Link>

        </div>

       <!-- =========================================
    CAREERS TABLE
========================================== -->

<div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">

    <div class="overflow-x-auto">

        <table class="min-w-full">

            <!-- Table Header -->

            <thead class="border-b bg-gray-50">

                <tr>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                        Reference
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                        Job Title
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                        Department
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                        Status
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                        Deadline
                    </th>

                    <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700">
                        Document
                    </th>

                    <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700">
                        Actions
                    </th>

                </tr>

            </thead>

            <!-- Table Body -->

            <tbody class="divide-y divide-gray-100">

                <tr
                    v-for="career in careers"
                    :key="career.id"
                    class="transition hover:bg-gray-50"
                >

                    <!-- Reference -->

                    <td class="whitespace-nowrap px-6 py-5">

                        <span class="text-sm font-medium text-gray-500">
                            {{ career.reference_no || "—" }}
                        </span>

                    </td>

                    <!-- Job Title -->

                    <td class="px-6 py-5">

                        <div class="font-semibold text-[#1B1F3B]">
                            {{ career.title }}
                        </div>

                        <div
                            v-if="career.featured"
                            class="mt-1 text-xs font-medium text-amber-600"
                        >
                            ★ Featured
                        </div>

                    </td>

                    <!-- Department -->

                    <td class="px-6 py-5 text-gray-600">
                        {{ career.department }}
                    </td>

                    <!-- Status -->

                    <td class="px-6 py-5">

                        <span
                            class="inline-flex rounded-full px-3 py-1 text-xs font-semibold"
                            :class="{
                                'bg-green-100 text-green-700':
                                    career.status === 'Open',

                                'bg-yellow-100 text-yellow-700':
                                    career.status === 'Draft',

                                'bg-red-100 text-red-700':
                                    career.status === 'Closed',
                            }"
                        >
                            {{ career.status }}
                        </span>

                    </td>

                    <!-- Deadline -->

                    <td class="whitespace-nowrap px-6 py-5 text-gray-600">

                        {{ career.application_deadline || "No deadline" }}

                    </td>

                    <!-- Document -->

                    <td class="px-6 py-5 text-center">

                        <a
                            v-if="career.job_document"
                            :href="`/storage/${career.job_document}`"
                            target="_blank"
                            class="inline-flex items-center gap-2 font-medium text-[#303791] transition hover:text-[#EA222F]"
                        >

                            <i class="fas fa-file-alt"></i>

                            View

                        </a>

                        <span
                            v-else
                            class="text-sm text-gray-400"
                        >
                            —
                        </span>

                    </td>

                    <!-- Actions -->

                    <td class="px-6 py-5">

                        <div class="flex items-center justify-center gap-4">

                            <Link
                                :href="route('admin.careers.edit', career.id)"
                                class="font-medium text-[#303791] transition hover:text-[#EA222F]"
                            >
                                Edit
                            </Link>

                            <span class="text-gray-300">
                                |
                            </span>

                            <button
                                type="button"
                                @click="deleteCareer(career.id)"
                                class="font-medium text-red-600 transition hover:text-red-800"
                            >
                                Delete
                            </button>

                        </div>

                    </td>

                </tr>

                <!-- Empty State -->

                <tr v-if="careers.length === 0">

                    <td
                        colspan="7"
                        class="px-6 py-16 text-center"
                    >

                        <div class="space-y-3">

                            <i class="fas fa-briefcase text-5xl text-gray-300"></i>

                            <h3 class="text-lg font-semibold text-gray-700">
                                No Career Opportunities
                            </h3>

                            <p class="text-gray-500">
                                There are currently no career opportunities available.
                            </p>

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