<template>


    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Leadership
            </h2>
        </template>

        <div class="py-12">



            <section class="py-16 bg-white">
                <div class="container mx-auto px-6 lg:px-12">
                    <!-- Editable Header -->
                    <div class="text-center mb-16">
                        <div v-if="!editingHeader">
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 uppercase mb-4">
                                <span class="border-b-4 border-[#FFC107] pb-2">{{ header.title }}</span>
                            </h2>
                            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                                {{ header.description }}
                            </p>
                            <button
                                v-if="canEdit"
                                @click="startEditingHeader"
                                class="mt-4 text-blue-600 hover:text-blue-800 flex items-center justify-center mx-auto"
                            >
                                <PencilIcon class="h-5 w-5 mr-1" /> Edit Header
                            </button>
                        </div>

                        <div v-else class="max-w-3xl mx-auto">
                            <input
                                v-model="headerForm.title"
                                class="w-full text-3xl md:text-4xl font-bold text-gray-800 mb-4 p-2 border rounded text-center"
                            >
                            <textarea
                                v-model="headerForm.description"
                                class="w-full text-lg text-gray-600 p-2 border rounded"
                                rows="3"
                            ></textarea>


                            <div class="flex justify-center space-x-4 mt-4">
                                <button
                                    @click="updateHeader"
                                    class="px-4 py-2 bg-green-600 text-white rounded flex items-center"
                                    :disabled="headerForm.processing"
                                >
                                    <CheckIcon class="h-5 w-5 mr-1" /> Save
                                </button>
                                <button
                                    @click="cancelEditingHeader"
                                    class="px-4 py-2 bg-gray-600 text-white rounded flex items-center"
                                >

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 mr-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>

                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Category Tabs -->
                    <div class="flex justify-center mb-8 border-b border-gray-200">
                        <button
                            v-for="tab in tabs"
                            :key="tab.id"
                            @click="activeTab = tab.id"
                            :class="[
            'px-4 py-2 font-medium',
            activeTab === tab.id
              ? 'text-[#0077B6] border-b-2 border-[#0077B6]'
              : 'text-gray-500 hover:text-[#0077B6]'
          ]"
                        >
                            {{ tab.label }}
                        </button>
                    </div>

                    <!-- Add New Member Button -->
                    <div v-if="canEdit" class="flex justify-end mb-6">
                        <button
                            @click="openAddMemberForm"
                            class="px-4 py-2 bg-blue-600 text-white rounded-lg flex items-center hover:bg-blue-700 transition-colors"
                        >
                            <PlusIcon class="h-5 w-5 mr-1" /> Add New Member
                        </button>
                    </div>

                    <!-- Add Member Form -->
                    <div v-if="addingMember" class="bg-gray-50 rounded-xl p-6 mb-12 shadow-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Add New Team Member</h3>
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="md:col-span-1">
                                <div class="h-64 bg-gray-200 rounded-lg overflow-hidden flex items-center justify-center relative">
                                    <template v-if="!memberForm.previewImage">
                                        <label class="cursor-pointer text-center p-4">
                                            <div class="flex flex-col items-center">
                                                <PlusIcon class="h-12 w-12 text-gray-400" />
                                                <span class="mt-2 text-sm text-gray-600">Upload Image (500x500)</span>
                                            </div>
                                            <input
                                                type="file"
                                                @change="handleImageUpload"
                                                class="hidden"
                                                accept="image/*"
                                            >
                                        </label>
                                    </template>
                                    <img
                                        v-else
                                        :src="memberForm.previewImage"
                                        class="w-full h-full object-cover"
                                    >
                                </div>
                            </div>
                            <div class="md:col-span-2">
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Name*</label>
                                        <input
                                            v-model="memberForm.name"
                                            class="w-full p-2 border rounded"
                                            placeholder="Full name"
                                        >
                                        <p v-if="memberForm.errors.name" class="text-red-500 text-sm mt-1">
                                            {{ memberForm.errors.name }}
                                        </p>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Position*</label>
                                        <input
                                            v-model="memberForm.position"
                                            class="w-full p-2 border rounded"
                                            placeholder="Job title"
                                        >
                                        <p v-if="memberForm.errors.position" class="text-red-500 text-sm mt-1">
                                            {{ memberForm.errors.position }}
                                        </p>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Category*</label>
                                        <select
                                            v-model="memberForm.category"
                                            class="w-full p-2 border rounded"
                                        >
                                            <option value="executive">Executive Leadership</option>
                                            <option value="senior">Senior Management</option>
                                            <option value="key">Key Personnel</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Description*</label>
<!--                                        <textarea-->
<!--                                            v-model="memberForm.description"-->
<!--                                            rows="4"-->
<!--                                            class="w-full p-2 border rounded"-->
<!--                                            placeholder="Brief bio and qualifications"-->
<!--                                        ></textarea>-->
                                        <WysiwygEditor
                                            v-model="memberForm.description"
                                            :error="memberForm.errors.description"
                                            placeholder="Brief bio and qualifications"
                                        />
                                        <p v-if="memberForm.errors.description" class="text-red-500 text-sm mt-1">
                                            {{ memberForm.errors.description }}
                                        </p>
                                    </div>
                                    <div class="flex space-x-4">
                                        <button
                                            @click="createMember"
                                            class="px-4 py-2 bg-green-600 text-white rounded flex items-center hover:bg-green-700 transition-colors"
                                            :disabled="memberForm.processing"
                                        >
                                            <CheckIcon class="h-5 w-5 mr-1" /> Save Member
                                        </button>
                                        <button
                                            @click="cancelAddMember"
                                            class="px-4 py-2 bg-gray-600 text-white rounded flex items-center hover:bg-gray-700 transition-colors"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 mr-1">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                            </svg>

                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Members List -->
                    <div v-if="activeTab === 'executive' && executives.length" class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-20">
                        <LeadershipMemberCard
                            v-for="member in executives"
                            :key="member.id"
                            :member="member"
                            :can-edit="canEdit"
                            :is-editing="editingMemberId === member.id"
                            @edit="editMember(member)"
                            @save="saveMember"
                            @cancel="cancelEditMember"
                            @delete="deleteMember(member.id)"
                        />
                    </div>

                    <div v-if="activeTab === 'senior' && seniors.length" class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-20">
                        <LeadershipMemberCard
                            v-for="member in seniors"
                            :key="member.id"
                            :member="member"
                            :can-edit="canEdit"
                            :is-editing="editingMemberId === member.id"
                            @edit="editMember(member)"
                            @save="saveMember"
                            @cancel="cancelEditMember"
                            @delete="deleteMember(member.id)"
                        />
                    </div>

                    <div v-if="activeTab === 'key'" class="max-w-4xl mx-auto">
                        <h3 class="text-2xl font-bold text-center text-gray-800 mb-8">KEY PERSONNEL</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                            <KeyPersonnelCard
                                v-for="member in keyPersonnel"
                                :key="member.id"
                                :member="member"
                                :can-edit="canEdit"
                                :is-editing="editingMemberId === member.id"
                                @edit="editMember(member)"
                                @save="saveMember"
                                @cancel="cancelEditMember"
                                @delete="deleteMember(member.id)"
                            />
                        </div>
                    </div>

                    <EmptyState
                        v-if="activeMembers.length === 0"
                        message="No team members found"
                        :action-text="canEdit ? 'Add your first team member' : undefined"
                        @action="openAddMemberForm"
                    />
                </div>
            </section>
        </div>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import { ref, computed } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router, useForm, usePage } from '@inertiajs/vue3';
import { PlusIcon, TrashIcon, PencilIcon, CheckIcon } from '@heroicons/vue/24/outline';
import LeadershipMemberCard from '@/Components/LeadershipMemberCard.vue';
import KeyPersonnelCard from '@/Components/KeyPersonnelCard.vue';
import EmptyState from '@/Components/EmptyState.vue';
import RichTextEditor from "@/Components/RichTextEditor.vue";
import WysiwygEditor from '@/Components/WysiwygEditor.vue'


// Types
interface Member {
    id: number;
    name: string;
    position: string;
    image_url: string | null;
    description: string;
    category: 'executive' | 'senior' | 'key';
    order: number;
}

interface ChildFormData {
    name: string;
    position: string;
    description: string;
    image: File | null;
    previewImage: string | null;
}

interface Tab {
    id: 'executive' | 'senior' | 'key';
    label: string;
}

interface Header {
    title: string;
    description: string;
}

// Props
const props = defineProps<{
    executives: Member[];
    seniors: Member[];
    keyPersonnel: Member[];
    header: Header;
    canEdit: boolean;
}>();

// State
const activeTab = ref<'executive' | 'senior' | 'key'>('executive');
const editingHeader = ref(false);
const addingMember = ref(false);
const editingMemberId = ref<number | null>(null);

const tabs: Tab[] = [
    { id: 'executive', label: 'Executive Leadership' },
    { id: 'senior', label: 'Senior Management' },
    { id: 'key', label: 'Key Personnel' }
];

// Computed
const activeMembers = computed(() => {
    switch (activeTab.value) {
        case 'executive': return props.executives;
        case 'senior': return props.seniors;
        case 'key': return props.keyPersonnel;
        default: return [];
    }
});

// Forms
const headerForm = useForm({
    title: props.header.title,
    description: props.header.description
});

const memberForm = useForm<{
    id?: number;
    name: string;
    position: string;
    description: string;
    category: 'executive' | 'senior' | 'key';
    order: number;
    image: File | null;
    previewImage: string | null;
}>({
    name: '',
    position: '',
    description: '',
    category: 'executive',
    order: 0,
    image: null,
    previewImage: null
});

// const memberForm = useForm<{
//     name: string;
//     position: string;
//     description: string;
//     category: 'executive' | 'senior' | 'key';
//     order: number;
//     image: File | null;
//     previewImage: string | null;
//     id?: number;
// }>({
//     name: '',
//     position: '',
//     description: '',
//     category: 'executive',
//     order: 0,
//     image: null,
//     previewImage: null
// });

// Methods
const startEditingHeader = () => {
    headerForm.title = props.header.title;
    headerForm.description = props.header.description;
    editingHeader.value = true;
};

const cancelEditingHeader = () => {
    editingHeader.value = false;
    headerForm.reset();
};

const updateHeader = () => {
    headerForm.put(route('leadership.update-header'), {
        preserveScroll: true,
        onSuccess: () => {
            editingHeader.value = false;
        }
    });
};

const openAddMemberForm = () => {
    addingMember.value = true;
    memberForm.reset();
    memberForm.category = activeTab.value;
    memberForm.previewImage = null;
};

const cancelAddMember = () => {
    addingMember.value = false;
    memberForm.reset();
    memberForm.previewImage = null;
};

const handleImageUpload = (event: Event) => {
    const input = event.target as HTMLInputElement;
    if (input.files && input.files[0]) {
        const file = input.files[0];
        memberForm.image = file;
        memberForm.previewImage = URL.createObjectURL(file);
    }
};

const editMember = (member: Member) => {
    editingMemberId.value = member.id;
    memberForm.name = member.name;
    memberForm.position = member.position;
    memberForm.description = member.description;
    memberForm.category = member.category;
    memberForm.order = member.order;
    memberForm.previewImage = member.image_url;
    memberForm.id = member.id;
};

const cancelEditMember = () => {
    editingMemberId.value = null;
    memberForm.reset();
    memberForm.previewImage = null;
};

const saveMember1 = () => {
    if (memberForm.id) {
        updateMember();
    } else {
        createMember();
    }
};
//


const saveMember = (childFormData:ChildFormData) => {
    console.log('Data received from child:', childFormData);

    // Update parent form with child data
    memberForm.name = childFormData.name;
    memberForm.position = childFormData.position;
    memberForm.description = childFormData.description;
    memberForm.image = childFormData.image;
    memberForm.previewImage = childFormData.previewImage;

    if (memberForm.id) {
        updateMember(childFormData);
    } else {
        createMember();
    }
};


const createMember = () => {
    memberForm.post(route('leadership.store'), {
        preserveScroll: true,
        onSuccess: () => {
            addingMember.value = false;
            memberForm.reset();
            memberForm.previewImage = null;
        }
    });
};


const updateMember = (childFormData?:ChildFormData) => {

    if (!childFormData) {
        // Handle the case where no data is passed
        return;
    }
    if (!memberForm.id) return;

    // Create regular object for non-file data
    const formData = {
        name: childFormData.name,
        position: childFormData.position,
        description: childFormData.description,
        category: memberForm.category,
        order: memberForm.order.toString(),
        _method: 'PUT' // Laravel method spoofing
    };

    // Handle file upload separately if exists
    if (childFormData.image instanceof File) {
        // Create FormData when we have files
        const formDataWithFile = new FormData();
        Object.entries(formData).forEach(([key, value]) => {
            formDataWithFile.append(key, value);
        });
        formDataWithFile.append('image', childFormData.image);

        router.post(route('leadership.update', memberForm.id), formDataWithFile, {
            forceFormData: true,
            preserveScroll: true,
            onSuccess: () => {
                editingMemberId.value = null;
                memberForm.reset();
                memberForm.previewImage = null;
            },
            onError: (errors) => {
                console.error('Update error:', errors);
            }
        });
    } else {
        // Regular PUT request when no files
        router.put(route('leadership.update', memberForm.id), formData, {
            preserveScroll: true,
            onSuccess: () => {
                editingMemberId.value = null;
                memberForm.reset();
                memberForm.previewImage = null;
            },
            onError: (errors) => {
                console.error('Update error:', errors);
            }
        });
    }
};
const deleteMember = (id: number) => {
    if (confirm('Are you sure you want to delete this team member?')) {
        useForm({}).delete(route('leadership.destroy', id), {
            preserveScroll: true
        });
    }
};
</script>
