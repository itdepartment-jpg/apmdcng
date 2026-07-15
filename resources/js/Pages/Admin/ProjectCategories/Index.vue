<script setup lang="ts">
import { ref,computed } from 'vue';
import { Head, router, useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TextArea from '@/Components/TextArea.vue'; // Add this import
import {
    PencilIcon,
    PlusIcon,
    TrashIcon,
    ArrowPathIcon,
    XMarkIcon,
    DocumentTextIcon
} from '@heroicons/vue/24/outline';
import { ExclamationCircleIcon } from '@heroicons/vue/24/solid';
import Modal from '@/Components/Modal.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import DangerButton from '@/Components/DangerButton.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import Pagination from '@/Components/Pagination.vue';
import { useToast } from '@/Composables/useToast';

interface ProjectCategory {
    id: number;
    name: string;
    slug: string;
    description: string | null;
    projects_count?: number;
}

interface Props {
    categories: {
        data: ProjectCategory[];
        current_page: number;
        last_page: number;
        next_page_url: string | null;
        prev_page_url: string | null;
        links: any[];
    };
    canEdit: boolean;
}

const props = defineProps<Props>();
const { showSuccess, showError } = useToast();

// State management
const categories = ref(props.categories);
const showFormModal = ref(false);
const showDeleteModal = ref(false);
const categoryToDelete = ref<ProjectCategory | null>(null);
const categoryToEdit = ref<ProjectCategory | null>(null);
const isLoading = ref(false);

// Form handling
const createForm = useForm({
    name: '',
    description: '',
});

const editForm = useForm({
    name: '',
    description: '',
});

// Computed properties
const modalTitle = computed(() =>
    categoryToEdit.value ? 'Edit Category' : 'Create New Category'
);

const currentForm = computed(() =>
    categoryToEdit.value ? editForm : createForm
);

// Methods
const openFormModal = (category: ProjectCategory | null = null) => {
    categoryToEdit.value = category;

    if (category) {
        editForm.name = category.name;
        editForm.description = category.description || '';
    } else {
        createForm.reset();
    }

    showFormModal.value = true;
};

const closeFormModal = () => {
    showFormModal.value = false;
    if (categoryToEdit.value) {
        editForm.reset();
    } else {
        createForm.reset();
    }
    categoryToEdit.value = null;
};

const openDeleteModal = (category: ProjectCategory) => {
    categoryToDelete.value = category;
    showDeleteModal.value = true;
};

const closeDeleteModal = () => {
    showDeleteModal.value = false;
    categoryToDelete.value = null;
};

const storeCategory = async () => {
    try {
        isLoading.value = true;
        await createForm.post(route('project-categories.store'), {
            preserveScroll: true,
            onSuccess: () => {
                showSuccess('Project Category created successfully');
                closeFormModal();
                // Refresh projects data without full page reload
                router.visit(route('categories.index'), {
                    preserveState: true,
                    only: ['categories'],
                    onSuccess: () => {
                        categories.value = props.categories;
                    }
                });
            },
            onError: () => {
                showError('There was an error creating the category');
            },
        });
    } finally {
        isLoading.value = false;
    }
};

const updateCategory = async () => {
    if (!categoryToEdit.value) return;

    try {
        isLoading.value = true;
        await editForm.put(route('project-categories.update', categoryToEdit.value.id), {
            preserveScroll: true,
            onSuccess: () => {
                showSuccess('Project Category updated successfully');
                closeFormModal();
                // Refresh projects data without full page reload
                router.visit(route('categories.index'), {
                    preserveState: true,
                    only: ['categories'],
                    onSuccess: () => {
                        categories.value = props.categories;
                    }
                });
            },
            onError: () => {
                showError('There was an error updating the category');
            },
        });
    } finally {
        isLoading.value = false;
    }
};

const deleteCategory = async () => {
    if (!categoryToDelete.value) return;

    try {
        isLoading.value = true;
        await router.delete(route('project-categories.destroy', categoryToDelete.value.id), {
            preserveScroll: true,
            onSuccess: () => {
                showSuccess('Project Category deleted successfully');
                closeDeleteModal();
                // Refresh projects data without full page reload
                router.visit(route('categories.index'), {
                    preserveState: true,
                    only: ['categories'],
                    onSuccess: () => {
                        categories.value = props.categories;
                    }
                });
            },
            onError: () => {
                showError('There was an error deleting the category');
            },
        });
    } finally {
        isLoading.value = false;
    }
};

const loadPage = (url: string | null) => {
    if (!url) return;
    router.visit(url, {
        // preserveState: true,
        preserveScroll: true,
        onSuccess: () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        },
    });
};
</script>

<template>
    <Head title="Project Categories Management" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-2xl font-bold leading-tight text-gray-800">
                Project Categories Management
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <!-- Header with create button -->
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                            <div>
                                <h1 class="text-2xl font-bold text-gray-900">Project Categories</h1>
                                <p class="text-sm text-gray-500 mt-1">
                                    Manage categories for organizing projects
                                </p>
                            </div>
                            <PrimaryButton @click="openFormModal()" class="flex items-center gap-2">
                                <PlusIcon class="h-5 w-5" />
                                <span>New Category</span>
                            </PrimaryButton>
                        </div>

                        <!-- Empty state -->
                        <div v-if="categories.data.length === 0" class="border-2 border-dashed border-gray-200 rounded-lg p-8 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <DocumentTextIcon class="h-12 w-12 text-gray-400 mb-4" />
                                <h3 class="text-lg font-medium text-gray-900 mb-1">
                                    No categories yet
                                </h3>
                                <p class="text-sm text-gray-500 mb-4">
                                    Create categories to organize your projects
                                </p>
                                <PrimaryButton @click="openFormModal()" class="flex items-center gap-2">
                                    <PlusIcon class="h-5 w-5" />
                                    <span>New Category</span>
                                </PrimaryButton>
                            </div>
                        </div>

                        <!-- Categories table -->
                        <div v-else class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Projects
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Description
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="category in categories.data" :key="category.id">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ category.name }}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{ category.slug }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                            {{ category.projects_count || 0 }} projects
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500 line-clamp-2">
                                            {{ category.description || 'No description' }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end space-x-2">
                                            <button
                                                @click="openFormModal(category)"
                                                class="text-blue-600 hover:text-blue-900 p-1 rounded-md hover:bg-blue-50"
                                                title="Edit"
                                            >
                                                <PencilIcon class="h-5 w-5" />
                                            </button>
                                            <button
                                                @click="openDeleteModal(category)"
                                                class="text-red-600 hover:text-red-900 p-1 rounded-md hover:bg-red-50"
                                                title="Delete"
                                            >
                                                <TrashIcon class="h-5 w-5" />
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <!-- Pagination -->
                            <Pagination
                                :links="categories.links"
                                :current-page="categories.current_page"
                                :last-page="categories.last_page"
                                @page-changed="loadPage"
                                class="mt-6"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Create/Edit Modal -->
        <Modal :show="showFormModal" @close="closeFormModal" max-width="2xl">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-gray-900">
                        {{ modalTitle }}
                    </h3>
                    <button
                        @click="closeFormModal"
                        class="text-gray-400 hover:text-gray-500 focus:outline-none"
                    >
                        <XMarkIcon class="h-6 w-6" />
                    </button>
                </div>

                <form @submit.prevent="categoryToEdit ? updateCategory() : storeCategory()">
                    <div class="space-y-6">
                        <!-- Name -->
                        <div>
                            <InputLabel for="name" value="Name" required />
                            <TextInput
                                id="name"
                                v-model="currentForm.name"
                                type="text"
                                class="mt-1 block w-full"
                                :class="{ 'border-red-500': currentForm.errors.name }"
                                required
                            />
                            <p v-if="currentForm.errors.name" class="mt-1 text-sm text-red-600">
                                {{ currentForm.errors.name }}
                            </p>
                        </div>

                        <!-- Description -->
                        <div>
                            <InputLabel for="description" value="Description" />
                            <TextArea
                                id="description"
                                v-model="currentForm.description"
                                rows="3"
                                class="mt-1 block w-full"
                                :class="{ 'border-red-500': currentForm.errors.description }"
                            />
                            <p v-if="currentForm.errors.description" class="mt-1 text-sm text-red-600">
                                {{ currentForm.errors.description }}
                            </p>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="mt-6 flex justify-end space-x-3">
                        <SecondaryButton @click="closeFormModal" type="button">
                            Cancel
                        </SecondaryButton>
                        <PrimaryButton type="submit" :disabled="currentForm.processing">
                            <ArrowPathIcon v-if="currentForm.processing" class="h-4 w-4 animate-spin mr-2" />
                            {{ categoryToEdit ? 'Update' : 'Create' }} Category
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </Modal>

        <!-- Delete Confirmation Modal -->
        <Modal :show="showDeleteModal" @close="closeDeleteModal" max-width="md">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-gray-900">
                        Delete Category
                    </h3>
                    <button
                        @click="closeDeleteModal"
                        class="text-gray-400 hover:text-gray-500 focus:outline-none"
                    >
                        <XMarkIcon class="h-6 w-6" />
                    </button>
                </div>

                <div class="flex items-start">
                    <div class="mr-3 flex-shrink-0">
                        <ExclamationCircleIcon class="h-12 w-12 text-red-500" />
                    </div>
                    <div>
                        <h4 class="text-lg font-medium text-gray-900 mb-2">
                            Are you sure you want to delete this category?
                        </h4>
                        <p class="text-sm text-gray-500">
                            This action cannot be undone. Projects in this category will remain but will no longer be associated with it.
                        </p>
                        <p v-if="categoryToDelete" class="mt-2 font-medium">
                            "{{ categoryToDelete.name }}"
                        </p>
                        <p v-if="categoryToDelete?.projects_count" class="mt-1 text-sm text-red-600">
                            Contains {{ categoryToDelete.projects_count }} project(s)
                        </p>
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <SecondaryButton @click="closeDeleteModal" type="button">
                        Cancel
                    </SecondaryButton>
                    <DangerButton
                        @click="deleteCategory"
                        type="button"
                        :disabled="isLoading"
                    >
                        <ArrowPathIcon v-if="isLoading" class="h-4 w-4 animate-spin mr-2" />
                        Delete Category
                    </DangerButton>
                </div>
            </div>
        </Modal>
    </AuthenticatedLayout>
</template>
