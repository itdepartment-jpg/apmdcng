<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import {
    UserCircleIcon,
    LockClosedIcon,
    ArrowLeftStartOnRectangleIcon,
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

const accountLinks = [
    {
        label: "My Profile",
        href: "#", // route('profile.edit')
        icon: UserCircleIcon,
        active: (route: string) =>
            route.includes("/profile"),
    },
    {
        label: "Change Password",
        href: "#", // route('password.edit')
        icon: LockClosedIcon,
        active: (route: string) =>
            route.includes("/change-password"),
    },
];

const logoutIcon = ArrowLeftStartOnRectangleIcon;
</script>

<template>
    <!-- Account -->
    <li
        @click="$emit('toggle-menu', 'account')"
        class="mt-5 mb-2 cursor-pointer"
    >
        <div
            class="flex items-center justify-between px-3 py-2 text-xs font-semibold uppercase tracking-[0.15em] text-white/50 hover:text-white transition-colors"
        >
            <span>Account</span>

            <svg
                class="w-4 h-4 transition-transform duration-300"
                :class="{ 'rotate-180': openMenu === 'account' }"
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

    <!-- Account Menu -->
    <div
        v-show="openMenu === 'account'"
        class="space-y-1 overflow-hidden transition-all duration-300"
    >
        <li
            v-for="link in accountLinks"
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

        <!-- Logout -->
        <li>
            <Link
                :href="route('logout')"
                method="post"
                as="button"
                class="flex items-center w-full pl-8 pr-3 py-3 rounded-lg group font-medium text-white/80 hover:bg-red-600/20 hover:text-red-300 transition-all duration-200"
            >
                <component
                    :is="logoutIcon"
                    class="w-5 h-5"
                />

                <span class="ms-3">
                    Logout
                </span>
            </Link>
        </li>

        <!-- Divider -->
        <li class="my-4 border-t border-white/10"></li>
    </div>
</template>