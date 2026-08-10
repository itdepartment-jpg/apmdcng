<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import {
    PlusCircleIcon,
    PencilSquareIcon,
    TrashIcon,
    TagIcon,
} from '@heroicons/vue/24/outline';

interface Category {
    id: number;
    name: string;
    slug: string;
    description: string | null;
    posts_count: number;
}

interface PaginatedCategories {
    data: Category[];
    current_page: number;
    last_page: number;
    from: number | null;
    to: number | null;
    total: number;
}

interface Props {
    categories: PaginatedCategories;
}

defineProps<Props>();
</script>


<template>

    <Head title="Blog Categories" />

    <AuthenticatedLayout>

        <!-- Page Header -->

        <template #header>

            <h2 class="text-2xl font-bold leading-tight text-gray-800">
                Blog Management
            </h2>

        </template>


        <div class="py-6">

            <div class="max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Main Card -->

                <div class="bg-white shadow-sm rounded-lg">

                    <div class="p-8">

                        <!-- Page Title -->

                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">

                            <div>

                                <h1 class="text-2xl font-bold text-gray-900">
                                    Blog Categories
                                </h1>

                                <p class="mt-1 text-sm text-gray-500">
                                    Manage categories used to organise APMDC blog articles.
                                </p>

                            </div>


                            <!-- Add Category -->

                            <Link
                                :href="route('admin.categories.create')"
                                class="inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-indigo-600 text-white text-sm font-semibold rounded-lg hover:bg-indigo-700 transition"
                            >

                                <PlusCircleIcon class="w-5 h-5" />

                                Add Category

                            </Link>

                        </div>


                        <!-- Categories Table -->

                        <div class="border border-gray-200 rounded-xl overflow-hidden">

                            <div class="overflow-x-auto">

                                <table class="min-w-full divide-y divide-gray-200">

                                    <thead class="bg-gray-50">

                                        <tr>

                                            <th
                                                class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-500"
                                            >
                                                Category
                                            </th>

                                            <th
                                                class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-500"
                                            >
                                                Description
                                            </th>

                                            <th
                                                class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider text-gray-500"
                                            >
                                                Articles
                                            </th>

                                            <th
                                                class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-gray-500"
                                            >
                                                Actions
                                            </th>

                                        </tr>

                                    </thead>


                                    <tbody class="divide-y divide-gray-100 bg-white">

                                        <tr
                                            v-for="category in categories.data"
                                            :key="category.id"
                                            class="hover:bg-gray-50 transition"
                                        >

                                            <!-- Category -->

                                            <td class="px-6 py-5">

                                                <div class="flex items-center gap-3">

                                                    <div
                                                        class="flex items-center justify-center w-10 h-10 rounded-lg bg-indigo-50"
                                                    >

                                                        <TagIcon
                                                            class="w-5 h-5 text-indigo-600"
                                                        />

                                                    </div>


                                                    <div>

                                                        <div class="font-semibold text-gray-900">
                                                            {{ category.name }}
                                                        </div>

                                                        <div class="text-xs text-gray-400">
                                                            {{ category.slug }}
                                                        </div>

                                                    </div>

                                                </div>

                                            </td>


                                            <!-- Description -->

                                            <td class="px-6 py-5">

                                                <p class="max-w-xl text-sm text-gray-600">

                                                    {{
                                                        category.description ||
                                                        'No description provided.'
                                                    }}

                                                </p>

                                            </td>


                                            <!-- Articles -->

                                            <td class="px-6 py-5 text-center">

                                                <span
                                                    class="inline-flex items-center justify-center min-w-[40px] px-3 py-1 text-sm font-semibold rounded-full bg-gray-100 text-gray-700"
                                                >
                                                    {{ category.posts_count }}
                                                </span>

                                            </td>


                                           <!-- =====================================================
                                                ACTIONS
                                            ====================================================== -->

                                            <td class="px-6 py-5">

                                                <div class="flex items-center justify-end gap-2">

                                                    <!-- Edit -->

                                                    <Link
                                                        :href="route('admin.categories.edit', category.id)"
                                                        title="Edit Category"
                                                        aria-label="Edit Category"
                                                        class="inline-flex items-center justify-center w-10 h-10 rounded-lg border border-indigo-200 text-indigo-600 hover:bg-indigo-50 hover:border-indigo-300 transition"
                                                    >

                                                        <PencilSquareIcon class="w-5 h-5" />

                                                    </Link>


                                                    <!-- Delete -->

                                                    <Link
                                                        as="button"
                                                        method="delete"
                                                        :href="route('admin.categories.destroy', category.id)"
                                                        title="Delete Category"
                                                        aria-label="Delete Category"
                                                        class="inline-flex items-center justify-center w-10 h-10 rounded-lg border border-red-200 text-red-600 hover:bg-red-50 hover:border-red-300 transition"
                                                        onclick="return confirm('Are you sure you want to delete this category?')"
                                                    >

                                                        <TrashIcon class="w-5 h-5" />

                                                    </Link>

                                                </div>

                                            </td>
                                        </tr>


                                        <!-- Empty State -->

                                        <tr
                                            v-if="categories.data.length === 0"
                                        >

                                            <td
                                                colspan="4"
                                                class="px-6 py-16 text-center"
                                            >

                                                <div
                                                    class="flex flex-col items-center"
                                                >

                                                    <div
                                                        class="flex items-center justify-center w-16 h-16 rounded-full bg-gray-100 mb-4"
                                                    >

                                                        <TagIcon
                                                            class="w-8 h-8 text-gray-400"
                                                        />

                                                    </div>


                                                    <h3 class="text-lg font-semibold text-gray-900">
                                                        No Categories Yet
                                                    </h3>


                                                    <p class="mt-1 text-sm text-gray-500">
                                                        Create your first Blog category to get started.
                                                    </p>


                                                    <Link
                                                        :href="route('admin.categories.create')"
                                                        class="mt-5 inline-flex items-center gap-2 px-4 py-2.5 bg-indigo-600 text-white text-sm font-semibold rounded-lg hover:bg-indigo-700 transition"
                                                    >

                                                        <PlusCircleIcon class="w-5 h-5" />

                                                        Add Category

                                                    </Link>

                                                </div>

                                            </td>

                                        </tr>

                                    </tbody>

                                </table>

                            </div>


                            <!-- Pagination -->

                            <div
                                v-if="categories.last_page > 1"
                                class="flex items-center justify-between px-6 py-4 border-t border-gray-200 bg-gray-50"
                            >

                                <p class="text-sm text-gray-500">

                                    Showing
                                    <span class="font-medium">
                                        {{ categories.from }}
                                    </span>

                                    to

                                    <span class="font-medium">
                                        {{ categories.to }}
                                    </span>

                                    of

                                    <span class="font-medium">
                                        {{ categories.total }}
                                    </span>

                                    categories

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </AuthenticatedLayout>

</template>