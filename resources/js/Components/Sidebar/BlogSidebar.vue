<template>
 <!-- =====================================================
     BLOG MANAGEMENT
====================================================== -->

<li class="mt-5 mb-2">

    <button
        type="button"
        @click="$emit('toggle-menu', 'blog')"
        class="w-full flex items-center justify-between px-3 py-2 text-xs font-semibold uppercase tracking-[0.15em] text-white/50 hover:text-white transition-colors"
    >

        <span>
            Blog Management
        </span>

        <svg
            class="w-4 h-4 transition-transform duration-300"
            :class="{
                'rotate-180': openMenu === 'blog'
            }"
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

    </button>

</li>


<!-- =====================================================
     BLOG MENU
====================================================== -->

<div
    v-show="openMenu === 'blog'"
    class="space-y-1"
>

    <!-- =================================================
         ALL POSTS
    ================================================== -->

    <li>

        <Link
            :href="route('admin.posts.index')"
            :class="[
                sidebarClass,
                currentRoute === '/admin/posts'
                    ? sidebarActiveClass
                    : sidebarInactiveClass
            ]"
        >

            <DocumentTextIcon
                class="w-5 h-5 flex-shrink-0"
            />

            <span class="ms-3">
                All Posts
            </span>

        </Link>

    </li>


    <!-- =================================================
         CREATE POST
    ================================================== -->

    <li>

        <Link
            :href="route('admin.posts.create')"
            :class="[
                sidebarClass,
                currentRoute === '/admin/posts/create'
                    ? sidebarActiveClass
                    : sidebarInactiveClass
            ]"
        >

            <PlusCircleIcon
                class="w-5 h-5 flex-shrink-0"
            />

            <span class="ms-3">
                Create Post
            </span>

        </Link>

    </li>


    <!-- =================================================
         CATEGORIES
    ================================================== -->

    <li>

        <Link
            :href="route('admin.categories.index')"
            :class="[
                sidebarClass,
                currentRoute === '/admin/categories'
                    ? sidebarActiveClass
                    : sidebarInactiveClass
            ]"
        >

            <TagIcon
                class="w-5 h-5 flex-shrink-0"
            />

            <span class="ms-3">
                Categories
            </span>

        </Link>

    </li>


    <!-- =================================================
         ADD CATEGORY
    ================================================== -->

    <li>

        <Link
            :href="route('admin.categories.create')"
            :class="[
                sidebarClass,
                currentRoute === '/admin/categories/create'
                    ? sidebarActiveClass
                    : sidebarInactiveClass
            ]"
        >

            <PlusCircleIcon
                class="w-5 h-5 flex-shrink-0"
            />

            <span class="ms-3">
                Add Category
            </span>

        </Link>

    </li>

</div>


<!-- =====================================================
     DIVIDER
====================================================== -->

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