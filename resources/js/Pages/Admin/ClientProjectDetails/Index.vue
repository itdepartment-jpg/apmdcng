<script setup lang="ts">
import { ref, computed } from 'vue';
import { Head, router, useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {
    PencilIcon,
    PlusIcon,
    TrashIcon,
    ArrowPathIcon,
    XMarkIcon,
    DocumentTextIcon,
    CheckIcon
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

interface ClientProjectDetail {
    id: number;
    client: string;
    main_contractor: string;
    location_project: string;
    description_of_work: string;
    commencement_date: string;
    status: 'active' | 'inactive';
}

interface Props {
    projects: {
        data: ClientProjectDetail[];
        current_page: number;
        last_page: number;
        links: any[];
    };
    canEdit: boolean;
}

const props = defineProps<Props>();
const { showSuccess, showError } = useToast();

// State management
const projects = ref(props.projects);
const showFormModal = ref(false);
const showDeleteModal = ref(false);
const projectToDelete = ref<ClientProjectDetail | null>(null);
const projectToEdit = ref<ClientProjectDetail | null>(null);
const isLoading = ref(false);

// Form handling
const createForm = useForm({
    client: '',
    main_contractor: '',
    location_project: '',
    description_of_work: '',
    commencement_date: new Date().toISOString().slice(0, 10),
    status: 'active' as 'active' | 'inactive',
});

const editForm = useForm({
    client: '',
    main_contractor: '',
    location_project: '',
    description_of_work: '',
    commencement_date: '',
    status: 'active' as 'active' | 'inactive',
});

// Computed properties
const modalTitle = computed(() =>
    projectToEdit.value ? 'Edit Project' : 'Create New Project'
);

const currentForm = computed(() =>
    projectToEdit.value ? editForm : createForm
);

const formattedDate = (dateString: string) => {
    return new Date(dateString).toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'short',
        day: 'numeric',
    });
};

// Methods
const openFormModal = (project: ClientProjectDetail | null = null) => {
    projectToEdit.value = project;

    if (project) {
        editForm.client = project.client;
        editForm.main_contractor = project.main_contractor;
        editForm.location_project = project.location_project;
        editForm.description_of_work = project.description_of_work;
        editForm.commencement_date = project.commencement_date.slice(0, 10);
        editForm.status = project.status;
    } else {
        createForm.reset();
    }

    showFormModal.value = true;
};

const closeFormModal = () => {
    showFormModal.value = false;
    projectToEdit.value = null;
};

const openDeleteModal = (project: ClientProjectDetail) => {
    projectToDelete.value = project;
    showDeleteModal.value = true;
};

const closeDeleteModal = () => {
    showDeleteModal.value = false;
    projectToDelete.value = null;
};

const storeProject = async () => {
    try {
        isLoading.value = true;
        await createForm.post(route('client-project-details.store'), {
            preserveScroll: true,
            onSuccess: () => {
                showSuccess('Project created successfully');
                closeFormModal();
                router.visit(route('client-project-details.index'), {
                    preserveState: true,
                    only: ['projects'],
                    onSuccess: () => {
                        projects.value = props.projects;
                    }
                });
            },
            onError: (errors) => {
                showError('There was an error creating the project');
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
        await editForm.put(route('client-project-details.update', projectToEdit.value.id), {
            preserveScroll: true,
            onSuccess: () => {
                showSuccess('Project updated successfully');
                closeFormModal();
                router.visit(route('client-project-details.index'), {
                    preserveState: true,
                    only: ['projects'],
                    onSuccess: () => {
                        projects.value = props.projects;
                    }
                });
            },
            onError: (errors) => {
                showError('There was an error updating the project');
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
        await router.delete(route('client-project-details.destroy', projectToDelete.value.id), {
            preserveScroll: true,
            onSuccess: () => {
                showSuccess('Project deleted successfully');
                closeDeleteModal();
                router.visit(route('client-project-details.index'), {
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
        preserveScroll: true,
        onSuccess: () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        },
    });
};

const toggleStatus = async (project: ClientProjectDetail) => {
    try {
        await router.put(route('client-project-details.toggle-status', project.id), {}, {
            preserveScroll: true,
            onSuccess: () => {
                showSuccess('Status updated successfully');
                router.visit(route('client-project-details.index'), {
                    preserveState: true,
                    only: ['projects'],
                });
            },
            onError: () => {
                showError('Failed to update status');
            },
        });
    } catch (error) {
        showError('An error occurred');
    }
};

</script>

<template>
    <Head title="Client Project Management" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-2xl font-bold leading-tight text-gray-800">
                Client Project Management
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <!-- Header with create button -->
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                            <div>
                                <h1 class="text-2xl font-bold text-gray-900">Client Projects</h1>
                                <p class="text-sm text-gray-500 mt-1">
                                    Manage all client projects and their details
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
                                    Get started by creating your first client project
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
                                        Client
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Location
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Contractor
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Date
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="project in projects.data" :key="project.id">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ project.client }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            {{ project.location_project }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            {{ project.main_contractor }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ formattedDate(project.commencement_date) }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button
                                            @click="toggleStatus(project)"
                                            :class="{
                                                'bg-green-100 text-green-800': project.status === 'active',
                                                'bg-red-100 text-red-800': project.status === 'inactive'
                                            }"
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full cursor-pointer"
                                        >
                                            {{ project.status === 'active' ? 'Active' : 'Inactive' }}
                                        </button>
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

                <form @submit.prevent="projectToEdit ? updateProject() : storeProject()">
                    <div class="space-y-6">
                        <!-- Client -->
                        <div>
                            <InputLabel for="client" value="Client" required />
                            <TextInput
                                id="client"
                                v-model="currentForm.client"
                                type="text"
                                class="mt-1 block w-full"
                                :class="{ 'border-red-500': currentForm.errors.client }"
                                required
                            />
                            <p v-if="currentForm.errors.client" class="mt-1 text-sm text-red-600">
                                {{ currentForm.errors.client }}
                            </p>
                        </div>

                        <!-- Main Contractor -->
                        <div>
                            <InputLabel for="main_contractor" value="Main Contractor" required />
                            <TextInput
                                id="main_contractor"
                                v-model="currentForm.main_contractor"
                                type="text"
                                class="mt-1 block w-full"
                                :class="{ 'border-red-500': currentForm.errors.main_contractor }"
                                required
                            />
                            <p v-if="currentForm.errors.main_contractor" class="mt-1 text-sm text-red-600">
                                {{ currentForm.errors.main_contractor }}
                            </p>
                        </div>

                        <!-- Location/Project -->
                        <div>
                            <InputLabel for="location_project" value="Location/Project" required />
                            <TextInput
                                id="location_project"
                                v-model="currentForm.location_project"
                                type="text"
                                class="mt-1 block w-full"
                                :class="{ 'border-red-500': currentForm.errors.location_project }"
                                required
                            />
                            <p v-if="currentForm.errors.location_project" class="mt-1 text-sm text-red-600">
                                {{ currentForm.errors.location_project }}
                            </p>
                        </div>

                        <!-- Description of Work -->
                        <div>
                            <InputLabel for="description_of_work" value="Description of Work" required />
                            <TextArea
                                id="description_of_work"
                                v-model="currentForm.description_of_work"
                                rows="4"
                                class="mt-1 block w-full"
                                :class="{ 'border-red-500': currentForm.errors.description_of_work }"
                                required
                            />
                            <p v-if="currentForm.errors.description_of_work" class="mt-1 text-sm text-red-600">
                                {{ currentForm.errors.description_of_work }}
                            </p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Commencement Date -->
                            <div>
                                <InputLabel for="commencement_date" value="Commencement Date" required />
                                <TextInput
                                    id="commencement_date"
                                    v-model="currentForm.commencement_date"
                                    type="date"
                                    class="mt-1 block w-full"
                                    :class="{ 'border-red-500': currentForm.errors.commencement_date }"
                                    required
                                />
                                <p v-if="currentForm.errors.commencement_date" class="mt-1 text-sm text-red-600">
                                    {{ currentForm.errors.commencement_date }}
                                </p>
                            </div>

                            <!-- Status -->
                            <div>
                                <InputLabel for="status" value="Status" required />
                                <SelectInput
                                    id="status"
                                    v-model="currentForm.status"
                                    class="mt-1 block w-full"
                                    :options="['active', 'inactive']"
                                    :class="{ 'border-red-500': currentForm.errors.status }"
                                    required
                                />


                                <p v-if="currentForm.errors.status" class="mt-1 text-sm text-red-600">
                                    {{ currentForm.errors.status }}
                                </p>
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
                            "{{ projectToDelete.client }} - {{ projectToDelete.location_project }}"
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
