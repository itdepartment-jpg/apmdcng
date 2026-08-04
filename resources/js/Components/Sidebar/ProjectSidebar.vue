<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import {
    RectangleStackIcon,
    Squares2X2Icon,
} from "@heroicons/vue/24/outline";

const {
    openMenu,
    currentRoute,
} = defineProps<{
    openMenu: string | null;
    currentRoute: string;
}>();

defineEmits([
    "toggle-menu",
]);

const sidebarClass =
    "flex items-center pl-8 pr-3 py-3 rounded-lg group font-medium transition-all duration-200";

const sidebarActiveClass =
    "text-white bg-[#EA222F]/20 border-l-4 border-[#EA222F] shadow-lg";

const sidebarInactiveClass =
    "text-white/80 hover:bg-[#EA222F]/10 hover:text-white";

const projectLinks = [
    {
        label: "Projects",
        href: "#", // route('projects.index')
        icon: RectangleStackIcon,
        active: (route: string) =>
            route.includes("/projects") &&
            !route.includes("/project-categories"),
    },
    {
        label: "Project Categories",
        href: "#", // route('project-categories.index')
        icon: Squares2X2Icon,
        active: (route: string) =>
            route.includes("/project-categories"),
    },
];
</script>

<template>
    <!-- Project Management -->
    <li
        @click="$emit('toggle-menu', 'projects')"
        class="mt-5 mb-2 cursor-pointer"
    >
        <div
            class="flex items-center justify-between px-3 py-2 text-xs font-semibold uppercase tracking-[0.15em] text-white/50 hover:text-white transition-colors"
        >
            <span>Project Management</span>

            <svg
                class="w-4 h-4 transition-transform duration-300"
                :class="{ 'rotate-180': openMenu === 'projects' }"
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

    <!-- Project Menu -->
    <div
        v-show="openMenu === 'projects'"
        class="space-y-1 overflow-hidden transition-all duration-300"
    >
        <li
            v-for="link in projectLinks"
            :key="link.label"
        >
            <Link
                :href="link.href"
                :class="[
                    sidebarClass,
                    link.active(currentRoute)
                        ? sidebarActiveClass
                        : sidebarInactiveClass,
                ]"
            >
                <component
                    :is="link.icon"
                    class="w-5 h-5"
                />

                <span class="ms-3">
                    {{ link.label }}
                </span>
            </Link>
        </li>

        <!-- Divider -->
        <li class="my-4 border-t border-white/10"></li>
    </div>

    <!-- Divider -->
    <li class="my-4 border-t border-white/10"></li>
</template>