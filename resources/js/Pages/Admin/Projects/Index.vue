<script setup lang="ts">
import {ref, computed, onMounted, } from 'vue';
import { Head, router, useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {
    CheckIcon,
    PencilIcon,
    PlusIcon,
    TrashIcon,
    ArrowPathIcon,
    ChevronLeftIcon,
    ChevronRightIcon,
    XMarkIcon,
    DocumentTextIcon
} from '@heroicons/vue/24/outline';
import { ExclamationCircleIcon } from '@heroicons/vue/24/solid';
import Modal from '@/Components/Modal.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import TextArea from '@/Components/TextArea.vue';
import SelectInput from '@/Components/SelectInput.vue';
import Checkbox from '@/Components/Checkbox.vue';
import DangerButton from '@/Components/DangerButton.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import Pagination from '@/Components/Pagination.vue';
import { useToast } from '@/Composables/useToast';
import WysiwygEditor from "@/Components/WysiwygEditor.vue";

interface Category {
    id: number;
    name: string;
}

interface Project {
    id: number;
    title: string;
    slug: string;
    description: string;
    full_description: string;
    location: string;
    client_name: string;
    contractor: string;
    scope_of_work: string;
    status: 'active' | 'completed' | 'upcoming' | 'archived';
    start_date: string;
    end_date: string | null;
    image_path: string;
    vessel_image_path: string | null;
    service_type: string | null;
    is_featured: boolean;
    categories: Category[];
    // categories: { id: number; name: string }[];
}

interface Props {
    projects: {
        data: Project[];
        current_page: number;
        last_page: number;
        next_page_url: string | null;
        prev_page_url: string | null;
        links: any[];
    };
    // categories: { id: number; name: string }[];
    categories: Category[];
    statusOptions: string[];
    canEdit: boolean;
}

const props = defineProps<Props>();
const { showSuccess, showError } = useToast();

// State management
const projects = ref(props.projects);
const showFormModal = ref(false);
const showDeleteModal = ref(false);
const projectToDelete = ref<Project | null>(null);
const projectToEdit = ref<Project | null>(null);
const isLoading = ref(false);
const imagePreview = ref<string | null>(null);
const vesselImagePreview = ref<string | null>(null);

// Form handling
const createForm = useForm({
    title: '',
    description: '',
    full_description: '',
    location: '',
    client_name: '',
    contractor: '',
    scope_of_work: '',
    status: 'active',
    start_date: new Date().toISOString().slice(0, 10),
    end_date: null as string | null,
    image: null as File | null,
    vessel_image: null as File | null,
    service_type: '',
    is_featured: false,
    categories: [] as number[],
});

const editForm = useForm({
    title: '',
    description: '',
    full_description: '',
    location: '',
    client_name: '',
    contractor: '',
    scope_of_work: '',
    status: 'active',
    start_date: new Date().toISOString().slice(0, 10),
    end_date: null as string | null,
    image: null as File | null,
    vessel_image: null as File | null,
    service_type: '',
    is_featured: false,
    categories: [] as number[],
});

// Computed properties
const modalTitle = computed(() =>
    projectToEdit.value ? 'Edit Project' : 'Create New Project'
);

const currentForm = computed(() =>
    projectToEdit.value ? editForm : createForm
);

const formattedDate = (dateString: string | null) => {
    if (!dateString) return '-';
    return new Date(dateString).toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'short',
        day: 'numeric',
    });
};

// Methods
const openFormModal = (project: Project | null = null) => {
    // Clear any existing errors
    if (projectToEdit.value) {
        editForm.clearErrors();
    } else {
        createForm.clearErrors();
    }

    projectToEdit.value = project;

    if (project) {
        editForm.title = project.title;
        editForm.description = project.description;
        editForm.full_description = project.full_description;
        editForm.location = project.location;
        editForm.client_name = project.client_name;
        editForm.contractor = project.contractor;
        editForm.scope_of_work = project.scope_of_work;
        editForm.status = project.status;
        editForm.start_date = project.start_date.slice(0, 10);
        editForm.end_date = project.end_date ? project.end_date.slice(0, 10) : null;
        editForm.service_type = project.service_type || '';
        editForm.is_featured = project.is_featured;
        editForm.categories = project.categories.map(c => c.id);
        imagePreview.value = project.image_path ? `/storage/${project.image_path}` : null;
        vesselImagePreview.value = project.vessel_image_path ? `/storage/${project.vessel_image_path}` : null;
    } else {
        createForm.reset();
        imagePreview.value = null;
        vesselImagePreview.value = null;
    }

    showFormModal.value = true;
};

const closeFormModal = () => {
    showFormModal.value = false;
    if (projectToEdit.value) {
        editForm.reset();
    } else {
        createForm.reset();
    }
    projectToEdit.value = null;
    imagePreview.value = null;
    vesselImagePreview.value = null;
};

const openDeleteModal = (project: Project) => {
    projectToDelete.value = project;
    showDeleteModal.value = true;
};

const closeDeleteModal = () => {
    showDeleteModal.value = false;
    projectToDelete.value = null;
};

const handleImageChange = (e: Event, type: 'main' | 'vessel' = 'main') => {
    const input = e.target as HTMLInputElement;
    const file = input?.files?.[0];
    const form = projectToEdit.value ? editForm : createForm;

    if (type === 'main') {
        if (file) {
            form.image = file;
            form.clearErrors('image');
            const reader = new FileReader();
            reader.onload = (e) => {
                imagePreview.value = e.target?.result as string;
            };
            reader.readAsDataURL(file);
        } else {
            form.image = null;
            imagePreview.value = null;
            input.value = '';
        }
    } else {
        if (file) {
            form.vessel_image = file;
            form.clearErrors('vessel_image');
            const reader = new FileReader();
            reader.onload = (e) => {
                vesselImagePreview.value = e.target?.result as string;
            };
            reader.readAsDataURL(file);
        } else {
            form.vessel_image = null;
            vesselImagePreview.value = null;
            input.value = '';
        }
    }
};

const validateForm = () => {
    let isValid = true;

    if (!currentForm.value.title) {
        currentForm.value.setError('title', 'The project title is required');
        isValid = false;
    }

    if (!currentForm.value.description) {
        currentForm.value.setError('description', 'A short description is required');
        isValid = false;
    }

    if (!currentForm.value.location) {
        currentForm.value.setError('location', 'The project location is required');
        isValid = false;
    }

    if (!currentForm.value.client_name) {
        currentForm.value.setError('client_name', 'The client name is required');
        isValid = false;
    }

    if (!currentForm.value.scope_of_work) {
        currentForm.value.setError('scope_of_work', 'The scope of work is required');
        isValid = false;
    }

    // Only validate image for new projects (not when editing)
    if (!projectToEdit.value && !currentForm.value.image) {
        currentForm.value.setError('image', 'The main image is required');
        isValid = false;
    }

    if (currentForm.value.categories.length === 0) {
        currentForm.value.setError('categories', 'Please select at least one category');
        isValid = false;
    }

    return isValid;
};

const handleSubmit = async () => {
    if (!validateForm()) {
        showError('Please fix the errors in the form');

        setTimeout(() => {
            const firstError = document.querySelector('.border-red-300, .border-red-500');
            if (firstError) {
                firstError.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }
        }, 100);
        return;
    }

    if (projectToEdit.value) {
        await updateProject();
    } else {
        await storeProject();
    }
};

const storeProject = async () => {
    try {
        isLoading.value = true;

        const formData = new FormData();
        formData.append('title', createForm.title);
        formData.append('description', createForm.description);
        formData.append('full_description', createForm.full_description || '');
        formData.append('location', createForm.location);
        formData.append('client_name', createForm.client_name);
        formData.append('contractor', createForm.contractor || '');
        formData.append('scope_of_work', createForm.scope_of_work);
        formData.append('status', createForm.status);
        formData.append('start_date', createForm.start_date);
        if (createForm.end_date) formData.append('end_date', createForm.end_date);
        if (createForm.image) formData.append('image', createForm.image);
        if (createForm.vessel_image) formData.append('vessel_image', createForm.vessel_image);
        formData.append('service_type', createForm.service_type || '');
        formData.append('is_featured', createForm.is_featured ? '1' : '0');
        createForm.categories.forEach(catId => formData.append('categories[]', catId.toString()));

        // console.log('start');

        await router.post(route('projects.store'), formData, {
            preserveScroll: true,
            onSuccess: () => {
                showSuccess('Project created successfully');
                closeFormModal();
                // Refresh projects data without full page reload
                router.visit(route('projects.index'), {
                    preserveState: true,
                    only: ['projects'],
                    onSuccess: () => {
                        projects.value = props.projects;
                    }
                });
            },
            onError: (errors) => {
                showError('Please fix the errors in the form');

                setTimeout(() => {
                    const firstError = document.querySelector('.border-red-300, .border-red-500');
                    if (firstError) {
                        firstError.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }
                }, 100);
            },
        });
    } finally {
        isLoading.value = false;
    }
};

const updateProject = async () => {
    if (!projectToEdit.value) return;

    try {
        isLoading.value = true;

        const formData = new FormData();
        formData.append('_method', 'PUT');
        formData.append('title', editForm.title);
        formData.append('description', editForm.description);
        formData.append('full_description', editForm.full_description || '');
        formData.append('location', editForm.location);
        formData.append('client_name', editForm.client_name);
        formData.append('contractor', editForm.contractor || '');
        formData.append('scope_of_work', editForm.scope_of_work);
        formData.append('status', editForm.status);
        formData.append('start_date', editForm.start_date);
        if (editForm.end_date) formData.append('end_date', editForm.end_date);
        if (editForm.image) formData.append('image', editForm.image);
        if (editForm.vessel_image) formData.append('vessel_image', editForm.vessel_image);
        formData.append('service_type', editForm.service_type || '');
        formData.append('is_featured', editForm.is_featured ? '1' : '0');
        editForm.categories.forEach(catId => formData.append('categories[]', catId.toString()));

        await router.post(route('projects.update', projectToEdit.value.id), formData, {
            preserveScroll: true,
            onSuccess: () => {
                showSuccess('Project updated successfully');
                closeFormModal();
                // Refresh projects data without full page reload
                router.visit(route('projects.index'), {
                    preserveState: true,
                    only: ['projects'],
                    onSuccess: () => {
                        projects.value = props.projects;
                    }
                });
            },
            onError: (errors) => {
                showError('Please fix the errors in the form');

                setTimeout(() => {
                    const firstError = document.querySelector('.border-red-300, .border-red-500');
                    if (firstError) {
                        firstError.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }
                }, 100);
            },
        });
    } finally {
        isLoading.value = false;
    }
};

const deleteProject = async () => {
    if (!projectToDelete.value) return;

    try {
        isLoading.value = true;
        await router.delete(route('projects.destroy', projectToDelete.value.id), {
            preserveScroll: true,
            onSuccess: () => {
                showSuccess('Project deleted successfully');
                closeDeleteModal();
                // Refresh projects data without full page reload
                router.visit(route('projects.index'), {
                    preserveState: true,
                    only: ['projects'],
                    onSuccess: () => {
                        projects.value = props.projects;
                    }
                });
            },
            onError: () => {
                showError('There was an error deleting the project');
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

const statusBadgeColor = (status: string) => {
    switch (status) {
        case 'active': return 'bg-green-100 text-green-800';
        case 'completed': return 'bg-blue-100 text-blue-800';
        case 'upcoming': return 'bg-yellow-100 text-yellow-800';
        case 'archived': return 'bg-gray-100 text-gray-800';
        default: return 'bg-gray-100 text-gray-800';
    }
};



const formattedEndDate = computed<string>({
    get() {
        return currentForm.value.end_date ?? ''; // Note the .value access
    },
    set(value: string) {
        currentForm.value.end_date = value;
    },
});


// In your <script setup> section
const handleCategoryCheck = (categoryId: number, checked: boolean) => {
    const newCategories = [...currentForm.value.categories];
    const index = newCategories.indexOf(categoryId);

    if (checked && index === -1) {
        newCategories.push(categoryId);
    } else if (!checked && index !== -1) {
        newCategories.splice(index, 1);
    }

    currentForm.value.categories = newCategories;
};

</script>

<template>
    <Head title="Projects Management" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-2xl font-bold leading-tight text-gray-800">
                Projects Management
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <!-- Header with create button -->
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                            <div>
                                <h1 class="text-2xl font-bold text-gray-900">Marine Projects</h1>
                                <p class="text-sm text-gray-500 mt-1">
                                    Manage all active and completed marine projects
                                </p>
                            </div>
                            <PrimaryButton @click="openFormModal()" class="flex items-center gap-2">
                                <PlusIcon class="h-5 w-5" />
                                <span>New Project</span>
                            </PrimaryButton>
                        </div>

                        <!-- Empty state -->
                        <div v-if="projects.data.length === 0" class="border-2 border-dashed border-gray-200 rounded-lg p-8 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <DocumentTextIcon class="h-12 w-12 text-gray-400 mb-4" />
                                <h3 class="text-lg font-medium text-gray-900 mb-1">
                                    No projects yet
                                </h3>
                                <p class="text-sm text-gray-500 mb-4">
                                    Get started by creating your first marine project
                                </p>
                                <PrimaryButton @click="openFormModal()" class="flex items-center gap-2">
                                    <PlusIcon class="h-5 w-5" />
                                    <span>New Project</span>
                                </PrimaryButton>
                            </div>
                        </div>

                        <!-- Projects table -->
                        <div v-else class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Project
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Client
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Timeline
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Categories
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="project in projects.data" :key="project.id">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-md object-cover"
                                                     :src="project.image_path ? `/storage/${project.image_path}` : '/images/default-project.png'"
                                                     :alt="project.title" />
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ project.title }}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{ project.location }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ project.client_name }}</div>
                                        <div v-if="project.contractor" class="text-sm text-gray-500">
                                            {{ project.contractor }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span :class="`px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${statusBadgeColor(project.status)}`">
                                            {{ project.status }}
                                        </span>
                                        <span v-if="project.is_featured" class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-purple-100 text-purple-800">
                                            <CheckIcon class="h-3 w-3 mr-1" />
                                            Featured
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            {{ formattedDate(project.start_date) }}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{ formattedDate(project.end_date) }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-wrap gap-1">
                                            <span v-for="category in project.categories"
                                                  :key="category.id"
                                                  class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-800">
                                                {{ category.name }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end space-x-2">
                                            <button
                                                @click="openFormModal(project)"
                                                class="text-blue-600 hover:text-blue-900 p-1 rounded-md hover:bg-blue-50"
                                                title="Edit"
                                            >
                                                <PencilIcon class="h-5 w-5" />
                                            </button>
                                            <button
                                                @click="openDeleteModal(project)"
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
                                :links="projects.links"
                                :current-page="projects.current_page"
                                :last-page="projects.last_page"
                                @page-changed="loadPage"
                                class="mt-6"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Create/Edit Modal -->
        <Modal :show="showFormModal" @close="closeFormModal" max-width="3xl">
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

                <form @submit.prevent="handleSubmit" enctype="multipart/form-data">
                    <!-- Error summary -->
                    <div v-if="Object.keys(currentForm.errors).length > 0" class="mb-4 p-4 bg-red-50 border-l-4 border-red-500">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <ExclamationCircleIcon class="h-5 w-5 text-red-500" />
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-red-800">
                                    There {{ Object.keys(currentForm.errors).length === 1 ? 'is' : 'are' }}
                                    {{ Object.keys(currentForm.errors).length }}
                                    error{{ Object.keys(currentForm.errors).length === 1 ? '' : 's' }}
                                    in your form
                                </h3>
                                <div class="mt-2 text-sm text-red-700">
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li v-for="(error, field) in currentForm.errors" :key="field">
                                            {{ error }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <!-- Title -->
                        <div>
                            <InputLabel for="title" value="Project Title" required />
                            <TextInput
                                id="title"
                                v-model="currentForm.title"
                                type="text"
                                class="mt-1 block w-full"
                                :class="{ 'border-red-500': currentForm.errors.title }"
                                required
                            />
                            <p v-if="currentForm.errors.title" class="mt-1 text-sm text-red-600">
                                {{ currentForm.errors.title }}
                            </p>
                        </div>

                        <!-- Description -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <InputLabel for="description" value="Short Description" required />
                                <WysiwygEditor
                                    id="description"
                                    v-model="currentForm.description"
                                    rows="3"
                                    class="mt-1 block w-full"
                                    :class="{ 'border-red-500': currentForm.errors.description }"
                                    required
                                />
                                <p v-if="currentForm.errors.description" class="mt-1 text-sm text-red-600">
                                    {{ currentForm.errors.description }}
                                </p>
                            </div>
                            <div>
                                <InputLabel for="full_description" value="Full Description" />
                                <WysiwygEditor
                                    id="full_description"
                                    v-model="currentForm.full_description"
                                    rows="3"
                                    class="mt-1 block w-full"
                                    :class="{ 'border-red-500': currentForm.errors.full_description }"
                                />
                                <p v-if="currentForm.errors.full_description" class="mt-1 text-sm text-red-600">
                                    {{ currentForm.errors.full_description }}
                                </p>
                            </div>
                        </div>

                        <!-- Location and Client Info -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <InputLabel for="location" value="Location" required />
                                <TextInput
                                    id="location"
                                    v-model="currentForm.location"
                                    type="text"
                                    class="mt-1 block w-full"
                                    :class="{ 'border-red-500': currentForm.errors.location }"
                                    required
                                />
                                <p v-if="currentForm.errors.location" class="mt-1 text-sm text-red-600">
                                    {{ currentForm.errors.location }}
                                </p>
                            </div>
                            <div>
                                <InputLabel for="client_name" value="Client Name" required />
                                <TextInput
                                    id="client_name"
                                    v-model="currentForm.client_name"
                                    type="text"
                                    class="mt-1 block w-full"
                                    :class="{ 'border-red-500': currentForm.errors.client_name }"
                                    required
                                />
                                <p v-if="currentForm.errors.client_name" class="mt-1 text-sm text-red-600">
                                    {{ currentForm.errors.client_name }}
                                </p>
                            </div>
                            <div>
                                <InputLabel for="contractor" value="Contractor" />
                                <TextInput
                                    id="contractor"
                                    v-model="currentForm.contractor"
                                    type="text"
                                    class="mt-1 block w-full"
                                    :class="{ 'border-red-500': currentForm.errors.contractor }"
                                />
                                <p v-if="currentForm.errors.contractor" class="mt-1 text-sm text-red-600">
                                    {{ currentForm.errors.contractor }}
                                </p>
                            </div>
                        </div>

                        <!-- Scope of Work -->
                        <div>
                            <InputLabel for="scope_of_work" value="Scope of Work" required />
                            <WysiwygEditor
                                id="scope_of_work"
                                v-model="currentForm.scope_of_work"
                                rows="3"
                                class="mt-1 block w-full "
                                :class="{ 'border-red-500': currentForm.errors.scope_of_work }"
                                required
                            />
                            <p v-if="currentForm.errors.scope_of_work" class="mt-1 text-sm text-red-600">
                                {{ currentForm.errors.scope_of_work }}
                            </p>
                        </div>

                        <!-- Status and Dates -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <InputLabel for="status" value="Status" required />
                                <SelectInput
                                    id="status"
                                    v-model="currentForm.status"
                                    class="mt-1 block w-full"
                                    :options="statusOptions"
                                    :class="{ 'border-red-500': currentForm.errors.status }"
                                    required
                                />
                                <p v-if="currentForm.errors.status" class="mt-1 text-sm text-red-600">
                                    {{ currentForm.errors.status }}
                                </p>
                            </div>
                            <div>
                                <InputLabel for="start_date" value="Start Date" required />
                                <TextInput
                                    id="start_date"
                                    v-model="currentForm.start_date"
                                    type="date"
                                    class="mt-1 block w-full"
                                    :class="{ 'border-red-500': currentForm.errors.start_date }"
                                    required
                                />
                                <p v-if="currentForm.errors.start_date" class="mt-1 text-sm text-red-600">
                                    {{ currentForm.errors.start_date }}
                                </p>
                            </div>
                            <div>
                                <InputLabel for="end_date" value="End Date (optional)" />
                                <TextInput
                                    id="end_date"
                                    v-model="formattedEndDate"
                                    type="date"
                                    class="mt-1 block w-full"
                                    :min="currentForm.start_date"
                                    :class="{ 'border-red-500': currentForm.errors.end_date }"
                                />
                                <p v-if="currentForm.errors.end_date" class="mt-1 text-sm text-red-600">
                                    {{ currentForm.errors.end_date }}
                                </p>
                            </div>
                        </div>

                        <!-- Service Type and Featured -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <InputLabel for="service_type" value="Service Type" />
                                <TextInput
                                    id="service_type"
                                    v-model="currentForm.service_type"
                                    type="text"
                                    class="mt-1 block w-full"
                                    :class="{ 'border-red-500': currentForm.errors.service_type }"
                                    placeholder="e.g., Diving, Security, Maintenance"
                                />
                                <p v-if="currentForm.errors.service_type" class="mt-1 text-sm text-red-600">
                                    {{ currentForm.errors.service_type }}
                                </p>
                            </div>
                            <div class="flex items-center">
                                <Checkbox
                                    v-model:checked="currentForm.is_featured"
                                    id="is_featured"
                                    class="mr-2"
                                />
                                <InputLabel for="is_featured" value="Featured Project" />
                            </div>
                        </div>

                        <!-- Categories -->
                        <div>
                            <InputLabel value="Categories" />
                            <div class="mt-2 grid grid-cols-2 md:grid-cols-4 gap-2">
                                <div v-for="category in categories" :key="category.id" class="flex items-center">
                                    <Checkbox
                                        :id="`category-${category.id}`"
                                        :checked="currentForm.categories.includes(category.id)"
                                        @update:checked="checked => handleCategoryCheck(category.id, checked)"
                                        class="mr-2"
                                    />
                                    <InputLabel :for="`category-${category.id}`" :value="category.name" />
                                </div>
                            </div>

                            <p v-if="currentForm.errors.categories" class="mt-1 text-sm text-red-600">
                                {{ currentForm.errors.categories }}
                            </p>
                        </div>

                        <!-- Image Uploads -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Main Project Image -->
                            <div>
                                <div class="flex justify-between items-center">
                                    <InputLabel for="image" value="Main Project Image" required />
                                    <span v-if="currentForm.errors.image" class="text-sm text-red-600">
                                        Required
                                    </span>
                                </div>
                                <div class="mt-1 flex items-center gap-4">
                                    <div class="flex-1">
                                        <input
                                            id="image"
                                            type="file"
                                            accept="image/*"
                                            @change="(e) => handleImageChange(e, 'main')"
                                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                                            :class="{
                                                'border-red-300': currentForm.errors.image,
                                                'border-gray-300': !currentForm.errors.image
                                            }"
                                        />
                                        <p class="mt-1 text-sm text-gray-500">
                                            JPEG, PNG or GIF (Max 2MB)
                                        </p>
                                        <p v-if="currentForm.errors.image" class="mt-1 text-sm text-red-600">
                                            {{ currentForm.errors.image }}
                                        </p>
                                    </div>
                                    <div v-if="imagePreview" class="flex-shrink-0">
                                        <img
                                            :src="imagePreview"
                                            class="h-16 w-16 rounded-md object-cover"
                                            alt="Preview"
                                        />
                                    </div>
                                </div>
                            </div>

                            <!-- Vessel Image -->
                            <div>
                                <InputLabel for="vessel_image" value="Vessel Image (optional)" />
                                <div class="mt-1 flex items-center gap-4">
                                    <div class="flex-1">
                                        <input
                                            id="vessel_image"
                                            type="file"
                                            accept="image/*"
                                            @change="(e) => handleImageChange(e, 'vessel')"
                                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                                            :class="{
                                                'border-red-300': currentForm.errors.vessel_image,
                                                'border-gray-300': !currentForm.errors.vessel_image
                                            }"
                                        />
                                        <p class="mt-1 text-sm text-gray-500">
                                            JPEG, PNG or GIF (Max 2MB)
                                        </p>
                                        <p v-if="currentForm.errors.vessel_image" class="mt-1 text-sm text-red-600">
                                            {{ currentForm.errors.vessel_image }}
                                        </p>
                                    </div>
                                    <div v-if="vesselImagePreview" class="flex-shrink-0">
                                        <img
                                            :src="vesselImagePreview"
                                            class="h-16 w-16 rounded-md object-cover"
                                            alt="Vessel Preview"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="mt-6 flex justify-end space-x-3">
                        <SecondaryButton @click="closeFormModal" type="button">
                            Cancel
                        </SecondaryButton>
                        <PrimaryButton type="submit" :disabled="currentForm.processing">
                            <ArrowPathIcon v-if="currentForm.processing" class="h-4 w-4 animate-spin mr-2" />
                            {{ projectToEdit ? 'Update' : 'Create' }} Project
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
                        Delete Project
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
                            Are you sure you want to delete this project?
                        </h4>
                        <p class="text-sm text-gray-500">
                            This action cannot be undone. All data associated with this project will be permanently removed.
                        </p>
                        <p v-if="projectToDelete" class="mt-2 font-medium">
                            "{{ projectToDelete.title }}"
                        </p>
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <SecondaryButton @click="closeDeleteModal" type="button">
                        Cancel
                    </SecondaryButton>
                    <DangerButton
                        @click="deleteProject"
                        type="button"
                        :disabled="isLoading"
                    >
                        <ArrowPathIcon v-if="isLoading" class="h-4 w-4 animate-spin mr-2" />
                        Delete Project
                    </DangerButton>
                </div>
            </div>
        </Modal>
    </AuthenticatedLayout>
</template>
