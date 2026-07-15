import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    build: {
        rolldownOptions: {
            output: {
                manualChunks(id) {
                    if (!id.includes('node_modules')) {
                        return;
                    }

                    if (id.includes('@tiptap') || id.includes('prosemirror')) {
                        return 'editor';
                    }

                    if (id.includes('flowbite')) {
                        return 'flowbite';
                    }

                    if (id.includes('@inertiajs') || id.includes('ziggy-js')) {
                        return 'inertia';
                    }

                    if (id.includes('vue')) {
                        return 'vue';
                    }

                    return 'vendor';
                },
            },
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.ts'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
});
