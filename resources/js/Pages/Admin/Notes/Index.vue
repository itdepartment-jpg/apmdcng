<script setup lang="ts">
import { Head, router, useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {
    PlusIcon,
    TrashIcon,
    PencilIcon,
    XMarkIcon,
    ArrowPathIcon,
    MagnifyingGlassIcon,
    DocumentTextIcon,
    MapPinIcon,
    CalendarIcon,
    ClockIcon,
    CheckCircleIcon
} from '@heroicons/vue/24/outline';
import { ExclamationCircleIcon } from '@heroicons/vue/24/solid';
import Modal from '@/Components/Modal.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import { ref, computed, onMounted } from 'vue';

import WysiwygEditor from '@/Components/WysiwygEditor.vue';

interface Note {
    id: number;
    title: string;
    location: string | null;
    content: string | null;
    created_at: string;
    updated_at: string;
}

interface Props {
    notes: Note[];
}

const props = defineProps<Props>();

// State
const showNoteModal = ref(false);
const modalMode = ref<'create' | 'edit'>('create');
const currentNote = ref<Note | null>(null);
const showDeleteModal = ref(false);
const noteToDelete = ref<Note | null>(null);
const searchQuery = ref('');
const selectedNote = ref<Note | null>(null);

// Form
const noteForm = useForm({
    title: '',
    location: '',
    content: ''
});

// Computed properties
const filteredNotes = computed(() => {
    if (!searchQuery.value) return props.notes;
    return props.notes.filter(note =>
        note.title.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
        (note.content && note.content.toLowerCase().includes(searchQuery.value.toLowerCase())) ||
        (note.location && note.location.toLowerCase().includes(searchQuery.value.toLowerCase()))
    );
});

const modalTitle = computed(() =>
    modalMode.value === 'create' ? 'Create New Operational Note' : 'Edit Operational Note'
);

// Methods
const openCreateModal = () => {
    modalMode.value = 'create';
    noteForm.reset();
    currentNote.value = null;
    showNoteModal.value = true;
};

const openEditModal = (note: Note) => {
    modalMode.value = 'edit';
    currentNote.value = note;
    noteForm.title = note.title;
    noteForm.location = note.location || '';
    noteForm.content = note.content || '';
    showNoteModal.value = true;
};

const closeNoteModal = () => {
    showNoteModal.value = false;
};

const openDeleteModal = (note: Note) => {
    noteToDelete.value = note;
    showDeleteModal.value = true;
};

const closeDeleteModal = () => {
    showDeleteModal.value = false;
    noteToDelete.value = null;
};

const submitNote = () => {
    if (modalMode.value === 'create') {
        noteForm.post(route('notes.store'), {
            preserveScroll: true,
            onSuccess: () => {
                closeNoteModal();
                if (props.notes.length > 0) {
                    selectedNote.value = props.notes[0];
                }
            },
            onError: () => {
                // Error handling
            },
        });
    } else {
        if (!currentNote.value) return;

        noteForm.put(route('notes.update', currentNote.value.id), {
            preserveScroll: true,
            onSuccess: () => {
                closeNoteModal();
            },
            onError: () => {
                // Error handling
            },
        });
    }
};

const deleteNote = () => {
    if (!noteToDelete.value) return;

    router.delete(route('notes.destroy', noteToDelete.value.id), {
        preserveScroll: true,
        onSuccess: () => {
            closeDeleteModal();
            selectedNote.value = null;
        },
        onError: () => {
            // Error handling
        },
    });
};

const selectNote = (note: Note) => {
    selectedNote.value = note;
};

const formatDate = (dateString: string) => {
    return new Date(dateString).toLocaleDateString();
};

const formatDateTime = (dateString: string) => {
    return new Date(dateString).toLocaleString();
};

const truncateContent = (content: string | null) => {
    if (!content) return 'No content';
    const cleanContent = content.replace(/<[^>]*>/g, '');
    return cleanContent.length > 100
        ? cleanContent.substring(0, 100) + '...'
        : cleanContent;
};

// Auto-select first note
onMounted(() => {
    if (props.notes.length > 0 && !selectedNote.value) {
        selectedNote.value = props.notes[0];
    }
});
</script>

<template>
    <Head title="Operational Notes - APMDC" />

    <AuthenticatedLayout>
        <div class="h-screen bg-gradient-to-br from-gray-50 to-blue-50/30 flex flex-col">
            <!-- Header -->
            <div class="bg-white border-b border-gray-200 px-6 py-4 shadow-sm">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-2xl font-bold text-[#303791] font-poppins">Operational Notes</h1>
                        <p class="text-sm text-gray-500">Maritime operations documentation and records</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="hidden md:flex items-center px-3 py-1 bg-[#EA222F]/10 rounded-full border border-[#EA222F]/20">
                            <div class="w-2 h-2 bg-[#EA222F] rounded-full mr-2"></div>
                            <span class="text-xs text-[#303791] font-medium">APMDC System</span>
                        </div>
                        <PrimaryButton
                            @click="openCreateModal"
                            class="flex items-center gap-2 bg-gradient-to-r from-[#303791] to-[#EA222F] hover:from-[#2a317d] hover:to-[#d11a26] border-0 shadow-lg"
                        >
                            <PlusIcon class="h-5 w-5" />
                            New Operational Note
                        </PrimaryButton>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex flex-1 overflow-hidden">
                <!-- Left Sidebar - Notes List -->
                <div class="w-96 bg-white border-r border-gray-200 flex flex-col shadow-sm">
                    <!-- Search -->
                    <div class="p-4 border-b border-gray-200 bg-gradient-to-r from-[#303791]/5 to-[#EA222F]/5">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <MagnifyingGlassIcon class="h-5 w-5 text-[#EA222F]" />
                            </div>
                            <TextInput
                                v-model="searchQuery"
                                type="text"
                                class="pl-10 w-full border-[#EA222F]/20 focus:border-[#EA222F] focus:ring-[#EA222F]/20"
                                placeholder="Search operational notes..."
                            />
                        </div>
                    </div>

                    <!-- Notes List -->
                    <div class="flex-1 overflow-y-auto">
                        <div v-if="filteredNotes.length === 0" class="p-8 text-center text-gray-500">
                            <DocumentTextIcon class="h-12 w-12 mx-auto text-gray-300 mb-4" />
                            <p class="text-[#303791] font-medium">No operational notes found</p>
                            <p class="text-sm text-gray-500 mt-1">Create your first note to get started</p>
                        </div>

                        <div v-else class="divide-y divide-gray-200">
                            <div
                                v-for="note in filteredNotes"
                                :key="note.id"
                                @click="selectNote(note)"
                                :class="[
                                    'p-4 cursor-pointer hover:bg-gray-50 transition-all duration-200 border-l-4',
                                    selectedNote?.id === note.id
                                        ? 'bg-[#EA222F]/5 border-[#EA222F] shadow-sm'
                                        : 'bg-white border-transparent hover:border-[#303791]/20'
                                ]"
                            >
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="font-semibold text-[#303791] text-sm line-clamp-1">
                                        {{ note.title }}
                                    </h3>
                                    <div class="flex items-center gap-1">
                                        <button
                                            @click.stop="openEditModal(note)"
                                            class="p-1 text-gray-400 hover:text-[#303791] hover:bg-[#303791]/10 rounded transition-colors"
                                        >
                                            <PencilIcon class="h-4 w-4" />
                                        </button>
                                        <button
                                            @click.stop="openDeleteModal(note)"
                                            class="p-1 text-gray-400 hover:text-[#EA222F] hover:bg-[#EA222F]/10 rounded transition-colors"
                                        >
                                            <TrashIcon class="h-4 w-4" />
                                        </button>
                                    </div>
                                </div>

                                <p class="text-gray-600 text-sm mb-2 line-clamp-2">
                                    {{ truncateContent(note.content) }}
                                </p>

                                <div class="flex items-center justify-between text-xs text-gray-400">
                                    <span class="flex items-center gap-1">
                                        <CalendarIcon class="h-3 w-3" />
                                        {{ formatDate(note.updated_at) }}
                                    </span>
                                    <span v-if="note.location" class="flex items-center gap-1 bg-[#303791]/10 text-[#303791] px-2 py-1 rounded-full">
                                        <MapPinIcon class="h-3 w-3" />
                                        {{ note.location }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Panel - Note Content -->
                <div class="flex-1 bg-white overflow-y-auto">
                    <div v-if="selectedNote" class="max-w-4xl mx-auto p-6">
                        <!-- Note Header -->
                        <div class="bg-gradient-to-r from-[#303791]/5 to-[#EA222F]/5 rounded-lg p-6 mb-6 border border-[#EA222F]/10">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h2 class="text-2xl font-bold text-[#303791] mb-2 font-poppins">
                                        {{ selectedNote.title }}
                                    </h2>
                                    <div class="flex items-center gap-4 text-sm text-gray-500 flex-wrap">
                                        <span class="flex items-center gap-1 bg-white px-3 py-1 rounded-full border border-gray-200">
                                            <CalendarIcon class="h-4 w-4" />
                                            Created: {{ formatDateTime(selectedNote.created_at) }}
                                        </span>
                                        <span class="flex items-center gap-1 bg-white px-3 py-1 rounded-full border border-gray-200">
                                            <ClockIcon class="h-4 w-4" />
                                            Updated: {{ formatDateTime(selectedNote.updated_at) }}
                                        </span>
                                        <span v-if="selectedNote.location" class="flex items-center gap-1 bg-[#303791] text-white px-3 py-1 rounded-full">
                                            <MapPinIcon class="h-4 w-4" />
                                            {{ selectedNote.location }}
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button
                                        @click="openEditModal(selectedNote)"
                                        class="p-2 text-gray-400 hover:text-[#303791] hover:bg-[#303791]/10 rounded-lg transition-colors"
                                    >
                                        <PencilIcon class="h-5 w-5" />
                                    </button>
                                    <button
                                        @click="openDeleteModal(selectedNote)"
                                        class="p-2 text-gray-400 hover:text-[#EA222F] hover:bg-[#EA222F]/10 rounded-lg transition-colors"
                                    >
                                        <TrashIcon class="h-5 w-5" />
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Note Content -->
                        <div class="prose max-w-none">
                            <div
                                v-if="selectedNote.content"
                                v-html="selectedNote.content"
                                class="text-gray-700 bg-white p-6 rounded-lg border border-gray-200"
                            ></div>
                            <div v-else class="text-center text-gray-500 py-12 bg-gray-50 rounded-lg border-2 border-dashed border-gray-300">
                                <DocumentTextIcon class="h-16 w-16 mx-auto text-gray-300 mb-4" />
                                <h3 class="text-lg font-medium text-[#303791] mb-2">No content available</h3>
                                <p class="text-gray-500">This operational note doesn't have any content yet.</p>
                            </div>
                        </div>
                    </div>

                    <div v-else class="flex items-center justify-center h-full">
                        <div class="text-center text-gray-500">
                            <div class="bg-gradient-to-r from-[#303791]/10 to-[#EA222F]/10 p-8 rounded-2xl mb-6 inline-block">
                                <DocumentTextIcon class="h-20 w-20 mx-auto text-[#303791] mb-4" />
                            </div>
                            <h3 class="text-xl font-medium text-[#303791] mb-2 font-poppins">Select an Operational Note</h3>
                            <p class="text-gray-500 max-w-md">Choose a note from the list to view maritime operations documentation and records</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Create/Edit Note Modal -->
        <Modal :show="showNoteModal" @close="closeNoteModal" max-width="4xl">
            <div class="p-6 bg-gradient-to-br from-white to-gray-50/50">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h3 class="text-xl font-bold text-[#303791] font-poppins">
                            {{ modalTitle }}
                        </h3>
                        <p class="text-sm text-gray-500 mt-1">Maritime operations documentation</p>
                    </div>
                    <button
                        @click="closeNoteModal"
                        class="text-gray-400 hover:text-[#EA222F] rounded-full p-2 hover:bg-[#EA222F]/10 transition-colors"
                    >
                        <XMarkIcon class="h-5 w-5" />
                    </button>
                </div>

                <form @submit.prevent="submitNote">
                    <div class="space-y-6">
                        <!-- Title -->
                        <div>
                            <InputLabel for="title" value="Note Title" required class="text-[#303791] font-medium" />
                            <TextInput
                                id="title"
                                v-model="noteForm.title"
                                type="text"
                                class="mt-2 block w-full border-[#EA222F]/20 focus:border-[#EA222F] focus:ring-[#EA222F]/20"
                                :class="{ 'border-[#EA222F]': noteForm.errors.title }"
                                placeholder="Enter operational note title..."
                                required
                                autofocus
                            />
                            <p v-if="noteForm.errors.title" class="mt-2 text-sm text-[#EA222F] flex items-center gap-1">
                                <ExclamationCircleIcon class="h-4 w-4" />
                                {{ noteForm.errors.title }}
                            </p>
                        </div>

                        <!-- Location/Department -->
                        <div>
                            <InputLabel for="location" value="Department / Port Location" class="text-[#303791] font-medium" />
                            <select
                                id="location"
                                v-model="noteForm.location"
                                class="mt-2 block w-full rounded-md border-[#EA222F]/20 focus:border-[#EA222F] focus:ring-[#EA222F]/20 shadow-sm"
                                :class="{ 'border-[#EA222F]': noteForm.errors.location }"
                            >
                                <option value="" disabled selected>Select department or port</option>
                                <option value="Lagos Port">Lagos Port Operations</option>
                                <option value="Port Harcourt">Port Harcourt Operations</option>
                                <option value="Warri Port">Warri Port Operations</option>
                                <option value="Calabar Port">Calabar Port Operations</option>
                                <option value="Onne Port">Onne Port Operations</option>
                                <option value="Head Office">Head Office - Administration</option>
                                <option value="Marine Operations">Marine Operations</option>
                                <option value="Logistics">Logistics Department</option>
                                <option value="Customs Clearance">Customs Clearance</option>
                                <option value="Vessel Support">Vessel Support Services</option>
                            </select>
                            <p v-if="noteForm.errors.location" class="mt-2 text-sm text-[#EA222F] flex items-center gap-1">
                                <ExclamationCircleIcon class="h-4 w-4" />
                                {{ noteForm.errors.location }}
                            </p>
                        </div>

                        <!-- Content -->
                        <div>
                            <InputLabel for="content" value="Operational Details" class="text-[#303791] font-medium" />
                            <WysiwygEditor
                                id="content"
                                v-model="noteForm.content"
                                class="mt-2 block w-full border-[#EA222F]/20 focus:border-[#EA222F] focus:ring-[#EA222F]/20 rounded-md"
                                :class="{ 'border-[#EA222F]': noteForm.errors.content }"
                                placeholder="Document maritime operations, vessel details, logistics information..."
                            />
                            <p v-if="noteForm.errors.content" class="mt-2 text-sm text-[#EA222F] flex items-center gap-1">
                                <ExclamationCircleIcon class="h-4 w-4" />
                                {{ noteForm.errors.content }}
                            </p>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="mt-8 flex justify-end space-x-3 pt-6 border-t border-gray-200">
                        <SecondaryButton
                            @click="closeNoteModal"
                            type="button"
                            class="border-[#303791]/20 text-[#303791] hover:bg-[#303791]/10"
                        >
                            Cancel
                        </SecondaryButton>
                        <PrimaryButton
                            type="submit"
                            :disabled="noteForm.processing"
                            class="bg-gradient-to-r from-[#303791] to-[#EA222F] hover:from-[#2a317d] hover:to-[#d11a26] border-0 shadow-lg"
                        >
                            <ArrowPathIcon v-if="noteForm.processing" class="h-4 w-4 animate-spin mr-2" />
                            {{ modalMode === 'create' ? 'Create Operational Note' : 'Update Operational Note' }}
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </Modal>

        <!-- Delete Confirmation Modal -->
        <Modal :show="showDeleteModal" @close="closeDeleteModal" max-width="md">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-[#303791] font-poppins">
                        Delete Operational Note
                    </h3>
                    <button
                        @click="closeDeleteModal"
                        class="text-gray-400 hover:text-[#EA222F] rounded-full p-2 hover:bg-[#EA222F]/10 transition-colors"
                    >
                        <XMarkIcon class="h-5 w-5" />
                    </button>
                </div>

                <div class="flex items-start">
                    <div class="mr-4 flex-shrink-0">
                        <div class="bg-[#EA222F]/10 p-3 rounded-full">
                            <ExclamationCircleIcon class="h-8 w-8 text-[#EA222F]" />
                        </div>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">
                            Confirm Deletion
                        </h4>
                        <p class="text-sm text-gray-500 mb-3">
                            This action cannot be undone. All operational documentation will be permanently removed from the system.
                        </p>
                        <p v-if="noteToDelete" class="font-medium text-[#303791] bg-[#303791]/5 p-3 rounded-lg border border-[#303791]/10">
                            "{{ noteToDelete.title }}"
                        </p>
                    </div>
                </div>

                <div class="mt-8 flex justify-end space-x-3 pt-6 border-t border-gray-200">
                    <SecondaryButton
                        @click="closeDeleteModal"
                        type="button"
                        class="border-[#303791]/20 text-[#303791] hover:bg-[#303791]/10"
                    >
                        Cancel
                    </SecondaryButton>
                    <DangerButton
                        @click="deleteNote"
                        type="button"
                        :disabled="noteForm.processing"
                        class="bg-[#EA222F] hover:bg-[#d11a26] border-0 shadow-lg"
                    >
                        <ArrowPathIcon v-if="noteForm.processing" class="h-4 w-4 animate-spin mr-2" />
                        Delete Operational Note
                    </DangerButton>
                </div>
            </div>
        </Modal>
    </AuthenticatedLayout>
</template>

<style scoped>
.line-clamp-1 {
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 1;
}

.line-clamp-2 {
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}

.prose {
    max-width: none;
}

.prose h1 {
    @apply text-2xl font-bold text-[#303791] mb-4 ;
}

.prose h2 {
    @apply text-xl font-semibold text-[#303791] mb-3;
}

.prose h3 {
    @apply text-lg font-medium text-[#303791] mb-2 ;
}

.prose p {
    @apply text-gray-700 mb-4 leading-relaxed;
}

.prose ul, .prose ol {
    @apply mb-4 pl-6;
}

.prose li {
    @apply mb-2 text-gray-700;
}

.prose strong {
    @apply text-[#303791] font-semibold;
}

/* Custom scrollbar for notes list */
.overflow-y-auto::-webkit-scrollbar {
    width: 6px;
}

.overflow-y-auto::-webkit-scrollbar-track {
    background: #f1f5f9;
}

.overflow-y-auto::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 3px;
}

.overflow-y-auto::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}

/* Smooth transitions */
.bg-gradient-to-r, .bg-gradient-to-b, .bg-gradient-to-br {
    transition: all 0.3s ease-in-out;
}

/* Hover effects */
.hover\:bg-\[\#303791\]\/10:hover {
    background-color: rgba(48, 55, 145, 0.1);
}

.hover\:bg-\[\#EA222F\]\/10:hover {
    background-color: rgba(234, 34, 47, 0.1);
}
</style>
