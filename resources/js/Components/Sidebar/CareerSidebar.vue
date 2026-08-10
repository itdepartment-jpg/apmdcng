<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

import {
    BriefcaseIcon,
    PlusCircleIcon,
} from '@heroicons/vue/24/outline';


/*
|--------------------------------------------------------------------------
| Props
|--------------------------------------------------------------------------
*/

defineProps<{
    openMenu: string | null;
    openSubMenu: string | null;
    currentRoute: string;
}>();


/*
|--------------------------------------------------------------------------
| Events
|--------------------------------------------------------------------------
*/

defineEmits([
    'toggle-menu',
    'toggle-sub-menu',
]);
</script>


<template>

    <!-- =====================================================
         CAREER MANAGEMENT
    ====================================================== -->

    <li class="mt-5 mb-2">

        <button
            type="button"
            @click="$emit('toggle-menu', 'career')"
            class="w-full flex items-center justify-between px-3 py-2 text-xs font-semibold uppercase tracking-[0.15em] text-white/50 hover:text-white transition-colors"
        >

            <span>
                Career Management
            </span>

            <svg
                class="w-4 h-4 transition-transform duration-300"
                :class="{
                    'rotate-180': openMenu === 'career'
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

        </button>

    </li>


    <!-- =====================================================
         CAREER MENU
    ====================================================== -->

    <div
        v-show="openMenu === 'career'"
        class="space-y-1 overflow-hidden transition-all duration-300"
    >

        <!-- All Careers -->

        <li>

            <Link
                :href="route('admin.careers.index')"
                :class="[
                    'flex items-center w-full px-3 py-3 rounded-lg transition-all duration-200',
                    currentRoute === '/admin/careers'
                        ? 'text-white bg-[#EA222F]/20 border-l-4 border-[#EA222F] shadow-lg'
                        : 'text-white/80 hover:bg-[#EA222F]/10 hover:text-white hover:shadow-md'
                ]"
            >

                <BriefcaseIcon class="w-5 h-5 flex-shrink-0" />

                <span class="ms-3 font-medium">
                    All Careers
                </span>

            </Link>

        </li>


        <!-- Add Career -->

        <li>

            <Link
                :href="route('admin.careers.create')"
                :class="[
                    'flex items-center w-full px-3 py-3 rounded-lg transition-all duration-200',
                    currentRoute === '/admin/careers/create'
                        ? 'text-white bg-[#EA222F]/20 border-l-4 border-[#EA222F] shadow-lg'
                        : 'text-white/80 hover:bg-[#EA222F]/10 hover:text-white hover:shadow-md'
                ]"
            >

                <PlusCircleIcon class="w-5 h-5 flex-shrink-0" />

                <span class="ms-3 font-medium">
                    Add Career
                </span>

            </Link>

        </li>

    </div>


    <!-- =====================================================
         DIVIDER
    ====================================================== -->

    <li class="my-4 border-t border-white/10"></li>

</template>