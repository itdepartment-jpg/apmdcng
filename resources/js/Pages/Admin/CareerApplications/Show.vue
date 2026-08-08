<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, router } from "@inertiajs/vue3";

interface Career {
    id: number;
    title: string;
    department: string;
    location: string;
    employment_type: string;
}

interface CareerApplication {
    id: number;
    full_name: string;
    email: string;
    phone: string;
    cover_letter: string | null;
    cv_path: string | null;
    status: string;
    created_at: string;
    career: Career;
}

const props = defineProps<{
    application: CareerApplication;
}>();

const updateStatus = (status: string) => {
    router.patch(
        route(
            "admin.career-applications.status",
            props.application.id
        ),
        {
            status,
        }
    );
};

const deleteApplication = () => {
    if (!confirm("Are you sure you want to delete this application?")) {
        return;
    }

    router.delete(
        route(
            "admin.career-applications.destroy",
            props.application.id
        )
    );
};

const formatDate = (date: string) => {
    return new Date(date).toLocaleDateString("en-GB", {
        day: "2-digit",
        month: "long",
        year: "numeric",
    });
};
</script>

<template>

    <Head title="Application Details" />

    <AuthenticatedLayout>

        <div class="mx-auto max-w-6xl space-y-6">

            <!-- =========================================
                HEADER
            ========================================== -->

            <div class="flex items-center justify-between">

                <div>

                    <h1 class="text-3xl font-bold text-gray-900">
                        Application Details
                    </h1>

                    <p class="mt-2 text-gray-500">
                        Review this candidate's application.
                    </p>

                </div>

                <Link
                    :href="route('admin.career-applications.index')"
                    class="rounded-xl border border-gray-300 px-5 py-3 font-medium text-gray-700 transition hover:bg-gray-100"
                >
                    ← Back to Applications
                </Link>

            </div>


            <!-- =========================================
                APPLICANT + CAREER
            ========================================== -->

            <div class="grid gap-6 lg:grid-cols-3">

                <!-- Applicant Information -->

                <div class="rounded-2xl bg-white p-8 shadow-sm lg:col-span-2">

                    <div class="mb-6 flex items-start justify-between">

                        <div>

                            <h2 class="text-2xl font-bold text-gray-900">
                                {{ application.full_name }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-500">
                                Application #{{ application.id }}
                            </p>

                        </div>

                        <span
                            class="rounded-full bg-blue-100 px-4 py-2 text-sm font-semibold text-blue-700"
                        >
                            {{ application.status }}
                        </span>

                    </div>


                    <div class="grid gap-6 md:grid-cols-2">

                        <!-- Email -->

                        <div>

                            <p class="text-sm text-gray-500">
                                Email Address
                            </p>

                            <a
                                :href="`mailto:${application.email}`"
                                class="mt-1 block font-medium text-[#303791] hover:text-[#EA222F]"
                            >
                                {{ application.email }}
                            </a>

                        </div>


                        <!-- Phone -->

                        <div>

                            <p class="text-sm text-gray-500">
                                Phone Number
                            </p>

                            <a
                                :href="`tel:${application.phone}`"
                                class="mt-1 block font-medium text-[#303791] hover:text-[#EA222F]"
                            >
                                {{ application.phone }}
                            </a>

                        </div>


                        <!-- Application Date -->

                        <div>

                            <p class="text-sm text-gray-500">
                                Application Date
                            </p>

                            <p class="mt-1 font-medium text-gray-800">
                                {{ formatDate(application.created_at) }}
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Career Information -->

                <div class="rounded-2xl bg-[#303791] p-8 text-white shadow-sm">

                    <p class="text-sm uppercase tracking-wider text-white/60">
                        Applied Position
                    </p>

                    <h2 class="mt-3 text-2xl font-bold">
                        {{ application.career.title }}
                    </h2>

                    <div class="mt-6 space-y-4 text-sm text-white/80">

                        <div class="flex items-center gap-3">

                            <i class="fas fa-building"></i>

                            {{ application.career.department }}

                        </div>

                        <div class="flex items-center gap-3">

                            <i class="fas fa-map-marker-alt"></i>

                            {{ application.career.location }}

                        </div>

                        <div class="flex items-center gap-3">

                            <i class="fas fa-clock"></i>

                            {{ application.career.employment_type }}

                        </div>

                    </div>

                </div>

            </div>


            <!-- =========================================
                STATUS MANAGEMENT
            ========================================== -->

            <div class="rounded-2xl bg-white p-8 shadow-sm">

                <h2 class="text-xl font-bold text-gray-900">
                    Application Status
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Update the candidate's current recruitment stage.
                </p>

                <div class="mt-6 flex flex-wrap gap-3">

                    <button
                        v-for="status in [
                            'New',
                            'Reviewing',
                            'Shortlisted',
                            'Interview',
                            'Hired',
                            'Rejected'
                        ]"
                        :key="status"
                        type="button"
                        @click="updateStatus(status)"
                        class="rounded-lg border px-5 py-2.5 text-sm font-medium transition"
                        :class="
                            application.status === status
                                ? 'border-[#303791] bg-[#303791] text-white'
                                : 'border-gray-300 text-gray-700 hover:border-[#303791] hover:text-[#303791]'
                        "
                    >
                        {{ status }}
                    </button>

                </div>

            </div>


            <!-- =========================================
                COVER LETTER
            ========================================== -->

            <div class="rounded-2xl bg-white p-8 shadow-sm">

                <h2 class="text-xl font-bold text-gray-900">
                    Cover Letter
                </h2>

                <div
                    v-if="application.cover_letter"
                    class="mt-5 whitespace-pre-line leading-8 text-gray-600"
                >
                    {{ application.cover_letter }}
                </div>

                <p
                    v-else
                    class="mt-5 text-gray-400"
                >
                    No cover letter was provided.
                </p>

            </div>


            <!-- =========================================
                CV / RESUME
            ========================================== -->

            <div class="rounded-2xl bg-white p-8 shadow-sm">

                <div class="flex flex-col items-start justify-between gap-5 sm:flex-row sm:items-center">

                    <div>

                        <h2 class="text-xl font-bold text-gray-900">
                            CV / Resume
                        </h2>

                        <p class="mt-1 text-sm text-gray-500">
                            Applicant's uploaded CV.
                        </p>

                    </div>

                    <a
                        v-if="application.cv_path"
                        :href="`/storage/${application.cv_path}`"
                        target="_blank"
                        class="inline-flex items-center rounded-xl bg-[#303791] px-6 py-3 font-medium text-white transition hover:bg-[#EA222F]"
                    >

                        <i class="fas fa-file-download mr-2"></i>

                        View CV

                    </a>

                    <span
                        v-else
                        class="text-sm text-gray-400"
                    >
                        No CV uploaded
                    </span>

                </div>

            </div>


            <!-- =========================================
                DANGER ZONE
            ========================================== -->

            <div class="rounded-2xl border border-red-200 bg-red-50 p-8">

                <h2 class="font-bold text-red-800">
                    Delete Application
                </h2>

                <p class="mt-1 text-sm text-red-600">
                    This action cannot be undone.
                </p>

                <button
                    type="button"
                    @click="deleteApplication"
                    class="mt-5 rounded-xl bg-red-600 px-6 py-3 font-medium text-white transition hover:bg-red-700"
                >
                    Delete Application
                </button>

            </div>

        </div>

    </AuthenticatedLayout>

</template>