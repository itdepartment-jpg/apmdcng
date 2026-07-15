<template>
    <div class="w-full border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
        <!-- Toolbar -->
        <div class="px-3 py-2 border-b border-gray-200 dark:border-gray-600">
            <div class="flex flex-wrap items-center">
                <div class="flex items-center space-x-1 rtl:space-x-reverse flex-wrap">
                    <!-- Text formatting buttons -->
                    <button @click="editor.chain().focus().toggleBold().run()" :class="{ 'bg-gray-100 dark:bg-gray-600': editor.isActive('bold') }" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5h4.5a3.5 3.5 0 1 1 0 7H8m0-7v7m0-7H6m2 7h6.5a3.5 3.5 0 1 1 0 7H8m0-7v7m0 0H6"/>
                        </svg>
                        <span class="sr-only">Bold</span>
                    </button>

                    <button @click="editor.chain().focus().toggleItalic().run()" :class="{ 'bg-gray-100 dark:bg-gray-600': editor.isActive('italic') }" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8.874 19 6.143-14M6 19h6.33m-.66-14H18"/>
                        </svg>
                        <span class="sr-only">Italic</span>
                    </button>

                    <!-- Add more toolbar buttons as needed -->

                    <!-- Link button -->
                    <button @click="setLink" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961"/>
                        </svg>
                        <span class="sr-only">Link</span>
                    </button>

                    <!-- Image button -->
                    <button @click="addImage" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">Add image</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Editor content -->
        <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
            <editor-content :editor="editor" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" />
        </div>
    </div>
</template>

<script>
import { Editor, EditorContent } from '@tiptap/vue-3'
import StarterKit from '@tiptap/starter-kit'
import Link from '@tiptap/extension-link'
import Image from '@tiptap/extension-image'
import Youtube from '@tiptap/extension-youtube'

export default {
    components: {
        EditorContent,
    },

    data() {
        return {
            editor: null,
        }
    },

    mounted() {
        this.editor = new Editor({
            extensions: [
                StarterKit,
                Link.configure({
                    openOnClick: false,
                    HTMLAttributes: {
                        class: 'text-blue-600 hover:underline',
                    },
                }),
                Image.configure({
                    HTMLAttributes: {
                        class: 'rounded-lg',
                    },
                }),
                Youtube.configure({
                    HTMLAttributes: {
                        class: 'rounded-lg',
                    },
                }),
            ],
            content: `
        <h2>Welcome to Flowbite WYSIWYG Editor</h2>
        <p>This is a basic example with Vue 3 and Tailwind CSS.</p>
        <p>You can add <strong>bold</strong>, <em>italic</em>, <a href="https://flowbite.com">links</a> and more!</p>
      `,
            editorProps: {
                attributes: {
                    class: 'format lg:format-lg dark:format-invert focus:outline-none format-blue max-w-none',
                },
            },
        })
    },

    methods: {
        setLink() {
            const previousUrl = this.editor.getAttributes('link').href
            const url = window.prompt('URL', previousUrl)

            // cancelled
            if (url === null) {
                return
            }

            // empty
            if (url === '') {
                this.editor.chain().focus().extendMarkRange('link').unsetLink().run()
                return
            }

            // update link
            this.editor.chain().focus().extendMarkRange('link').setLink({ href: url }).run()
        },

        addImage() {
            const url = window.prompt('Enter the URL of the image:')

            if (url) {
                this.editor.chain().focus().setImage({ src: url }).run()
            }
        },
    },

    beforeUnmount() {
        this.editor.destroy()
    },
}
</script>
