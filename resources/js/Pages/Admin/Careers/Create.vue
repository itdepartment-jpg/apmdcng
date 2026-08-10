<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { ref } from "vue";

interface CareerForm {
    reference_no: string;
    title: string;
    department: string;
    location: string;
    employment_type: string;

    experience_required: string;
    education: string;
    salary: string;
    vacancies: number;
    application_deadline: string;

    description: string;
    responsibilities: string;
    requirements: string;

    status: string;
    featured: boolean;
    job_document: File | null;
}

const form = useForm<CareerForm>({
    // Career Information
    reference_no: "",
    title: "",
    department: "",
    location: "",
    employment_type: "",

    // Requirements
    experience_required: "",
    education: "",
    salary: "",
    vacancies: 1,
    application_deadline: "",

    // Job Details
    description: "",
    responsibilities: "",
    requirements: "",

    // Publication
    status: "Draft",
    featured: false,
    job_document: null,
});

const selectedFile = ref<File | null>(null);

const submit = () => {
    form.post(route("admin.careers.store"), {
        forceFormData: true,
    });
};

const onFileSelected = (event: Event) => {
    const input = event.target as HTMLInputElement;

    if (!input.files?.length) {
        return;
    }

    const file = input.files[0];

    selectedFile.value = file;
    form.job_document = file;
};

const onFileDrop = (event: DragEvent) => {
    if (!event.dataTransfer?.files.length) {
        return;
    }

    const file = event.dataTransfer.files[0];

    selectedFile.value = file;
    form.job_document = file;
};

const removeSelectedFile = () => {
    selectedFile.value = null;
    form.job_document = null;
};
</script>
<template>

    <Head title="Create Career" />

    <AuthenticatedLayout>

        <div class="mx-auto max-w-7xl space-y-8 px-6 py-8">

            <!-- =========================================
                PAGE HEADER
            ========================================== -->

            <div class="flex items-center justify-between">

                <div>

                    <h1 class="text-3xl font-bold text-[#1B1F3B]">
                        Create Career
                    </h1>

                    <p class="mt-2 text-gray-500">
                        Create and publish a new career opportunity on the APMDC website.
                    </p>

                </div>

                <Link
                    :href="route('admin.careers.index')"
                    class="rounded-xl border border-gray-300 px-6 py-3 font-medium text-gray-700 transition hover:bg-gray-100"
                >
                    Back to Careers
                </Link>

            </div>

            <!-- =========================================
                CAREER FORM
            ========================================== -->

            <form
                @submit.prevent="submit"
                class="space-y-8"
            >

                <!-- =====================================
                    CAREER INFORMATION
                ====================================== -->

                <div class="rounded-2xl border border-gray-200 bg-white p-8 shadow-sm">

                    <div class="mb-8">

                        <h2 class="text-xl font-bold text-[#1B1F3B]">
                            Career Information
                        </h2>

                        <p class="mt-2 text-gray-500">
                            Basic information about this career opportunity.
                        </p>

                    </div>

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                        <div>

                            <label class="mb-2 block font-medium">
                                Reference Number
                            </label>

                            <input
                                v-model="form.reference_no"
                                type="text"
                                placeholder="APMDC-2026-001"
                                class="w-full rounded-xl border-gray-300"
                            >

                        </div>

                        <div>

                            <label class="mb-2 block font-medium">
                                Job Title
                            </label>

                            <input
                                v-model="form.title"
                                type="text"
                                placeholder="Senior Logistics Officer"
                                class="w-full rounded-xl border-gray-300"
                            >

                        </div>

                        <div>

                            <label class="mb-2 block font-medium">
                                Department
                            </label>

                            <input
                                v-model="form.department"
                                type="text"
                                class="w-full rounded-xl border-gray-300"
                            >

                        </div>

                        <div>

                            <label class="mb-2 block font-medium">
                                Location
                            </label>

                            <input
                                v-model="form.location"
                                type="text"
                                class="w-full rounded-xl border-gray-300"
                            >

                        </div>

                        <div>

                            <label class="mb-2 block font-medium">
                                Employment Type
                            </label>

                            <select
                                v-model="form.employment_type"
                                class="w-full rounded-xl border-gray-300"
                            >

                                <option value="">Select Employment Type</option>
                                <option>Full-time</option>
                                <option>Part-time</option>
                                <option>Contract</option>
                                <option>Temporary</option>
                                <option>Internship</option>

                            </select>

                        </div>

                    </div>

                </div>

                <!-- =====================================
                    REQUIREMENTS
                ====================================== -->

                <div class="rounded-2xl border border-gray-200 bg-white p-8 shadow-sm">

                    <div class="mb-8">

                        <h2 class="text-xl font-bold text-[#1B1F3B]">
                            Requirements
                        </h2>

                    </div>

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                        <div>

                            <label class="mb-2 block font-medium">
                                Experience Required
                            </label>

                            <input
                                v-model="form.experience_required"
                                type="text"
                                class="w-full rounded-xl border-gray-300"
                            >


                        </div>

                        <div>

                            <label class="mb-2 block font-medium">
                                Education
                            </label>
                            
                            <input
                                v-model="form.education"
                                type="text"
                                class="w-full rounded-xl border-gray-300"
                            >
                            

                        </div>

                        <div>

                            <label class="mb-2 block font-medium">
                                Salary
                            </label>


                            <input
                                v-model="form.salary"
                                type="text"
                                class="w-full rounded-xl border-gray-300"
                            >

                        </div>

                        <div>

                            <label class="mb-2 block font-medium">
                                Vacancies
                            </label>

                            <input
                                v-model="form.vacancies"
                                type="number"
                                min="1"
                                class="w-full rounded-xl border-gray-300"
                            >

                        </div>

                        <div>

                            <label class="mb-2 block font-medium">
                                Application Deadline
                            </label>

                            <input
                                v-model="form.application_deadline"
                                type="date"
                                class="w-full rounded-xl border-gray-300"
                            >

                        </div>

                    </div>

                </div>

                <!-- =====================================
                    JOB DETAILS
                ====================================== -->

                <div class="rounded-2xl border border-gray-200 bg-white p-8 shadow-sm">

                    <div class="space-y-6">

                        <div>

                            <label class="mb-2 block font-medium">
                                Job Description
                            </label>

                            <textarea
                                v-model="form.description"
                                rows="6"
                                class="w-full rounded-xl border-gray-300"
                            ></textarea>

                        </div>

                        <div>

                            <label class="mb-2 block font-medium">
                                Responsibilities
                            </label>

                            <textarea
                                v-model="form.responsibilities"
                                rows="6"
                                class="w-full rounded-xl border-gray-300"
                            ></textarea>

                        </div>

                        <div>

                            <label class="mb-2 block font-medium">
                                Requirements
                            </label>

                            <textarea
                                v-model="form.requirements"
                                rows="6"
                                class="w-full rounded-xl border-gray-300"
                            ></textarea>

                        </div>

                    </div>

                </div>

                <!-- =====================================
                    PUBLICATION SETTINGS
                ====================================== -->

                <div class="rounded-2xl border border-gray-200 bg-white p-8 shadow-sm">

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                        <div>

                            <label class="mb-2 block font-medium">
                                Status
                            </label>

                            <select
                                v-model="form.status"
                                class="w-full rounded-xl border-gray-300"
                            >

                                <option>Draft</option>
                                <option>Open</option>
                                <option>Closed</option>

                            </select>

                        </div>

                        <div class="flex items-end">

                            <label class="flex items-center gap-3">

                                <input
                                    v-model="form.featured"
                                    type="checkbox"
                                >

                                <span>
                                    Featured Career
                                </span>

                            </label>

                        </div>

                    </div>

                  <!-- =========================================
                        JOB DESCRIPTION DOCUMENT
                    ========================================== -->

                    <div class="mt-8">

                        <label class="mb-3 block text-sm font-semibold text-gray-700">
                            Job Description Document
                        </label>

                        <label
                            @dragover.prevent
                            @dragenter.prevent
                            @drop.prevent="onFileDrop"
                            class="group flex cursor-pointer flex-col items-center justify-center rounded-2xl border-2 border-dashed border-gray-300 bg-gray-50 px-8 py-12 text-center transition-all duration-300 hover:border-[#303791] hover:bg-blue-50"
                        >

                            <!-- Hidden File Input -->

                            <input
                                type="file"
                                class="hidden"
                                accept=".pdf,.doc,.docx"
                                @change="onFileSelected"
                            />
                            <!-- Upload Icon -->

                            <div
                                class="mb-6 flex h-16 w-16 items-center justify-center rounded-full bg-[#303791]/10 text-[#303791] transition-all duration-300 group-hover:bg-[#303791] group-hover:text-white"
                            >

                                <i class="fas fa-cloud-upload-alt text-3xl"></i>

                            </div>

                            <!-- Upload Title -->

                            <h3 class="text-lg font-semibold text-[#1B1F3B]">

                                Drag & Drop Your Job Description

                            </h3>

                            <!-- Upload Instructions -->

                            <p class="mt-2 text-gray-500">

                                Drop your file here or click anywhere in this area to browse.

                            </p>

                            <!-- Supported Formats -->

                            <p class="mt-4 text-sm text-gray-400">

                                Supported Formats: <strong>PDF, DOC, DOCX</strong> &bull; Maximum Size: <strong>5 MB</strong>

                            </p>

                            <!-- =========================================
    SELECTED FILE
========================================== -->

<div
    v-if="selectedFile"
    class="mt-8 w-full rounded-2xl border border-green-200 bg-green-50 p-5"
>

    <div class="flex items-start justify-between">

        <div class="flex items-center gap-4">

            <div
                class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-green-600"
            >

                <i class="fas fa-file-pdf text-xl"></i>

            </div>

            <div>

                <p class="font-semibold text-green-800">

                    {{ selectedFile.name }}

                </p>

                <p class="text-sm text-green-600">

                    Ready for upload

                </p>

            </div>

        </div>

        <button
            type="button"
            @click.stop="removeSelectedFile"
            class="rounded-lg bg-red-50 px-4 py-2 text-sm font-medium text-red-600 transition hover:bg-red-100"
        >

            <i class="fas fa-times mr-2"></i>

            Remove

        </button>

    </div>

</div>

                        </label>

                    </div>

                    </div>

                <!-- =====================================
                    ACTIONS
                ====================================== -->

                <div class="flex justify-end gap-4">

                    <Link
                        :href="route('admin.careers.index')"
                        class="rounded-xl border border-gray-300 px-6 py-3"
                    >
                        Cancel
                    </Link>

                    <button
                        type="submit"
                        :disabled="form.processing"
                        class="rounded-xl bg-[#303791] px-8 py-3 font-medium text-white transition hover:bg-[#EA222F] disabled:opacity-50"
                    >
                        {{ form.processing ? "Saving..." : "Save Career" }}
                    </button>

                </div>

            </form>

        </div>

    </AuthenticatedLayout>

</template>