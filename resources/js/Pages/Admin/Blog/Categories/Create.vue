<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import {
    ArrowLeftIcon,
    TagIcon,
} from '@heroicons/vue/24/outline';

import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import TextArea from '@/Components/TextArea.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';


/*
|--------------------------------------------------------------------------
| Form
|--------------------------------------------------------------------------
*/

const form = useForm({
    name: '',
    description: '',
});


/*
|--------------------------------------------------------------------------
| Submit
|--------------------------------------------------------------------------
*/

const submit = () => {
    form.post(route('admin.categories.store'));
};
</script>


<template>

    <Head title="Create Blog Category" />

    <AuthenticatedLayout>

        <!-- =====================================================
             PAGE HEADER
        ====================================================== -->

        <template #header>

            <h2 class="text-2xl font-bold leading-tight text-gray-800">
                Blog Management
            </h2>

        </template>


        <!-- =====================================================
             PAGE CONTENT
        ====================================================== -->

        <div class="py-6">

            <div class="max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Main Card -->

                <div class="bg-white shadow-sm rounded-lg">

                    <div class="p-8">


                        <!-- =================================================
                             TITLE
                        ================================================== -->

                        <div class="flex items-start gap-4 mb-8">

                            <Link
                                :href="route('admin.posts.index')"
                                class="mt-1 p-2 rounded-lg text-gray-500 hover:text-gray-700 hover:bg-gray-100 transition"
                            >

                                <ArrowLeftIcon class="w-5 h-5" />

                            </Link>


                            <div>

                                <h1 class="text-2xl font-bold text-gray-900">
                                    Create Blog Category
                                </h1>

                                <p class="mt-1 text-sm text-gray-500">
                                    Create a category to organise APMDC blog articles.
                                </p>

                            </div>

                        </div>


                        <!-- =================================================
                             CATEGORY FORM
                        ================================================== -->

                        <div class="border border-gray-200 rounded-xl overflow-hidden">


                            <!-- Section Header -->

                            <div class="px-6 py-5 bg-gray-50 border-b border-gray-200">

                                <div class="flex items-center gap-3">

                                    <div
                                        class="flex items-center justify-center w-10 h-10 rounded-lg bg-indigo-50"
                                    >

                                        <TagIcon class="w-5 h-5 text-indigo-600" />

                                    </div>


                                    <div>

                                        <h3 class="text-lg font-semibold text-gray-900">
                                            Category Information
                                        </h3>

                                        <p class="mt-1 text-sm text-gray-500">
                                            Enter the category name and a short description.
                                        </p>

                                    </div>

                                </div>

                            </div>


                            <!-- Form Body -->

                            <div class="p-6">


                                <!-- Category Name -->

                                <div>

                                    <InputLabel
                                        for="name"
                                        value="Category Name"
                                        required
                                    />

                                    <TextInput
                                        id="name"
                                        v-model="form.name"
                                        type="text"
                                        class="mt-1 block w-full"
                                        placeholder="e.g. Shipping & Maritime"
                                    />

                                    <p
                                        v-if="form.errors.name"
                                        class="mt-1 text-sm text-red-600"
                                    >
                                        {{ form.errors.name }}
                                    </p>

                                </div>


                                <!-- Description -->

                                <div class="mt-6">

                                    <InputLabel
                                        for="description"
                                        value="Description"
                                    />

                                    <TextArea
                                        id="description"
                                        v-model="form.description"
                                        rows="5"
                                        class="mt-1 block w-full"
                                        placeholder="Write a short description for this category..."
                                    />

                                    <p class="mt-2 text-xs text-gray-500">
                                        A short description helps explain what type of articles belong to this category.
                                    </p>

                                    <p
                                        v-if="form.errors.description"
                                        class="mt-1 text-sm text-red-600"
                                    >
                                        {{ form.errors.description }}
                                    </p>

                                </div>


                                <!-- =================================================
                                     ACTIONS
                                ================================================== -->

                                <div class="mt-8 pt-6 border-t border-gray-200">

                                    <div class="flex justify-end items-center gap-3">

                                        <Link
                                            :href="route('admin.posts.index')"
                                        >

                                            <SecondaryButton type="button">
                                                Cancel
                                            </SecondaryButton>

                                        </Link>


                                        <PrimaryButton
                                            type="button"
                                            :disabled="form.processing"
                                            @click="submit"
                                        >

                                            {{
                                                form.processing
                                                    ? 'Saving...'
                                                    : 'Save Category'
                                            }}

                                        </PrimaryButton>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </AuthenticatedLayout>

</template>