<template>
    <div class="w-full border border-gray-300 rounded bg-white dark:bg-gray-800 dark:border-gray-600">
        <!-- Toolbar -->
        <div class="flex flex-wrap items-center gap-2 p-2 border-b dark:border-gray-700 bg-gray-50 dark:bg-gray-700">
            <button v-for="(btn, i) in buttons" :key="i"
                    @click.prevent="btn.command"
                    :class="['px-2 py-1 rounded text-sm', btn.isActive() ? 'bg-blue-500 text-white' : 'bg-white text-gray-800 border']">
                {{ btn.label }}
            </button>
        </div>

        <!-- Editor -->
        <editor-content class="min-h-[6rem]" v-if="editor" :editor="editor" />

    </div>
</template>

<script setup lang="ts">
import { Editor, EditorContent } from '@tiptap/vue-3'
import StarterKit from '@tiptap/starter-kit'
import Underline from '@tiptap/extension-underline'
import Link from '@tiptap/extension-link'
import Image from '@tiptap/extension-image'
import Youtube from '@tiptap/extension-youtube'
import HorizontalRule from '@tiptap/extension-horizontal-rule'
import { onMounted, onBeforeUnmount, watch, ref } from 'vue'

interface Props {
    modelValue: string
}


const props = defineProps<Props>()
const emit = defineEmits(['update:modelValue'])

// const editor = ref<Editor | null>(null)
const editor = ref<Editor>()

onMounted(() => {
    editor.value = new Editor({
        content: props.modelValue,
        extensions: [
            StarterKit,
            Underline,
            Link.configure({
                openOnClick: false,
                autolink: true,
                HTMLAttributes: {
                    class: 'text-blue-600 underline',
                },
            }),
            Image.configure({
                HTMLAttributes: {
                    class: 'rounded-md my-2',
                },
            }),
            Youtube.configure({
                HTMLAttributes: {
                    class: 'rounded-md my-2',
                },
                width: 480,
                height: 280,
            }),
            HorizontalRule,
        ],
        editorProps: {
            attributes: {
                class: 'focus:outline-none format format-blue dark:format-invert',
            },
        },
        onUpdate({ editor }) {
            emit('update:modelValue', editor.getHTML())
        },
    })
})

onBeforeUnmount(() => {
    editor.value?.destroy()
})

watch(() => props.modelValue, (newValue) => {
    if (editor.value && editor.value.getHTML() !== newValue) {
        editor.value.commands.setContent(newValue)
    }
})

// Toolbar actions
const buttons = [
    {
        label: 'Bold',
        command: () => editor.value?.chain().focus().toggleBold().run(),
        isActive: () => editor.value?.isActive('bold'),
    },
    {
        label: 'Italic',
        command: () => editor.value?.chain().focus().toggleItalic().run(),
        isActive: () => editor.value?.isActive('italic'),
    },
    {
        label: 'Underline',
        command: () => editor.value?.chain().focus().toggleUnderline().run(),
        isActive: () => editor.value?.isActive('underline'),
    },
    {
        label: 'H1',
        command: () => editor.value?.chain().focus().toggleHeading({ level: 1 }).run(),
        isActive: () => editor.value?.isActive('heading', { level: 1 }),
    },
    {
        label: 'H2',
        command: () => editor.value?.chain().focus().toggleHeading({ level: 2 }).run(),
        isActive: () => editor.value?.isActive('heading', { level: 2 }),
    },
    {
        label: 'Bullet List',
        command: () => editor.value?.chain().focus().toggleBulletList().run(),
        isActive: () => editor.value?.isActive('bulletList'),
    },
    {
        label: 'Ordered List',
        command: () => editor.value?.chain().focus().toggleOrderedList().run(),
        isActive: () => editor.value?.isActive('orderedList'),
    },
    {
        label: 'Blockquote',
        command: () => editor.value?.chain().focus().toggleBlockquote().run(),
        isActive: () => editor.value?.isActive('blockquote'),
    },
    {
        label: 'Code Block',
        command: () => editor.value?.chain().focus().toggleCodeBlock().run(),
        isActive: () => editor.value?.isActive('codeBlock'),
    },
    {
        label: 'HR',
        command: () => editor.value?.chain().focus().setHorizontalRule().run(),
        isActive: () => false,
    },
    {
        label: 'Undo',
        command: () => editor.value?.chain().focus().undo().run(),
        isActive: () => false,
    },
    {
        label: 'Redo',
        command: () => editor.value?.chain().focus().redo().run(),
        isActive: () => false,
    },
]
</script>

<style scoped>
button {
    transition: all 0.2s;
}
</style>
