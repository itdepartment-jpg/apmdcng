<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import {
    PlusIcon,
    PencilIcon,
    TrashIcon,
    DocumentTextIcon,
} from '@heroicons/vue/24/outline';

interface Category {
    id: number;
    name: string;
}

interface Author {
    id: number;
    name: string;
}

interface Post {
    id: number;
    title: string;
    slug: string;
    excerpt: string | null;
    featured_image: string | null;
    status: 'draft' | 'published';
    published_at: string | null;
    views: number;
    category: Category | null;
    author: Author | null;
}

interface PaginationLink {
    url: string | null;
    label: string;
    active: boolean;
}

interface PaginatedPosts {
    data: Post[];
    current_page: number;
    last_page: number;
    total: number;
    links: PaginationLink[];
}

interface Props {
    posts: PaginatedPosts;
    categories: Category[];
}

defineProps<Props>();

const formatDate = (date: string | null): string => {
    if (!date) {
        return '-';
    }

    return new Date(date).toLocaleDateString('en-NG', {
        day: '2-digit',
        month: 'short',
        year: 'numeric',
    });
};
</script>

<template>

    <Head title="Blog Management" />

    <AuthenticatedLayout>

        <template #header>
            <h2 class="text-2xl font-bold leading-tight text-gray-800">
                Blog Management
            </h2>
        </template>

        <div class="py-6">

            <!-- Wider Content Area -->
            <div class="max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8">

                <div class="bg-white shadow-sm rounded-lg">

                    <div class="p-6">

                        <!-- Page Header -->

                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">

                            <div>

                                <h1 class="text-2xl font-bold text-gray-900">
                                    Blog Articles
                                </h1>

                                <p class="mt-1 text-sm text-gray-500">
                                    Manage APMDC news, insights and industry articles.
                                </p>

                            </div>

                            <Link
                                :href="route('admin.posts.create')"
                                class="inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition"
                            >
                                <PlusIcon class="w-5 h-5" />

                                New Article
                            </Link>

                        </div>


                        <!-- Articles -->

                        <div class="border border-gray-100 rounded-lg overflow-hidden">

                            <!-- Empty State -->

                            <div
                                v-if="posts.data.length === 0"
                                class="overflow-x-auto"
                            >

                                <table class="w-full">

                                    <thead class="bg-gray-50">

                                        <tr>

                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>

                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Category
                                            </th>

                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Author
                                            </th>

                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Status
                                            </th>

                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Published
                                            </th>

                                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>

                                            <td
                                                colspan="6"
                                                class="px-6 py-16 text-center"
                                            >

                                                <DocumentTextIcon
                                                    class="w-12 h-12 mx-auto text-gray-300"
                                                />

                                                <p class="mt-4 text-sm text-gray-500">
                                                    No articles found.
                                                </p>

                                            </td>

                                        </tr>

                                    </tbody>

                                </table>

                            </div>


                            <!-- Articles Table -->

                            <div
                                v-else
                                class="overflow-x-auto"
                            >

                                <table class="w-full divide-y divide-gray-200">

                                    <thead class="bg-gray-50">

                                        <tr>

                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Article
                                            </th>

                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Category
                                            </th>

                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Author
                                            </th>

                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Status
                                            </th>

                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Published
                                            </th>

                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Views
                                            </th>

                                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>

                                        </tr>

                                    </thead>


                                    <tbody class="bg-white divide-y divide-gray-200">

                                        <tr
                                            v-for="post in posts.data"
                                            :key="post.id"
                                            class="hover:bg-gray-50 transition"
                                        >

                                            <!-- Article -->

                                            <td class="px-6 py-4">

                                                <div class="flex items-center min-w-[300px]">

                                                    <div
                                                        class="w-12 h-12 rounded-lg bg-gray-100 overflow-hidden flex-shrink-0 mr-4"
                                                    >

                                                        <img
                                                            v-if="post.featured_image"
                                                            :src="`/storage/${post.featured_image}`"
                                                            :alt="post.title"
                                                            class="w-full h-full object-cover"
                                                        />

                                                        <div
                                                            v-else
                                                            class="w-full h-full flex items-center justify-center text-gray-400"
                                                        >

                                                            <DocumentTextIcon class="w-6 h-6" />

                                                        </div>

                                                    </div>


                                                    <div class="min-w-0">

                                                        <p class="text-sm font-semibold text-gray-900 truncate max-w-md">
                                                            {{ post.title }}
                                                        </p>

                                                        <p
                                                            v-if="post.excerpt"
                                                            class="mt-1 text-xs text-gray-500 line-clamp-1 max-w-md"
                                                        >
                                                            {{ post.excerpt }}
                                                        </p>

                                                    </div>

                                                </div>

                                            </td>


                                            <!-- Category -->

                                            <td class="px-6 py-4 whitespace-nowrap">

                                                <span
                                                    v-if="post.category"
                                                    class="inline-flex px-2.5 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800"
                                                >
                                                    {{ post.category.name }}
                                                </span>

                                                <span
                                                    v-else
                                                    class="text-sm text-gray-400"
                                                >
                                                    Uncategorized
                                                </span>

                                            </td>


                                            <!-- Author -->

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                {{ post.author?.name ?? 'Unknown' }}
                                            </td>


                                            <!-- Status -->

                                            <td class="px-6 py-4 whitespace-nowrap">

                                                <span
                                                    v-if="post.status === 'published'"
                                                    class="inline-flex px-2.5 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800"
                                                >
                                                    Published
                                                </span>

                                                <span
                                                    v-else
                                                    class="inline-flex px-2.5 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-700"
                                                >
                                                    Draft
                                                </span>

                                            </td>


                                            <!-- Published -->

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ formatDate(post.published_at) }}
                                            </td>


                                            <!-- Views -->

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ post.views }}
                                            </td>


                                            <!-- Actions -->

                                            <td class="px-6 py-4 whitespace-nowrap">

                                                <div class="flex justify-end items-center gap-2">

                                                    <Link
                                                        :href="route('admin.posts.edit', post.id)"
                                                        class="p-2 text-blue-600 rounded-md hover:bg-blue-50 transition"
                                                        title="Edit Article"
                                                    >
                                                        <PencilIcon class="w-5 h-5" />
                                                    </Link>

                                                    <button
                                                        type="button"
                                                        class="p-2 text-red-600 rounded-md hover:bg-red-50 transition"
                                                        title="Delete Article"
                                                    >
                                                        <TrashIcon class="w-5 h-5" />
                                                    </button>

                                                </div>

                                            </td>

                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>


                        <!-- Pagination -->

                        <div
                            v-if="posts.last_page > 1"
                            class="flex items-center justify-between mt-6"
                        >

                            <p class="text-sm text-gray-500">
                                Showing page {{ posts.current_page }} of {{ posts.last_page }}
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </AuthenticatedLayout>

</template>