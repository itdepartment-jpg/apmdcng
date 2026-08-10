<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import {
    ArrowLeftIcon,
    PhotoIcon,
} from '@heroicons/vue/24/outline';

import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import TextArea from '@/Components/TextArea.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import WysiwygEditor from '@/Components/WysiwygEditor.vue';

interface Category {
    id: number;
    name: string;
}

interface Props {
    categories: Category[];
}

defineProps<Props>();

const form = useForm({
    title: '',
    excerpt: '',
    content: '',
    category_id: '',
    status: 'draft',
    published_at: '',
    featured_image: null as File | null,
});

const submit = () => {
    form.post(route('admin.posts.store'), {
        forceFormData: true,
    });
};
</script>

<template>

    <Head title="Create Blog Article" />

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

                        <div class="flex items-start gap-4 mb-8">

                            <Link
                                :href="route('admin.posts.index')"
                                class="mt-1 p-2 rounded-lg text-gray-500 hover:text-gray-700 hover:bg-gray-100 transition"
                            >
                                <ArrowLeftIcon class="w-5 h-5" />
                            </Link>

                            <div>

                                <h1 class="text-2xl font-bold text-gray-900">
                                    Create Blog Article
                                </h1>

                                <p class="mt-1 text-sm text-gray-500">
                                    Create, format and prepare an article for publication on the APMDC Blog.
                                </p>

                            </div>

                        </div>


                        <!-- Article Form -->

                        <div class="border border-gray-200 rounded-xl overflow-hidden">

                            <!-- Section Header -->

                            <div class="px-6 py-5 bg-gray-50 border-b border-gray-200">

                                <h3 class="text-lg font-semibold text-gray-900">
                                    Article Information
                                </h3>

                                <p class="mt-1 text-sm text-gray-500">
                                    Provide the information and content for this article.
                                </p>

                            </div>


                            <div class="p-6">

                                <!-- Basic Information -->

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                                    <!-- Title -->

                                    <div class="lg:col-span-2">

                                        <InputLabel
                                            for="title"
                                            value="Article Title"
                                            required
                                        />

                                        <TextInput
                                            id="title"
                                            v-model="form.title"
                                            type="text"
                                            class="mt-1 block w-full"
                                            placeholder="Enter Article Title"
                                        />

                                        <p
                                            v-if="form.errors.title"
                                            class="mt-1 text-sm text-red-600"
                                        >
                                            {{ form.errors.title }}
                                        </p>

                                    </div>


                                    <!-- Category -->

                                    <div>

                                        <InputLabel
                                            for="category_id"
                                            value="Category"
                                            required
                                        />

                                        <select
                                            id="category_id"
                                            v-model="form.category_id"
                                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                        >

                                            <option value="">
                                                Select Category
                                            </option>

                                            <option
                                                v-for="category in categories"
                                                :key="category.id"
                                                :value="category.id"
                                            >
                                                {{ category.name }}
                                            </option>

                                        </select>

                                        <p
                                            v-if="form.errors.category_id"
                                            class="mt-1 text-sm text-red-600"
                                        >
                                            {{ form.errors.category_id }}
                                        </p>

                                    </div>


                                    <!-- Status -->

                                    <div>

                                        <InputLabel
                                            for="status"
                                            value="Publication Status"
                                            required
                                        />

                                        <select
                                            id="status"
                                            v-model="form.status"
                                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                        >

                                            <option value="draft">
                                                Draft
                                            </option>

                                            <option value="published">
                                                Published
                                            </option>

                                        </select>

                                        <p
                                            v-if="form.errors.status"
                                            class="mt-1 text-sm text-red-600"
                                        >
                                            {{ form.errors.status }}
                                        </p>

                                    </div>


                                    <!-- Publish Date -->

                                    <div>

                                        <InputLabel
                                            for="published_at"
                                            value="Publish Date"
                                        />

                                        <TextInput
                                            id="published_at"
                                            v-model="form.published_at"
                                            type="datetime-local"
                                            class="mt-1 block w-full"
                                        />

                                        <p
                                            v-if="form.errors.published_at"
                                            class="mt-1 text-sm text-red-600"
                                        >
                                            {{ form.errors.published_at }}
                                        </p>

                                    </div>


                                    <!-- Featured Image -->

                                    <div>

                                        <InputLabel
                                            for="featured_image"
                                            value="Featured Image"
                                        />

                                        <label
                                            for="featured_image"
                                            class="mt-1 flex items-center gap-3 w-full px-4 py-2.5 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-50 transition"
                                        >

                                            <PhotoIcon class="w-5 h-5 text-gray-400" />

                                            <span class="text-sm text-gray-600">
                                                Choose Featured Image
                                            </span>

                                        </label>

                                        <input
                                            id="featured_image"
                                            type="file"
                                            accept="image/png,image/jpeg,image/webp"
                                            class="hidden"
                                            @change="
                                                form.featured_image =
                                                    ($event.target as HTMLInputElement).files?.[0] ?? null
                                            "
                                        />

                                        <p class="mt-2 text-xs text-gray-500">
                                            JPG, PNG or WEBP. Maximum size: 2MB.
                                        </p>

                                        <p
                                            v-if="form.featured_image"
                                            class="mt-1 text-xs text-gray-600"
                                        >
                                            {{ form.featured_image.name }}
                                        </p>

                                        <p
                                            v-if="form.errors.featured_image"
                                            class="mt-1 text-sm text-red-600"
                                        >
                                            {{ form.errors.featured_image }}
                                        </p>

                                    </div>


                                    <!-- Excerpt -->

                                    <div class="lg:col-span-2">

                                        <InputLabel
                                            for="excerpt"
                                            value="Article Excerpt"
                                            required
                                        />

                                        <TextArea
                                            id="excerpt"
                                            v-model="form.excerpt"
                                            rows="4"
                                            class="mt-1 block w-full"
                                            placeholder="Write a short summary of the article..."
                                        />

                                        <p class="mt-2 text-xs text-gray-500">
                                            This summary will appear on article cards, previews and other Blog sections.
                                        </p>

                                        <p
                                            v-if="form.errors.excerpt"
                                            class="mt-1 text-sm text-red-600"
                                        >
                                            {{ form.errors.excerpt }}
                                        </p>

                                    </div>

                                </div>


                                <!-- Article Content -->

                                <div class="mt-8">

                                    <div class="mb-2">

                                        <InputLabel
                                            for="content"
                                            value="Article Content"
                                            required
                                        />

                                        <p class="mt-1 text-sm text-gray-500">
                                            Write and format the full article content below.
                                        </p>

                                    </div>

                                    <div class="border border-gray-300 rounded-lg overflow-hidden">

                                        <WysiwygEditor
                                            id="content"
                                            v-model="form.content"
                                        />

                                    </div>

                                    <p
                                        v-if="form.errors.content"
                                        class="mt-1 text-sm text-red-600"
                                    >
                                        {{ form.errors.content }}
                                    </p>

                                </div>


                                <!-- Actions -->

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
                                            {{ form.processing ? 'Saving...' : 'Save Article' }}
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