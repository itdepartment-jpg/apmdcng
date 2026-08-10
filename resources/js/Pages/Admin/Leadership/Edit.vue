<script setup lang="ts">
import { Head, Link, useForm } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import { computed } from "vue";

interface Leader {
    id: number;
    name: string;
    position: string;
    description: string | null;
    category: string;
    image_path: string | null;
    order: number;
    email: string | null;
    phone: string | null;
    linkedin: string | null;
    appointed_date: string | null;
}

const props = defineProps<{
    leader: Leader;
}>();

/*
|--------------------------------------------------------------------------
| Image Preview
|--------------------------------------------------------------------------
*/

const imagePreview = computed(() => {
    if (props.leader.image_path) {
        return `/storage/${props.leader.image_path}`;
    }

    return null;
});

/*
|--------------------------------------------------------------------------
| Form
|--------------------------------------------------------------------------
*/

const form = useForm({
    name: props.leader.name ?? "",
    position: props.leader.position ?? "",
    description: props.leader.description ?? "",
    category: props.leader.category ?? "",
    order: props.leader.order ?? 1,
    email: props.leader.email ?? "",
    phone: props.leader.phone ?? "",
    linkedin: props.leader.linkedin ?? "",
    appointed_date: props.leader.appointed_date ?? "",
    image: null as File | null,
});

/*
|--------------------------------------------------------------------------
| Image Selection
|--------------------------------------------------------------------------
*/

const handleImageUpload = (event: Event) => {
    const target = event.target as HTMLInputElement;

    if (target.files && target.files.length > 0) {
        form.image = target.files[0];
    }
};

/*
|--------------------------------------------------------------------------
| Submit
|--------------------------------------------------------------------------
*/

const submit = () => {
    form.transform((data) => ({
        ...data,
        _method: "PUT",
    })).post(
        route("admin.leadership.update", props.leader.id),
        {
            forceFormData: true,
            preserveScroll: true,
            onSuccess: () => {
                form.reset("image");
            },
        }
    );
};
</script>

<template>
    <Head title="Edit Leadership Member" />

    <AuthenticatedLayout>
        <div class="p-6">

            <!-- =====================================================
                PAGE HEADER
            ====================================================== -->

            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">

                <div>
                    <h1 class="text-2xl font-bold text-gray-800">
                        Edit Leadership Member
                    </h1>

                    <p class="mt-1 text-sm text-gray-500">
                        Update this leader's profile and professional information.
                    </p>
                </div>

                <Link
                    :href="route('admin.leadership.index')"
                    class="inline-flex items-center justify-center rounded-lg border border-gray-300 px-5 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-100 transition"
                >
                    ← Back to Leaders
                </Link>

            </div>

            <!-- =====================================================
                FORM
            ====================================================== -->

            <form @submit.prevent="submit">

                <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

                    <!-- =================================================
                        PROFILE PHOTO
                    ================================================== -->

                    <div class="xl:col-span-1">

                        <div class="rounded-2xl border border-gray-200 bg-white shadow-sm overflow-hidden">

                            <div class="border-b px-6 py-4">

                                <h2 class="text-lg font-semibold text-gray-800">
                                    Profile Photo
                                </h2>

                                <p class="mt-1 text-sm text-gray-500">
                                    Update the leader's profile picture.
                                </p>

                            </div>

                            <div class="p-6">

                                <!-- Current Image -->

                                <div
                                    v-if="imagePreview"
                                    class="mb-6 flex justify-center"
                                >
                                    <div class="relative">

                                        <img
                                            :src="imagePreview"
                                            alt="Leadership member"
                                            class="h-48 w-48 rounded-2xl object-cover border border-gray-200 shadow-sm"
                                        />

                                    </div>
                                </div>

                                <!-- No Image -->

                                <div
                                    v-else
                                    class="mb-6 flex h-48 w-full items-center justify-center rounded-2xl bg-gray-100 text-gray-400"
                                >
                                    No profile photo
                                </div>

                                <!-- Upload -->

                                <label
                                    class="block mb-2 text-sm font-medium text-gray-700"
                                >
                                    Replace Photo
                                </label>

                                <input
                                    type="file"
                                    accept="image/jpeg,image/png,image/jpg,image/webp"
                                    @change="handleImageUpload"
                                    class="block w-full text-sm text-gray-600
                                           file:mr-4 file:rounded-lg
                                           file:border-0 file:bg-[#303791]
                                           file:px-4 file:py-2
                                           file:text-sm file:font-medium
                                           file:text-white
                                           hover:file:bg-[#252b78]"
                                />

                                <p class="mt-2 text-xs text-gray-500">
                                    JPG, JPEG, PNG or WEBP. Maximum size: 2MB.
                                </p>

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.image"
                                />

                            </div>

                        </div>

                    </div>

                    <!-- =================================================
                        LEADER INFORMATION
                    ================================================== -->

                    <div class="xl:col-span-2">

                        <div class="rounded-2xl border border-gray-200 bg-white shadow-sm">

                            <div class="border-b px-6 py-4">

                                <h2 class="text-lg font-semibold text-gray-800">
                                    Leader Information
                                </h2>

                                <p class="mt-1 text-sm text-gray-500">
                                    Update the leader's professional and contact details.
                                </p>

                            </div>

                            <div class="p-6">

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                                    <!-- Full Name -->

                                    <div>

                                        <label class="block mb-2 text-sm font-medium text-gray-700">
                                            Full Name
                                            <span class="text-red-500">*</span>
                                        </label>

                                        <input
                                            v-model="form.name"
                                            type="text"
                                            placeholder="Enter Full Name"
                                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[#EA222F] focus:ring-[#EA222F]"
                                        />

                                        <InputError
                                            class="mt-2"
                                            :message="form.errors.name"
                                        />

                                    </div>

                                    <!-- Position -->

                                    <div>

                                        <label class="block mb-2 text-sm font-medium text-gray-700">
                                            Position
                                            <span class="text-red-500">*</span>
                                        </label>

                                        <input
                                            v-model="form.position"
                                            type="text"
                                            placeholder="Managing Director"
                                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[#EA222F] focus:ring-[#EA222F]"
                                        />

                                        <InputError
                                            class="mt-2"
                                            :message="form.errors.position"
                                        />

                                    </div>

                                    <!-- Category -->

                                    <div>

                                        <label class="block mb-2 text-sm font-medium text-gray-700">
                                            Category
                                            <span class="text-red-500">*</span>
                                        </label>

                                        <select
                                            v-model="form.category"
                                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[#EA222F] focus:ring-[#EA222F]"
                                        >
                                            <option value="">
                                                Select Category
                                            </option>

                                            <option value="executive">
                                                Executive Leadership
                                            </option>

                                            <option value="senior">
                                                Senior Management
                                            </option>

                                            <option value="key">
                                                Key Personnel
                                            </option>
                                        </select>

                                        <InputError
                                            class="mt-2"
                                            :message="form.errors.category"
                                        />

                                    </div>

                                    <!-- Display Order -->

                                    <div>

                                        <label class="block mb-2 text-sm font-medium text-gray-700">
                                            Display Order
                                        </label>

                                        <input
                                            v-model="form.order"
                                            type="number"
                                            min="0"
                                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[#EA222F] focus:ring-[#EA222F]"
                                        />

                                        <InputError
                                            class="mt-2"
                                            :message="form.errors.order"
                                        />

                                    </div>

                                    <!-- Email -->

                                    <div>

                                        <label class="block mb-2 text-sm font-medium text-gray-700">
                                            Email Address
                                        </label>

                                        <input
                                            v-model="form.email"
                                            type="email"
                                            placeholder="john.doe@apmdcng.com"
                                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[#EA222F] focus:ring-[#EA222F]"
                                        />

                                        <InputError
                                            class="mt-2"
                                            :message="form.errors.email"
                                        />

                                    </div>

                                    <!-- Phone -->

                                    <div>

                                        <label class="block mb-2 text-sm font-medium text-gray-700">
                                            Phone Number
                                        </label>

                                        <input
                                            v-model="form.phone"
                                            type="text"
                                            placeholder="+234..."
                                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[#EA222F] focus:ring-[#EA222F]"
                                        />

                                        <InputError
                                            class="mt-2"
                                            :message="form.errors.phone"
                                        />

                                    </div>

                                    <!-- LinkedIn -->

                                    <div>

                                        <label class="block mb-2 text-sm font-medium text-gray-700">
                                            LinkedIn Profile
                                        </label>

                                        <input
                                            v-model="form.linkedin"
                                            type="url"
                                            placeholder="https://linkedin.com/in/johndoe"
                                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[#EA222F] focus:ring-[#EA222F]"
                                        />

                                        <InputError
                                            class="mt-2"
                                            :message="form.errors.linkedin"
                                        />

                                    </div>

                                    <!-- Appointed Date -->

                                    <div>

                                        <label class="block mb-2 text-sm font-medium text-gray-700">
                                            Appointed Date
                                        </label>

                                        <input
                                            v-model="form.appointed_date"
                                            type="date"
                                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[#EA222F] focus:ring-[#EA222F]"
                                        />

                                        <InputError
                                            class="mt-2"
                                            :message="form.errors.appointed_date"
                                        />

                                    </div>

                                </div>

                                <!-- Biography -->

                                <div class="mt-6">

                                    <label class="block mb-2 text-sm font-medium text-gray-700">
                                        Biography
                                        <span class="text-red-500">*</span>
                                    </label>

                                    <textarea
                                        v-model="form.description"
                                        rows="8"
                                        placeholder="Write a short biography about this leader..."
                                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[#EA222F] focus:ring-[#EA222F]"
                                    ></textarea>

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.description"
                                    />

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- =====================================================
                    ACTION BUTTONS
                ====================================================== -->

                <div class="mt-8 flex justify-end gap-3">

                    <Link
                        :href="route('admin.leadership.index')"
                        class="rounded-lg border border-gray-300 px-6 py-3 text-sm font-medium text-gray-700 hover:bg-gray-100 transition"
                    >
                        Cancel
                    </Link>

                    <button
                        type="submit"
                        :disabled="form.processing"
                        class="rounded-lg bg-[#EA222F] px-6 py-3 font-semibold text-white hover:bg-red-700 disabled:opacity-50 disabled:cursor-not-allowed transition"
                    >
                        {{
                            form.processing
                                ? "Updating Leader..."
                                : "Update Leader"
                        }}
                    </button>

                </div>

            </form>

        </div>

    </AuthenticatedLayout>
</template>