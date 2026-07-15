<template>
    <div class="rich-text-editor">
        <div v-if="editable" class="menu-bar">
            <button @click="editor.chain().focus().toggleBold().run()" :class="{ 'is-active': editor.isActive('bold') }">
                <BoldIcon class="h-5 w-5" />
            </button>
            <button @click="editor.chain().focus().toggleItalic().run()" :class="{ 'is-active': editor.isActive('italic') }">
                <ItalicIcon class="h-5 w-5" />
            </button>
            <!-- Add more buttons as needed -->
        </div>

        <editor-content :editor="editor" class="editor-content" />

        <p v-if="error" class="text-red-500 text-sm mt-1">
            {{ error }}
        </p>
    </div>
</template>

<script setup>
import { useEditor, EditorContent } from '@tiptap/vue-3'
import StarterKit from '@tiptap/starter-kit'
import { watch } from 'vue'

const props = defineProps({
    modelValue: String,
    error: String,
    editable: { type: Boolean, default: true }
})

const emit = defineEmits(['update:modelValue'])

const editor = useEditor({
    content: props.modelValue,
    extensions: [StarterKit],
    onUpdate: () => {
        emit('update:modelValue', editor.value.getHTML())
    },
})

watch(() => props.modelValue, (value) => {
    if (value !== editor.value.getHTML()) {
        editor.value.commands.setContent(value, false)
    }
})
</script>

<style>
.rich-text-editor {
    @apply border rounded;
}

.menu-bar {
    @apply p-1 border-b flex space-x-1;
}

.menu-bar button {
    @apply p-1 rounded hover:bg-gray-100;
}

.menu-bar button.is-active {
    @apply bg-gray-200;
}

.editor-content {
    @apply p-2 min-h-[150px] prose max-w-none;
}

.editor-content:focus {
    @apply ring-1 ring-blue-500 outline-none;
}

.ProseMirror p.is-editor-empty:first-child::before {
    @apply text-gray-400 float-left h-0 pointer-events-none;
    content: attr(data-placeholder);
}
</style>
