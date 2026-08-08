<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import {
    UserGroupIcon,
    PlusCircleIcon,
    ClipboardDocumentListIcon,
} from "@heroicons/vue/24/outline";

/*
|--------------------------------------------------------------------------
| Props & Events
|--------------------------------------------------------------------------
*/

defineProps<{
    openMenu: string | null;
    currentRoute: string;
}>();

const emit = defineEmits<{
    (event: "toggle-menu", menu: string): void;
}>();

/*
|--------------------------------------------------------------------------
| Sidebar Styles
|--------------------------------------------------------------------------
*/

const sidebarClass =
    "flex items-center px-8 py-3 rounded-lg font-medium transition-all duration-200";

const sidebarActiveClass =
    "bg-[#EA222F]/20 border-l-4 border-[#EA222F] text-white shadow-lg";

const sidebarInactiveClass =
    "text-white/80 hover:bg-[#EA222F]/10 hover:text-white";

/*
|--------------------------------------------------------------------------
| Career Navigation
|--------------------------------------------------------------------------
*/

const careerLinks = [
    {
        label: "All Careers",
        route: "admin.careers.index",
        icon: UserGroupIcon,
    },
    {
        label: "Add Career",
        route: "admin.careers.create",
        icon: PlusCircleIcon,
    },
    {
        label: "Career Applications",
        route: "admin.career-applications.index",
        icon: ClipboardDocumentListIcon,
    },
];
</script>

<template>
    <!-- Career Management -->
<li
    class="mt-5 mb-5 cursor-pointer"
    @click="$emit('toggle-menu', 'careers')"
>
    <div
        class="flex items-center justify-between px-3 py-2 text-xs font-semibold uppercase tracking-[0.15em] text-white/50 transition-colors hover:text-white"
    >
        <span>Career Management</span>

        <svg
            class="h-4 w-4 transition-transform duration-300"
            :class="{
                'rotate-180': openMenu === 'careers',
            }"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="none"
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

<!-- Career Links -->
<div
    v-show="openMenu === 'careers'"
    class="space-y-1 overflow-hidden transition-all duration-300"
>
    <li
        v-for="link in careerLinks"
        :key="link.route"
    >
        <Link
            :href="route(link.route)"
            :class="[
                sidebarClass,
                route().current(link.route)
                    ? sidebarActiveClass
                    : sidebarInactiveClass,
            ]"
        >
            <component
                :is="link.icon"
                class="h-5 w-5"
            />

            <span class="ml-3">
                {{ link.label }}
            </span>
        </Link>
    </li>

    <!-- Divider / Spacing -->
    <li class="mt-4 mb-8 border-t border-white/10"></li>
</div>
</template>