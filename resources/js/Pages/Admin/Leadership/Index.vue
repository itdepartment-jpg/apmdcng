<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {
    Head,
    Link,
    router,
    usePage,
} from "@inertiajs/vue3";
import type { PageProps as InertiaPageProps } from "@inertiajs/core";
import { computed, ref } from "vue";

interface LeadershipMember {
    id: number;
    name: string;
    position: string;
    description: string;
    category: string;
    image_path: string | null;
    email: string | null;
    phone: string | null;
    linkedin: string | null;
    order: number;
}

interface FlashProps {
    success?: string;
    error?: string;
}

interface PageProps extends InertiaPageProps {
    flash?: FlashProps;
}
const page = usePage<PageProps>();

const showLeaderModal = ref(false);
const showDeleteModal = ref(false);

const imagePreview = ref<string | null>(null);

const props = defineProps<{
    executives: LeadershipMember[];
    seniors: LeadershipMember[];
    keyPersonnel: LeadershipMember[];
}>();

const allMembers = computed(() => [
    ...props.executives.map((member) => ({
        ...member,
        categoryLabel: "Executive Leadership",
    })),

    ...props.seniors.map((member) => ({
        ...member,
        categoryLabel: "Senior Management",
    })),

    ...props.keyPersonnel.map((member) => ({
        ...member,
        categoryLabel: "Key Personnel",
    })),
]);

const selectedLeader = ref<LeadershipMember | null>(null);

const confirmDelete = (leader: LeadershipMember) => {
    selectedLeader.value = leader;
    showDeleteModal.value = true;
};

const deleteLeader = () => {
    if (!selectedLeader.value) {
        return;
    }

    router.delete(
        route("leadership.destroy", selectedLeader.value.id),
        {
            preserveScroll: true,

            onSuccess: () => {
                showDeleteModal.value = false;
                selectedLeader.value = null;
            },

            onError: (errors) => {
                console.error("Failed to delete leadership member:", errors);
            },
        }
    );
};
</script>

<template>
    <Head title="Leadership Management" />

    <AuthenticatedLayout>

        <div
             v-if="page.props.flash?.success"
            class="mb-6 rounded-lg border border-green-200 bg-green-50 px-5 py-4 text-green-700"
        >
            {{ page.props.flash.success }}
        </div>

        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Leadership Management
            </h2>
        </template>

        <div class="py-8">

            <div class="max-w-7xl mx-auto px-6">

                <!-- =========================================
                     PAGE HEADER
                ========================================= -->

                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-8">

                    <div>

                        <h1 class="text-3xl font-bold text-gray-900">
                            Leadership Management
                        </h1>

                        <p class="mt-2 text-gray-600">
                            Manage Executive Leadership, Senior Management
                            and Key Personnel from one central dashboard.
                        </p>

                    </div>

                </div>

                <!-- =========================================
                    LEADERSHIP STATISTICS
                ========================================= -->

                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-10">

                    <!-- Executive -->

                    <div
                        class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">

                        <p
                            class="text-sm text-gray-500">

                            Executive Leadership

                        </p>

                        <h2
                            class="mt-3 text-4xl font-bold text-[#303791]">

                           {{ executives.length }}

                        </h2>

                    </div>

                    <!-- Senior -->

                    <div
                        class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">

                        <p
                            class="text-sm text-gray-500">

                            Senior Management

                        </p>

                        <h2
                            class="mt-3 text-4xl font-bold text-[#303791]">

                            {{ seniors.length }}

                        </h2>

                    </div>

                    <!-- Key -->

                    <div
                        class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">

                        <p
                            class="text-sm text-gray-500">

                            Key Personnel

                        </p>

                        <h2
                            class="mt-3 text-4xl font-bold text-[#303791]">

                            {{ keyPersonnel.length }}

                        </h2>

                    </div>

                    <!-- Total -->

                    <div
                        class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">

                        <p
                            class="text-sm text-gray-500">

                            Total Members

                        </p>

                        <h2
                            class="mt-3 text-4xl font-bold text-[#EA222F]">

                           {{
                                executives.length +
                                seniors.length +
                                keyPersonnel.length
                            }}

                        </h2>

                    </div>

                </div>

                <!-- =========================================
                    TOOLBAR
                ========================================= -->

                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 mb-8">

                    <div class="flex items-center gap-4">

                        <!-- Search -->
                        <!-- Search -->
                    <div class="relative flex-1">

                        <div
                            class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none"
                        >
                            
                        </div>

                         <input
                            type="text"
                            placeholder="Search leaders by name, position or category..."
                            class="w-full h-12 rounded-lg border border-gray-300 px-4 focus:border-[#303791] focus:ring-2 focus:ring-[#303791]/20"
                        />

                    </div>
                        <!-- Category -->
                        <select
                            class="w-60 h-12 rounded-lg border border-gray-300 px-4 focus:ring-2 focus:ring-[#303791]"
                        >
                            <option>All Categories</option>
                            <option>Executive Leadership</option>
                            <option>Senior Management</option>
                            <option>Key Personnel</option>
                        </select>

                        <!-- Button -->
                        <Link
                            :href="route('admin.leadership.create')"
                            class="inline-flex items-center rounded-lg bg-[#EA222F] px-5 py-3 font-semibold text-white hover:bg-red-700"
                        >
                            Add Leader
                        </Link>

                    </div>

                </div>

                <!-- =========================================
                    LEADERSHIP TABLE
                ========================================= -->

                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">

                    <!-- =========================================
                        TABLE HEADER
                    ========================================= -->

                    <div
                        class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">

                        <div>

                            <h3 class="text-lg font-semibold text-gray-800">
                                Leadership Directory
                            </h3>

                            <p class="text-sm text-gray-500">
                                Manage all leadership members from one place.
                            </p>

                        </div>

                        <div class="flex items-center gap-2">

                            <button
                                class="px-4 py-2 rounded-lg border border-gray-300 hover:bg-gray-100 transition">

                                Refresh

                            </button>

                            <button
                                class="px-4 py-2 rounded-lg border border-gray-300 hover:bg-gray-100 transition">

                                Export

                            </button>

                        </div>

                    </div>

                    <!-- Table -->

                    <div class="overflow-x-auto">

                        <table class="min-w-full divide-y divide-gray-200">

                            <thead class="bg-gray-50">

                                <tr>

                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                        Photo
                                    </th>

                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                        Name
                                    </th>

                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                        Position
                                    </th>

                                    <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider text-gray-500">
                                        Category
                                    </th>

                                    <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider text-gray-500">
                                        Order
                                    </th>

                                    <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider text-gray-500">
                                        Status
                                    </th>

                                    <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-gray-500">
                                        Actions
                                    </th>

                                </tr>

                            </thead>

                            <tbody class="divide-y divide-gray-100">

                                <!-- Empty State -->

                               <tr
                                    v-for="member in allMembers"
                                    :key="member.id"
                                    class="hover:bg-gray-50 transition"
                                >

                                    <!-- Photo -->
                                    <td class="px-6 py-4">

                                       <img
                                        v-if="member.image_path"
                                        :src="`/storage/${member.image_path}`"
                                        class="w-12 h-12 rounded-full object-cover border"
                                    >

                                        <div
                                            v-else
                                            class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center"
                                        >
                                            👤
                                        </div>

                                    </td>

                                    <!-- Name -->

                                    <td class="px-6 py-4 font-semibold text-gray-800">

                                        {{ member.name }}

                                    </td>

                                    <!-- Position -->

                                    <td class="px-6 py-4">

                                        {{ member.position }}

                                    </td>

                                    <!-- Category -->

                                    <td class="px-6 py-4 text-center">

                                        <span
                                            class="inline-flex px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-700">

                                            {{ member.categoryLabel }}

                                        </span>

                                    </td>

                                    <!-- Order -->

                                    <td class="px-6 py-4 text-center">

                                        {{ member.order }}

                                    </td>

                                    <!-- Status -->

                                    <td class="px-6 py-4 text-center">

                                        <span
                                            class="inline-flex px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700">

                                            Active

                                        </span>

                                    </td>

                                    <!-- Actions -->

                                    <td class="px-6 py-4">

                                        <div class="flex justify-end gap-2">

                                            <Link
                                                :href="route('admin.leadership.edit', member.id)"
                                                class="inline-flex items-center rounded-lg bg-blue-100 px-4 py-2 text-sm font-medium text-blue-600 hover:bg-blue-200"
                                            >
                                                Edit
                                            </Link>

                                            <button
                                               @click="confirmDelete(member)"
                                                class="inline-flex items-center rounded-lg bg-red-100 px-4 py-2 text-sm font-medium text-red-600 hover:bg-red-200"
                                            >
                                                Delete
                                            </button>

                                        </div>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

                <!-- =========================================
                    ADD LEADER MODAL
                ========================================= -->

                <div
                    v-if="showLeaderModal"
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 p-6"
                >

                    <div
                        class="w-full max-w-7xl rounded-2xl bg-white shadow-2xl overflow-hidden">

                        <!-- ==============================
                            HEADER
                        =============================== -->

                        <div
                            class="flex items-center justify-between border-b bg-gray-50 px-8 py-6">

                            <div>

                                <h2 class="text-2xl font-bold text-gray-800">
                                    Add Leadership Member
                                </h2>

                                <p class="mt-1 text-sm text-gray-500">
                                    Complete the information below to add a new leadership member.
                                </p>

                            </div>

                            <button
                                @click="showLeaderModal = false"
                                class="flex h-10 w-10 items-center justify-center rounded-full text-gray-500 transition hover:bg-red-100 hover:text-red-600">

                                ✕

                            </button>

                        </div>

                        <!-- ==============================
                            BODY
                        =============================== -->

                     <div class="flex gap-12 px-8 py-6">

                           

                           <!-- =====================================
                                PROFILE PHOTO
                            ===================================== -->

                            <div class="w-[30%]">

                                <div class="h-full min-h-[250px] rounded-2xl border border-gray-200 bg-gray-50 p-8 shadow-sm flex flex-col">

                                    <!-- Heading -->

                                    <h3 class="text-xl font-semibold text-gray-800">
                                        Profile Photo
                                    </h3>

                                    <p class="mt-1 text-sm text-gray-500">
                                        Upload a professional photo for this leader.
                                    </p>

                                    <!-- Image Preview -->

                                    <div class="mt-6 flex h-[200px] w-full items-center justify-center rounded-2xl border-2 border-dashed border-gray-300 bg-white overflow-hidden">

                                        <img
                                            v-if="imagePreview"
                                            :src="imagePreview"
                                            class="h-full w-full object-cover"
                                        >

                                        <div
                                            v-else
                                            class="text-center"
                                        >

                                            <div
                                                class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full bg-gray-100"
                                            >

                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="h-10 w-10 text-gray-400"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="1.5"
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                                    />
                                                </svg>

                                            </div>

                                            <h4 class="font-semibold text-gray-700">
                                                No Photo Selected
                                            </h4>

                                            <p class="mt-2 text-sm text-gray-500">
                                                Click below to upload a profile photo.
                                            </p>

                                        </div>

                                    </div>

                                    <!-- Upload Button -->

                                    <label
                                        class="mt-6 flex w-full cursor-pointer items-center justify-center rounded-xl bg-[#303791] py-3 font-semibold text-white transition hover:bg-[#252d72]"
                                    >

                                        Upload Photo

                                        <input
                                            type="file"
                                            accept="image/*"
                                            class="hidden"
                                        >

                                    </label>

                                    <!-- Remove Button -->

                                    <button
                                        type="button"
                                        class="mt-3 w-full rounded-xl border border-red-300 py-3 font-medium text-red-600 transition hover:bg-red-50"
                                    >
                                        Remove Photo
                                    </button>

                                    <!-- Help Text -->

                                    <div class="mt-5 text-center">

                                        <p class="text-sm text-gray-500">
                                            Recommended Size
                                        </p>

                                        <p class="font-semibold text-gray-700">
                                            500 × 500 pixels
                                        </p>

                                        <p class="mt-2 text-xs text-gray-400">
                                            JPG, PNG or WEBP • Maximum file size: 2MB
                                        </p>

                                    </div>

                                </div>

                            </div>

                            <!-- ===========================================
                                LEADER INFORMATION (70%)
                            ============================================ -->

                            <div class="flex-1">

                                <div class="rounded-xl border border-gray-200 bg-white p-6">

                                    <!-- =====================================
                                        LEADER INFORMATION
                                    ===================================== -->

                                    

                                        <div class="rounded-2xl border border-gray-200 bg-white p-8 shadow-sm">

                                            <!-- Heading -->

                                            <h3 class="text-xl font-semibold text-gray-800">
                                                Leader Information
                                            </h3>

                                            <p class="mt-1 text-sm text-gray-500 mb-8">
                                                Enter the leader's profile information below.
                                            </p>

                                            <!-- Form -->

                                            <div class="grid grid-cols-2 gap-6">

                                                <!-- Full Name -->

                                                <div>

                                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                                        Full Name <span class="text-red-500">*</span>
                                                    </label>

                                                    <input
                                                        type="text"
                                                        placeholder="e.g. John Doe"
                                                        class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-[#303791] focus:ring-2 focus:ring-[#303791]/20"
                                                    >

                                                </div>

                                                <!-- Position -->

                                                <div>

                                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                                        Position <span class="text-red-500">*</span>
                                                    </label>

                                                    <input
                                                        type="text"
                                                        placeholder="Managing Director"
                                                        class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-[#303791] focus:ring-2 focus:ring-[#303791]/20"
                                                    >

                                                </div>

                                                <!-- Category -->

                                                <div>

                                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                                        Category
                                                    </label>

                                                    <select
                                                        class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-[#303791] focus:ring-2 focus:ring-[#303791]/20"
                                                    >

                                                        <option>Executive Leadership</option>
                                                        <option>Senior Management</option>
                                                        <option>Key Personnel</option>

                                                    </select>

                                                </div>

                                                <!-- Display Order -->

                                                <div>

                                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                                        Display Order
                                                    </label>

                                                    <input
                                                        type="number"
                                                        value="1"
                                                        class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-[#303791] focus:ring-2 focus:ring-[#303791]/20"
                                                    >

                                                </div>

                                                <!-- =====================================
                                                EMAIL
                                            ===================================== -->

                                            <div>

                                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                                    Email Address
                                                </label>

                                                <input
                                                    type="email"
                                                    placeholder="johndoe@apmdcng.com"
                                                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-[#303791] focus:ring-2 focus:ring-[#303791]/20"
                                                >

                                            </div>

                                            <!-- =====================================
                                                LINKEDIN
                                            ===================================== -->

                                            <div>

                                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                                    LinkedIn Profile
                                                </label>

                                                <input
                                                    type="url"
                                                    placeholder="https://linkedin.com/in/johndoe"
                                                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-[#303791] focus:ring-2 focus:ring-[#303791]/20"
                                                >

                                            </div>

                                            </div>

                                            <!-- Biography -->

                                            <div class="mt-8">

                                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                                    Biography
                                                </label>

                                                <textarea
                                                    rows="8"
                                                    placeholder="Write a short biography about this leader..."
                                                    class="w-full rounded-xl border border-gray-300 px-4 py-3 resize-none focus:border-[#303791] focus:ring-2 focus:ring-[#303791]/20"
                                                ></textarea>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                           

                        </div>

                        <!-- ==============================
                            FOOTER
                        =============================== -->

                        <div
                            class="flex justify-end gap-3 border-t bg-gray-50 px-8 py-5">

                            <button
                                @click="showLeaderModal = false"
                                class="rounded-lg border border-gray-300 px-6 py-3 hover:bg-gray-100">

                                Cancel

                            </button>

                            <button
                                class="rounded-lg bg-[#EA222F] px-8 py-3 font-semibold text-white hover:bg-red-700">

                                Save Leader

                            </button>

                        </div>

                    </div>

                </div>

                       


                </div>

            </div>

            <!-- =========================================
    DELETE LEADER MODAL
========================================= -->

<div
    v-if="showDeleteModal"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm"
>
    <div class="w-full max-w-md rounded-2xl bg-white shadow-2xl">

        <!-- Header -->

        <div class="border-b px-6 py-5">

            <h2 class="text-xl font-bold text-gray-800">
                Delete Leadership Member
            </h2>

        </div>

        <!-- Body -->

        <div class="px-6 py-8 text-center">

            <!-- Photo -->

            <img
                v-if="selectedLeader?.image_path"
                :src="`/storage/${selectedLeader.image_path}`"
                class="mx-auto h-24 w-24 rounded-full object-cover border-4 border-gray-100"
            >

            <div
                v-else
                class="mx-auto flex h-24 w-24 items-center justify-center rounded-full bg-gray-100 text-4xl"
            >
                👤
            </div>

            <h3 class="mt-5 text-lg font-bold text-gray-800">
                {{ selectedLeader?.name }}
            </h3>

            <p class="text-gray-500">
                {{ selectedLeader?.position }}
            </p>

            <div class="mt-6 rounded-lg bg-red-50 p-4">

                <p class="text-sm text-red-600">
                    This action is permanent and cannot be undone.
                </p>

            </div>

        </div>

        <!-- Footer -->

        <div class="flex justify-end gap-3 border-t px-6 py-5">

            <button
                @click="showDeleteModal = false"
                class="rounded-lg border border-gray-300 px-5 py-2 font-medium hover:bg-gray-100"
            >
                Cancel
            </button>

            <button
                @click="deleteLeader"
                class="rounded-lg bg-[#EA222F] px-5 py-2 font-medium text-white hover:bg-red-700"
            >
                Delete Member
            </button>

        </div>

    </div>
</div>

    </AuthenticatedLayout>

</template>

