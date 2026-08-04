<template>
    <!-- =========================================
         BLOG MANAGEMENT
    ========================================= -->

    <!-- Blog Header -->
    <li
        @click="$emit('toggle-menu', 'blog')"
        class="mt-5 mb-2 cursor-pointer"
    >
        <div
            class="flex items-center justify-between px-3 py-2 text-xs font-semibold uppercase tracking-[0.15em] text-white/50 hover:text-white transition-colors"
        >
            <span>Blog Management</span>

            <svg
                class="w-4 h-4 transition-transform duration-300"
                :class="{ 'rotate-180': openMenu === 'blog' }"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M19 9l-7 7-7-7"
                />
            </svg>
        </div>
    </li>

    <!-- Blog Menu -->
    <div
        v-show="openMenu === 'blog'"
        class="space-y-1 overflow-hidden transition-all duration-300"
    >
        <!-- Blog Posts -->
        <li>
            <Link
                :href="'#'"
                :class="[
                    sidebarClass,
                    currentRoute.includes('/blog') &&
                    !currentRoute.includes('/categories') &&
                    !currentRoute.includes('/create')
                        ? sidebarActiveClass
                        : sidebarInactiveClass
                ]"
            >
                <DocumentTextIcon class="w-5 h-5" />

                <span class="ms-3">
                    Blog Posts
                </span>
            </Link>
        </li>

        <!-- Categories -->
        <li>
            <Link
                :href="'#'"
                :class="[
                    sidebarClass,
                    currentRoute.includes('/blog/categories')
                        ? sidebarActiveClass
                        : sidebarInactiveClass
                ]"
            >
                <TagIcon class="w-5 h-5" />

                <span class="ms-3">
                    Categories
                </span>
            </Link>
        </li>

        <!-- Add New Post -->
        <li>
            <Link
                :href="'#'"
                :class="[
                    sidebarClass,
                    currentRoute.includes('/blog/create')
                        ? sidebarActiveClass
                        : sidebarInactiveClass
                ]"
            >
                <PlusCircleIcon class="w-5 h-5" />

                <span class="ms-3">
                    Add New Post
                </span>
            </Link>
        </li>
    </div>

    <!-- Divider -->
    <li class="my-4 border-t border-white/10"></li>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import { computed } from "vue";

import {
    DocumentTextIcon,
    TagIcon,
    PlusCircleIcon,
} from "@heroicons/vue/24/outline";

const props = defineProps<{
    openMenu: string | null;
    openSubMenu: string | null;
    currentRoute: string;
}>();

defineEmits([
    "toggle-menu",
    "toggle-sub-menu",
]);

const sidebarClass =
    "flex items-center pl-8 pr-3 py-3 rounded-lg group font-medium transition-all duration-200";

const sidebarActiveClass =
    "text-white bg-[#EA222F]/20 border-l-4 border-[#EA222F] shadow-lg";

const sidebarInactiveClass =
    "text-white/80 hover:bg-[#EA222F]/10 hover:text-white";
</script>