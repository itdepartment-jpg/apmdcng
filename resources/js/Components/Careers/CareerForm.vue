<script setup lang="ts">
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";

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

const props = defineProps<{
    form: CareerForm & {
        errors: Record<string, string>;
        processing: boolean;
    };
    pageTitle: string;
    pageDescription: string;
    submitLabel: string;
    existingDocument?: string | null;
}>();

const emit = defineEmits<{
    (event: "submit"): void;
}>();

const selectedFile = ref<File | null>(null);

const onFileSelected = (event: Event) => {
    const input = event.target as HTMLInputElement;

    if (!input.files?.length) {
        return;
    }

    setFile(input.files[0]);
};

const onFileDrop = (event: DragEvent) => {
    const file = event.dataTransfer?.files?.[0];

    if (!file) {
        return;
    }

    setFile(file);
};

const setFile = (file: File) => {
    selectedFile.value = file;
    props.form.job_document = file;
};

const removeSelectedFile = () => {
    selectedFile.value = null;
    props.form.job_document = null;
};

const formatFileSize = (bytes: number) => {
    return `${(bytes / 1024 / 1024).toFixed(2)} MB`;
};
</script>

<template>

    <div class="mx-auto max-w-5xl p-8">

        <!-- =========================================
            PAGE HEADER
        ========================================== -->

        <div class="mb-8 flex items-center justify-between">

            <div>

                <h1 class="text-3xl font-bold text-gray-900">
                    {{ pageTitle }}
                </h1>

                <p class="mt-2 text-gray-500">
                    {{ pageDescription }}
                </p>

            </div>

            <Link
                :href="route('admin.careers.index')"
                class="rounded-lg border border-gray-300 px-5 py-3 text-gray-700 transition hover:bg-gray-100"
            >
                Back to Careers
            </Link>

        </div>

        <!-- =========================================
            CAREER FORM
        ========================================== -->

        <form
            @submit.prevent="emit('submit')"
            class="space-y-8 rounded-2xl bg-white p-8 shadow-sm"
        >

            <!-- =====================================
                CAREER INFORMATION
            ====================================== -->

            <div>

                <h2 class="mb-6 text-xl font-semibold text-[#1B1F3B]">
                    Career Information
                </h2>

                <div class="grid gap-6 md:grid-cols-2">

                    <!-- Reference Number -->

                    <div>

                        <label class="mb-2 block text-sm font-medium text-gray-700">
                            Reference Number
                        </label>

                        <input
                            v-model="form.reference_no"
                            type="text"
                            placeholder="e.g. APMDC-CAREER-001"
                            class="w-full rounded-lg border-gray-300 focus:border-[#303791] focus:ring-[#303791]"
                        />

                        <p
                            v-if="form.errors.reference_no"
                            class="mt-1 text-sm text-red-600"
                        >
                            {{ form.errors.reference_no }}
                        </p>

                    </div>

                    <!-- Job Title -->

                    <div>

                        <label class="mb-2 block text-sm font-medium text-gray-700">
                            Job Title *
                        </label>

                        <input
                            v-model="form.title"
                            type="text"
                            placeholder="Enter job title"
                            class="w-full rounded-lg border-gray-300 focus:border-[#303791] focus:ring-[#303791]"
                        />

                        <p
                            v-if="form.errors.title"
                            class="mt-1 text-sm text-red-600"
                        >
                            {{ form.errors.title }}
                        </p>

                    </div>

                    <!-- Department -->

                    <div>

                        <label class="mb-2 block text-sm font-medium text-gray-700">
                            Department *
                        </label>

                        <input
                            v-model="form.department"
                            type="text"
                            placeholder="e.g. Operations"
                            class="w-full rounded-lg border-gray-300 focus:border-[#303791] focus:ring-[#303791]"
                        />

                        <p
                            v-if="form.errors.department"
                            class="mt-1 text-sm text-red-600"
                        >
                            {{ form.errors.department }}
                        </p>

                    </div>

                    <!-- Location -->

                    <div>

                        <label class="mb-2 block text-sm font-medium text-gray-700">
                            Location *
                        </label>

                        <input
                            v-model="form.location"
                            type="text"
                            placeholder="e.g. Lagos, Nigeria"
                            class="w-full rounded-lg border-gray-300 focus:border-[#303791] focus:ring-[#303791]"
                        />

                        <p
                            v-if="form.errors.location"
                            class="mt-1 text-sm text-red-600"
                        >
                            {{ form.errors.location }}
                        </p>

                    </div>

                    <!-- Employment Type -->

                    <div>

                        <label class="mb-2 block text-sm font-medium text-gray-700">
                            Employment Type *
                        </label>

                        <select
                            v-model="form.employment_type"
                            class="w-full rounded-lg border-gray-300 focus:border-[#303791] focus:ring-[#303791]"
                        >
                            <option value="">
                                Select Employment Type
                            </option>

                            <option value="Full-time">
                                Full-time
                            </option>

                            <option value="Part-time">
                                Part-time
                            </option>

                            <option value="Contract">
                                Contract
                            </option>

                            <option value="Internship">
                                Internship
                            </option>

                        </select>

                        <p
                            v-if="form.errors.employment_type"
                            class="mt-1 text-sm text-red-600"
                        >
                            {{ form.errors.employment_type }}
                        </p>

                    </div>

                </div>

            </div>

            <!-- =====================================
                REQUIREMENTS
            ====================================== -->

            <div>

                <h2 class="mb-6 text-xl font-semibold text-[#1B1F3B]">
                    Requirements
                </h2>

                <div class="grid gap-6 md:grid-cols-2">

                    <div>

                        <label class="mb-2 block text-sm font-medium text-gray-700">
                            Experience Required
                        </label>

                        <input
                            v-model="form.experience_required"
                            type="text"
                            placeholder="e.g. 3+ years"
                            class="w-full rounded-lg border-gray-300 focus:border-[#303791] focus:ring-[#303791]"
                        />

                    </div>

                    <div>

                        <label class="mb-2 block text-sm font-medium text-gray-700">
                            Education
                        </label>

                        <input
                            v-model="form.education"
                            type="text"
                            placeholder="e.g. Bachelor's Degree"
                            class="w-full rounded-lg border-gray-300 focus:border-[#303791] focus:ring-[#303791]"
                        />

                    </div>

                    <div>

                        <label class="mb-2 block text-sm font-medium text-gray-700">
                            Salary
                        </label>

                        <input
                            v-model="form.salary"
                            type="text"
                            placeholder="e.g. Competitive"
                            class="w-full rounded-lg border-gray-300 focus:border-[#303791] focus:ring-[#303791]"
                        />

                    </div>

                    <div>

                        <label class="mb-2 block text-sm font-medium text-gray-700">
                            Number of Vacancies
                        </label>

                        <input
                            v-model.number="form.vacancies"
                            type="number"
                            min="1"
                            class="w-full rounded-lg border-gray-300 focus:border-[#303791] focus:ring-[#303791]"
                        />

                    </div>

                    <div>

                        <label class="mb-2 block text-sm font-medium text-gray-700">
                            Application Deadline
                        </label>

                        <input
                            v-model="form.application_deadline"
                            type="date"
                            class="w-full rounded-lg border-gray-300 focus:border-[#303791] focus:ring-[#303791]"
                        />

                    </div>

                </div>

            </div>

            <!-- =====================================
                JOB DETAILS
            ====================================== -->

            <div>

                <h2 class="mb-6 text-xl font-semibold text-[#1B1F3B]">
                    Job Details
                </h2>

                <div class="space-y-6">

                    <!-- Description -->

                    <div>

                        <label class="mb-2 block text-sm font-medium text-gray-700">
                            Job Description
                        </label>

                        <textarea
                            v-model="form.description"
                            rows="6"
                            placeholder="Describe the position..."
                            class="w-full rounded-lg border-gray-300 focus:border-[#303791] focus:ring-[#303791]"
                        ></textarea>

                    </div>

                    <!-- Responsibilities -->

                    <div>

                        <label class="mb-2 block text-sm font-medium text-gray-700">
                            Responsibilities
                        </label>

                        <textarea
                            v-model="form.responsibilities"
                            rows="6"
                            placeholder="List the key responsibilities..."
                            class="w-full rounded-lg border-gray-300 focus:border-[#303791] focus:ring-[#303791]"
                        ></textarea>

                    </div>

                    <!-- Requirements -->

                    <div>

                        <label class="mb-2 block text-sm font-medium text-gray-700">
                            Candidate Requirements
                        </label>

                        <textarea
                            v-model="form.requirements"
                            rows="6"
                            placeholder="List the candidate requirements..."
                            class="w-full rounded-lg border-gray-300 focus:border-[#303791] focus:ring-[#303791]"
                        ></textarea>

                    </div>

                </div>

            </div>

            <!-- =====================================
                JOB DOCUMENT
            ====================================== -->

            <div>

                <h2 class="mb-6 text-xl font-semibold text-[#1B1F3B]">
                    Job Description Document
                </h2>

                <!-- Existing Document -->

                <div
                    v-if="existingDocument && !selectedFile"
                    class="mb-5 flex items-center justify-between rounded-xl border border-blue-200 bg-blue-50 p-5"
                >

                    <div class="flex items-center gap-4">

                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-[#303791]"
                        >
                            <i class="fas fa-file-alt text-xl"></i>
                        </div>

                        <div>

                            <p class="font-medium text-gray-800">
                                Current Job Description
                            </p>

                            <a
                                :href="`/storage/${existingDocument}`"
                                target="_blank"
                                class="text-sm font-medium text-[#303791] hover:text-[#EA222F]"
                            >
                                View Current Document
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Upload Area -->

                <label
                    @dragover.prevent
                    @dragenter.prevent
                    @drop.prevent="onFileDrop"
                    class="group flex cursor-pointer flex-col items-center justify-center rounded-2xl border-2 border-dashed border-gray-300 bg-gray-50 px-8 py-12 text-center transition-all duration-300 hover:border-[#303791] hover:bg-blue-50"
                >

                    <input
                        type="file"
                        class="hidden"
                        accept=".pdf,.doc,.docx"
                        @change="onFileSelected"
                    />

                    <div
                        class="mb-6 flex h-16 w-16 items-center justify-center rounded-full bg-[#303791]/10 text-[#303791] transition-all duration-300 group-hover:bg-[#303791] group-hover:text-white"
                    >
                        <i class="fas fa-cloud-upload-alt text-3xl"></i>
                    </div>

                    <h3 class="text-lg font-semibold text-[#1B1F3B]">
                        {{ selectedFile ? "Replace Job Description" : "Upload Job Description" }}
                    </h3>

                    <p class="mt-2 text-gray-500">
                        Drag & drop your file here or click to browse.
                    </p>

                    <p class="mt-4 text-sm text-gray-400">
                        PDF • DOC • DOCX &nbsp; | &nbsp; Maximum file size: 5MB
                    </p>

                    <!-- Selected Replacement File -->

                    <div
                        v-if="selectedFile"
                        class="mt-8 w-full rounded-2xl border border-green-200 bg-green-50 p-5"
                    >

                        <div class="flex items-center justify-between gap-4">

                            <div class="flex min-w-0 items-center gap-4">

                                <div
                                    class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-100 text-green-600"
                                >
                                    <i class="fas fa-file-alt text-xl"></i>
                                </div>

                                <div class="min-w-0 text-left">

                                    <p class="truncate font-semibold text-green-800">
                                        {{ selectedFile.name }}
                                    </p>

                                    <p class="text-sm text-green-600">
                                        {{ formatFileSize(selectedFile.size) }} • Ready for upload
                                    </p>

                                </div>

                            </div>

                            <button
                                type="button"
                                @click.stop="removeSelectedFile"
                                class="shrink-0 rounded-lg bg-red-50 px-4 py-2 text-sm font-medium text-red-600 transition hover:bg-red-100"
                            >
                                <i class="fas fa-times mr-2"></i>
                                Remove
                            </button>

                        </div>

                    </div>

                </label>

            </div>

            <!-- =====================================
                PUBLICATION
            ====================================== -->

            <div>

                <h2 class="mb-6 text-xl font-semibold text-[#1B1F3B]">
                    Publication
                </h2>

                <div class="grid gap-6 md:grid-cols-2">

                    <!-- Status -->

                    <div>

                        <label class="mb-2 block text-sm font-medium text-gray-700">
                            Status *
                        </label>

                        <select
                            v-model="form.status"
                            class="w-full rounded-lg border-gray-300 focus:border-[#303791] focus:ring-[#303791]"
                        >
                            <option value="Draft">
                                Draft
                            </option>

                            <option value="Open">
                                Open
                            </option>

                            <option value="Closed">
                                Closed
                            </option>

                        </select>

                    </div>

                    <!-- Featured -->

                    <div class="flex items-center pt-8">

                        <label class="flex cursor-pointer items-center gap-3">

                            <input
                                v-model="form.featured"
                                type="checkbox"
                                class="h-5 w-5 rounded border-gray-300 text-[#303791] focus:ring-[#303791]"
                            />

                            <span class="font-medium text-gray-700">
                                Featured Career
                            </span>

                        </label>

                    </div>

                </div>

            </div>

            <!-- =====================================
                FORM ACTIONS
            ====================================== -->

            <div class="flex items-center justify-end gap-4 border-t border-gray-100 pt-6">

                <Link
                    :href="route('admin.careers.index')"
                    class="rounded-xl border border-gray-300 px-6 py-3 font-medium text-gray-700 transition hover:bg-gray-100"
                >
                    Cancel
                </Link>

                <button
                    type="submit"
                    :disabled="form.processing"
                    class="rounded-xl bg-[#303791] px-6 py-3 font-medium text-white transition hover:bg-[#EA222F] disabled:cursor-not-allowed disabled:opacity-60"
                >

                    <span v-if="form.processing">
                        Saving...
                    </span>

                    <span v-else>
                        {{ submitLabel }}
                    </span>

                </button>

            </div>

        </form>

    </div>

</template>