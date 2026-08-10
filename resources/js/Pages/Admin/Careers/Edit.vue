<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import CareerForm from "@/Components/Careers/CareerForm.vue";
import { Head, useForm } from "@inertiajs/vue3";

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

    status: "Draft" | "Open" | "Closed";
    featured: boolean;

    job_document: string | null;
}

const props = defineProps<{
    career: Career;
}>();

const form = useForm({
    reference_no: props.career.reference_no ?? "",
    title: props.career.title ?? "",
    department: props.career.department ?? "",
    location: props.career.location ?? "",
    employment_type: props.career.employment_type ?? "",

    experience_required: props.career.experience_required ?? "",
    education: props.career.education ?? "",
    salary: props.career.salary ?? "",
    vacancies: props.career.vacancies ?? 1,
    application_deadline: props.career.application_deadline ?? "",

    description: props.career.description ?? "",
    responsibilities: props.career.responsibilities ?? "",
    requirements: props.career.requirements ?? "",

    status: props.career.status ?? "Draft",
    featured: props.career.featured ?? false,

    job_document: null as File | null,
});

const submit = () => {
    form
        .transform((data) => ({
            ...data,
            _method: "PUT",
        }))
        .post(route("admin.careers.update", props.career.id), {
            forceFormData: true,
        });
};
</script>

<template>

    <Head title="Edit Career" />

    <AuthenticatedLayout>

        <CareerForm
            :form="form"
            page-title="Edit Career"
            page-description="Update this career opportunity."
            submit-label="Update Career"
            :existing-document="career.job_document"
            @submit="submit"
        />

    </AuthenticatedLayout>

</template>