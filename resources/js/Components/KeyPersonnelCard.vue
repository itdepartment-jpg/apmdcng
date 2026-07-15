<template>
    <div class="bg-gray-50 p-6 rounded-lg text-center relative">
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
        <div v-if="!isEditing">
            <div class="h-32 w-32 mx-auto rounded-full overflow-hidden mb-4">
                <img
                    :src="member.image_url || '/images/placeholder-user.jpg'"
                    :alt="member.name"
                    class="w-full h-full object-cover"
                >
            </div>
            <h4 class="text-xl font-semibold text-gray-800">{{ member.name }}</h4>
            <p class="text-[#0077B6]">{{ member.position }}</p>
            <div class="text-gray-600 mt-2" v-html="member.description"></div>
        </div>

        <!-- Edit Mode -->
        <div v-else class="text-left">
            <div class="h-32 w-32 mx-auto rounded-full overflow-hidden mb-4 relative">
                <img
                    :src="memberForm.previewImage || member.image_url || '/images/placeholder-user.jpg'"
                    class="w-full h-full object-cover"
                >
                <label class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-xs p-1 cursor-pointer hover:bg-opacity-70 transition-colors">
                    Change
                    <input
                        type="file"
                        @change="handleImageUpload"
                        class="hidden"
                        accept="image/*"
                    >
                </label>
            </div>

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
                    <WysiwygEditor
                        v-model="memberForm.description"
                        :error="memberForm.errors.description"
                        placeholder="Brief bio and qualifications"
                        @update:modelValue="(val) => memberForm.description = val"
                    />
                </div>

                <div class="flex justify-center space-x-4">
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
</template>

<script setup lang="ts">
import { PencilIcon, TrashIcon, CheckIcon } from '@heroicons/vue/24/outline';
import { useForm } from "@inertiajs/vue3";
import WysiwygEditor from "@/Components/WysiwygEditor.vue";
import { watch } from "vue";

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

const memberForm = useForm({
    name: props.member.name,
    position: props.member.position,
    description: props.member.description,
    previewImage: props.member.image_url,
    image: null as File | null
});

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

    emit('save', {
        name: memberForm.name,
        position: memberForm.position,
        description: memberForm.description,
        image: memberForm.image,
        previewImage: memberForm.previewImage
    });
};
</script>
