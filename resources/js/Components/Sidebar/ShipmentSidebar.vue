<template>
    <!-- =========================================
         SHIPMENT MANAGEMENT
    ========================================= -->

    <!-- Main Menu -->
    <li
        @click="$emit('toggle-menu', 'shipment')"
        class="mt-5 mb-2 cursor-pointer"
    >
        <div
            class="flex items-center justify-between px-3 py-2 text-xs font-semibold uppercase tracking-[0.15em] text-white/50 hover:text-white transition-colors"
        >
            <span>Shipment Management</span>

            <svg
                class="w-4 h-4 transition-transform duration-300"
                :class="{ 'rotate-180': openMenu === 'shipment' }"
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

    <!-- Shipment Menu -->
    <div
        v-show="openMenu === 'shipment'"
        class="space-y-2 overflow-hidden transition-all duration-300"
    >
        <!-- Dynamic Submenus -->
        <li
            v-for="menu in shipmentMenus"
            :key="menu.key"
        >
            <button
                @click="$emit('toggle-sub-menu', menu.key)"
                class="w-full flex items-center justify-between px-8 py-3 rounded-lg text-white/80 hover:bg-[#EA222F]/10 transition-all"
            >
                <div class="flex items-center">
                    <component
                        :is="menu.icon"
                        class="w-5 h-5"
                    />

                    <span class="ml-3 font-medium">
                        {{ menu.title }}
                    </span>
                </div>

                <svg
                    class="w-4 h-4 transition-transform duration-300"
                    :class="{ 'rotate-180': openSubMenu === menu.key }"
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

            <ul
                v-show="openSubMenu === menu.key"
                class="mt-1 space-y-1"
            >
                <li
                    v-for="link in menu.links"
                    :key="link.route"
                >
                    <Link
                        :href="route(link.route)"
                        class="block pl-16 pr-4 py-2 text-sm rounded-lg text-white/70 hover:text-white hover:bg-[#EA222F]/10"
                    >
                        {{ link.label }}
                    </Link>
                </li>
            </ul>
        </li>

        <!-- Track Shipment -->
        <li>
            <Link
                href="#"
                class="flex items-center px-8 py-3 rounded-lg text-white/80 hover:bg-[#EA222F]/10 transition-all"
            >
                <MagnifyingGlassIcon class="w-5 h-5" />

                <span class="ml-3 font-medium">
                    Track Shipment
                </span>
            </Link>
        </li>
    </div>

    <li class="my-4 border-t border-white/10"></li>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";

import {
    CubeIcon,
    UserGroupIcon,
    TruckIcon,
    MagnifyingGlassIcon,
} from "@heroicons/vue/24/outline";

defineProps<{
    openMenu: string | null;
    openSubMenu: string | null;
}>();

defineEmits(["toggle-menu", "toggle-sub-menu"]);

const shipmentMenus = [
    {
        key: "shipments",
        title: "Shipments",
        icon: CubeIcon,
        links: [
            {
                label: "All Shipments",
                route: "shipments.index",
            },
            {
                label: "+ Add Shipment",
                route: "shipments.create",
            },
        ],
    },
    {
        key: "partners",
        title: "Partners",
        icon: UserGroupIcon,
        links: [
            {
                label: "All Partners",
                route: "partners.index",
            },
            {
                label: "+ Add Partner",
                route: "partners.create",
            },
        ],
    },
    {
        key: "carriers",
        title: "Carriers",
        icon: TruckIcon,
        links: [
            {
                label: "All Carriers",
                route: "carriers.index",
            },
            {
                label: "+ Add Carrier",
                route: "carriers.create",
            },
        ],
    },
];
</script>