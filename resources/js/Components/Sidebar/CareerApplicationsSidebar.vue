<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import { ClipboardDocumentListIcon } from "@heroicons/vue/24/outline";
import CareerApplicationsSidebar from "@/Components/Sidebar/CareerApplicationsSidebar.vue";

defineProps<{
    openMenu: string | null;
    currentRoute: string;
}>();

defineEmits<{
    (e: "toggle-menu", menu: string): void;
}>();

const sidebarClass =
    "flex items-center px-8 py-3 rounded-lg font-medium transition-all duration-200";

const sidebarActiveClass =
    "bg-[#EA222F]/20 text-white border-l-4 border-[#EA222F] shadow-lg";

const sidebarInactiveClass =
    "text-white/80 hover:bg-[#EA222F]/10 hover:text-white";

const applicationLinks = [
    {
        label: "All Applications",
        route: "admin.career-applications.index",
        icon: ClipboardDocumentListIcon,
    },
];
</script>

<template>

    <!-- =========================================
        CAREER APPLICATIONS
    ========================================== -->

    <li
        class="mt-2 cursor-pointer"
        @click="$emit('toggle-menu', 'career-applications')"
    >

        <div
            class="flex items-center justify-between px-3 py-2 text-xs font-semibold uppercase tracking-[0.15em] text-white/50 transition-colors hover:text-white"
        >

            <span>
                Career Applications
            </span>

            <svg
                class="h-4 w-4 transition-transform duration-300"
                :class="{
                    'rotate-180':
                        openMenu === 'career-applications'
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

        </div>

    </li>


    <!-- =========================================
        APPLICATIONS MENU
    ========================================== -->

    <div
        v-show="openMenu === 'career-applications'"
        class="space-y-2 overflow-hidden"
    >

        <li
            v-for="link in applicationLinks"
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

        <li class="my-4 border-t border-white/10"></li>

    </div>

</template>