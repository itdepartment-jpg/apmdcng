<template>
    <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg relative">
        <!-- Edit/Delete Controls -->
        <div v-if="canEdit" class="absolute top-2 right-2 flex space-x-2">
            <button
                v-if="!isEditing"
                @click="$emit('edit')"
                class="p-1 bg-blue-100 rounded-full text-blue-600 hover:bg-blue-200 transition-colors"
            >
                <PencilIcon class="h-5 w-5" />
            </button>
            <button
                v-if="!isEditing"
                @click="$emit('delete')"
                class="p-1 bg-red-100 rounded-full text-red-600 hover:bg-red-200 transition-colors"
            >
                <TrashIcon class="h-5 w-5" />
            </button>
        </div>

        <!-- View Mode -->
        <div v-if="!isEditing" class="md:flex">
            <div class="md:w-1/3">
                <img
                    :src="member.image_url || '/images/placeholder-user.jpg'"
                    :alt="member.name"
                    class="w-full h-64 md:h-full object-cover"
                >
            </div>
            <div class="p-6 md:w-2/3">
                <h3 class="text-2xl font-bold text-gray-800">{{ member.name }}</h3>
                <p class="text-[#0077B6] font-semibold mb-4">{{ member.position }}</p>
                <div class="text-gray-600 space-y-3" v-html="member.description"></div>
            </div>
        </div>

        <!-- Edit Mode -->
        <div v-else class="md:flex">
            <div class="md:w-1/3">
                <div class="h-full bg-gray-200 relative">
                    <img
                        :src="memberForm.previewImage || member.image_url || '/images/placeholder-user.jpg'"
                        class="w-full h-64 md:h-full object-cover"
                    >
                    <label class="absolute bottom-2 left-0 right-0 mx-auto w-max px-2 py-1 bg-black bg-opacity-50 text-white rounded text-sm cursor-pointer hover:bg-opacity-70 transition-colors">
                        Change Image
                        <input
                            type="file"
                            @change="handleImageUpload"
                            class="hidden"
                            accept="image/*"
                        >
                    </label>
                </div>
            </div>
            <div class="p-6 md:w-2/3">
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Name*</label>
                        <input
                            v-model="memberForm.name"
                            class="w-full p-2 border rounded"
                        >
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Position*</label>
                        <input
                            v-model="memberForm.position"
                            class="w-full p-2 border rounded"
                        >
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Description*</label>
<!--                        <textarea-->
<!--                            v-model="memberForm.description"-->
<!--                            rows="4"-->
<!--                            class="w-full p-2 border rounded"-->
<!--                        ></textarea>-->

                        <WysiwygEditor
                            v-model="memberForm.description"
                            :error="memberForm.errors.description"
                            placeholder="Brief bio and qualifications"
                            @update:modelValue="(val) => memberForm.description = val"
                        />
<!--                        @click="$emit('save')"-->
<!--                        @click="handleSave"-->
                    </div>
                    <div class="flex space-x-4">
                        <button
                            @click="handleSave"
                            class="px-4 py-2 bg-green-600 text-white rounded flex items-center hover:bg-green-700 transition-colors"
                        >
                            <CheckIcon class="h-5 w-5 mr-1" /> Save
                        </button>
                        <button
                            @click="$emit('cancel')"
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
</template>

<script setup lang="ts">
import { PencilIcon, TrashIcon, CheckIcon } from '@heroicons/vue/24/outline';
import { useForm } from "@inertiajs/vue3";
import WysiwygEditor from "@/Components/WysiwygEditor.vue";
import { watch, ref } from "vue";

interface Member {
    id: number;
    name: string;
    position: string;
    image_url: string | null;
    description: string;
}

const props = defineProps<{
    member: Member;
    canEdit: boolean;
    isEditing: boolean;
}>();

const emit = defineEmits<{
    (e: 'edit'): void;
    (e: 'save', payload: {
        name: string;
        position: string;
        description: string;
        image: File | null;
        previewImage: string | null;
    }): void;
    (e: 'cancel'): void;
    (e: 'delete'): void;
}>();

// Initialize form with proper reactivity
const memberForm = useForm({
    name: props.member.name,
    position: props.member.position,
    description: props.member.description,
    previewImage: props.member.image_url,
    image: null as File | null
});

// Sync form when editing starts
watch(() => props.isEditing, (isEditing) => {
    if (isEditing) {
        memberForm.name = props.member.name;
        memberForm.position = props.member.position;
        memberForm.description = props.member.description;
        memberForm.previewImage = props.member.image_url;
        memberForm.image = null;
    }
});

const handleImageUpload = (event: Event) => {
    const input = event.target as HTMLInputElement;
    if (input.files?.[0]) {
        const file = input.files[0];

        // Client-side validation
        const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/webp'];
        if (!validTypes.includes(file.type)) {
            alert('Please upload a valid image (JPEG, PNG, JPG, GIF, WEBP)');
            return;
        }
        if (file.size > 2 * 1024 * 1024) {
            alert('Image must be less than 2MB');
            return;
        }

        memberForm.image = file;
        memberForm.previewImage = URL.createObjectURL(file);
    }
};

const handleSave = () => {
    // Validate required fields
    if (!memberForm.name?.trim() || !memberForm.position?.trim() || !memberForm.description?.trim()) {
        alert('Please fill all required fields');
        return;
    }

    // Debug before emitting
    console.log('Emitting save with:', {
        name: memberForm.name,
        position: memberForm.position,
        description: memberForm.description,
        hasImage: memberForm.image instanceof File
    });

    emit('save', {
        name: memberForm.name,
        position: memberForm.position,
        description: memberForm.description,
        image: memberForm.image,
        previewImage: memberForm.previewImage
    });
};
</script>
