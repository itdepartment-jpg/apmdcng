<template>
    <!-- APMDC-themed Navigation -->
    <nav class="fixed top-0 z-50 w-full bg-gradient-to-r from-[#303791] to-[#EA222F] shadow-lg border-b border-[#EA222F]/30">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-white/80 rounded-lg sm:hidden hover:bg-[#303791]/30 focus:outline-none focus:ring-2 focus:ring-[#EA222F]">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                    </button>
                    <a href="" class="flex ms-2 md:me-24">
                        <div class="flex items-center">
                            <img src="/images/APMDC-Logo.png" alt="APMDC Logo" class="h-8 w-auto mr-3">
                            <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white font-poppins">
                                APMDC Portal
                            </span>
                        </div>
                    </a>
                </div>
                <div class="flex items-center">
                    <!-- Status Badge -->
                    <div class="hidden md:flex items-center mr-4 px-3 py-1 bg-white/20 rounded-full">
                        <div class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></div>
                        <span class="text-xs text-white/90 font-medium">Operational</span>
                    </div>

                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button" class="flex text-sm bg-white/20 rounded-full focus:ring-4 focus:ring-[#EA222F]/50" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full border-2 border-white/30" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&h=200&q=80" alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-xl border border-gray-200" id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 font-medium" role="none">
                                    {{ $page.props.auth.user.name }}
                                </p>
                                <p class="text-sm text-gray-500 truncate" role="none">
                                    {{ $page.props.auth.user.email }}
                                </p>
                                <p class="text-xs text-[#EA222F] font-medium mt-1" role="none">
                                    APMDC Team
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li class="cursor-pointer" @click="logout">
                                    <a class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-[#EA222F]/5 hover:text-[#EA222F] transition-colors duration-200" role="menuitem">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                                        </svg>
                                        Sign out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- APMDC-themed Sidebar -->
    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-gradient-to-b from-[#303791] to-[#1a1f5c] border-r border-[#EA222F]/30 sm:translate-x-0 shadow-xl" aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto">
            <div class="mb-6 p-4 bg-white/5 rounded-lg border border-white/10">
                <p class="text-xs text-white/70 mb-1">Maritime Operations</p>
                <p class="text-sm text-white font-medium">Management System</p>
            </div>

            <ul class="space-y-2 font-medium">
                <li v-if="canEditLeadership">
                    <Link
                        :href="route('leadership.index')"
                        :class="[
                            'flex items-center p-3 rounded-lg group font-medium transition-all duration-200',
                            currentRoute.includes('/edit/leadership')
                                ? 'text-white bg-[#EA222F]/20 border-l-4 border-[#EA222F] shadow-lg'
                                : 'text-white/80 hover:bg-[#EA222F]/10 hover:text-white hover:shadow-md'
                        ]"
                    >
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                        <span class="ms-3">Leadership</span>
                    </Link>
                </li>

                <li v-if="canManageClientProjects">
                    <Link
                        :href="route('client-project-details.index')"
                        :class="[
                            'flex items-center p-3 rounded-lg group font-medium transition-all duration-200',
                            currentRoute.includes('/client-project-details')
                                ? 'text-white bg-[#EA222F]/20 border-l-4 border-[#EA222F] shadow-lg'
                                : 'text-white/80 hover:bg-[#EA222F]/10 hover:text-white hover:shadow-md'
                        ]"
                    >
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19 4h-4.18a2.988 2.988 0 0 0-5.64 0H5a2.006 2.006 0 0 0-2 2v14a2.006 2.006 0 0 0 2 2h14a2.006 2.006 0 0 0 2-2V6a2.006 2.006 0 0 0-2-2m-7 0a1 1 0 1 1-1 1a1.003 1.003 0 0 1 1-1m-2 5l2.79 2.794l2.52-2.52L14 8h4v4l-1.276-1.311l-3.932 3.935L10 11.83l-2.586 2.584L6 13Zm9 10H5v-2h14Z"/>
                        </svg>
                        <span class="ms-3">Vessel Projects</span>
                    </Link>
                </li>

                <li v-if="canManageNews">
                    <Link
                        :href="route('news.index')"
                        :class="[
                            'flex items-center p-3 rounded-lg group font-medium transition-all duration-200',
                            currentRoute.includes('/edit/news')
                                ? 'text-white bg-[#EA222F]/20 border-l-4 border-[#EA222F] shadow-lg'
                                : 'text-white/80 hover:bg-[#EA222F]/10 hover:text-white hover:shadow-md'
                        ]"
                    >
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M18 4v3h3a1 1 0 0 1 1 1v10a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1m2 14a1 1 0 1 1-2 0V9h2zM6 8a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1m2 4a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1" clip-rule="evenodd"/>
                        </svg>
                        <span class="ms-3">Maritime News</span>
                    </Link>
                </li>

                <li v-if="canViewUsers">
                    <Link
                        :href="route('admin.users.index')"
                        :class="[
                            'flex items-center p-3 rounded-lg group font-medium transition-all duration-200',
                            currentRoute.includes('/admin/users')
                                ? 'text-white bg-[#EA222F]/20 border-l-4 border-[#EA222F] shadow-lg'
                                : 'text-white/80 hover:bg-[#EA222F]/10 hover:text-white hover:shadow-md'
                        ]"
                    >
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128m-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512h388.6c16.4 0 29.7-13.3 29.7-29.7c0-98.5-79.8-178.3-178.3-178.3z"/>
                        </svg>
                        <span class="ms-3">Team Members</span>
                    </Link>
                </li>

                <li>
                    <Link
                        :href="route('admin.profile.index')"
                        :class="[
                            'flex items-center p-3 rounded-lg group font-medium transition-all duration-200',
                            currentRoute.includes('/profile')
                                ? 'text-white bg-[#EA222F]/20 border-l-4 border-[#EA222F] shadow-lg'
                                : 'text-white/80 hover:bg-[#EA222F]/10 hover:text-white hover:shadow-md'
                        ]"
                    >
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4m0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4"/>
                        </svg>
                        <span class="ms-3">My Profile</span>
                    </Link>
                </li>



                <li v-if="canManageProjects">
                    <Link
                        :href="route('projects.index')"
                        :class="[
                            'flex items-center p-3 rounded-lg group font-medium transition-all duration-200',
                            currentRoute.includes('/admin/projects') || currentRoute.includes('/projects')
                                ? 'text-white bg-[#EA222F]/20 border-l-4 border-[#EA222F] shadow-lg'
                                : 'text-white/80 hover:bg-[#EA222F]/10 hover:text-white hover:shadow-md'
                        ]"
                    >
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M4 5a2 2 0 0 1 2-2h5v7H4zm9-2h5a2 2 0 0 1 2 2v3h-7zM4 12h7v9H6a2 2 0 0 1-2-2zm9-2h7v9a2 2 0 0 1-2 2h-5z"/>
                        </svg>
                        <span class="ms-3">Projects</span>
                    </Link>
                </li>

                <li v-if="canManageProjectCategories">
                    <Link
                        :href="route('categories.index')"
                        :class="[
                            'flex items-center p-3 rounded-lg group font-medium transition-all duration-200',
                            currentRoute.includes('/categories')
                                ? 'text-white bg-[#EA222F]/20 border-l-4 border-[#EA222F] shadow-lg'
                                : 'text-white/80 hover:bg-[#EA222F]/10 hover:text-white hover:shadow-md'
                        ]"
                    >
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10 3H4a2 2 0 0 0-2 2v6h8zm2 0v8h10V5a2 2 0 0 0-2-2zM2 13v6a2 2 0 0 0 2 2h6v-8zm10 8h8a2 2 0 0 0 2-2v-6H12z"/>
                        </svg>
                        <span class="ms-3">Project Categories</span>
                    </Link>
                </li>

                <li v-if="canManageRoles">
                    <Link
                        :href="route('roles-permissions.index')"
                        :class="[
                            'flex items-center p-3 rounded-lg group font-medium transition-all duration-200',
                            currentRoute.includes('/roles-permissions')
                                ? 'text-white bg-[#EA222F]/20 border-l-4 border-[#EA222F] shadow-lg'
                                : 'text-white/80 hover:bg-[#EA222F]/10 hover:text-white hover:shadow-md'
                        ]"
                    >
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12c5.16-1.26 9-6.45 9-12V5zm0 2.19L19 6.3V11c0 4.52-2.98 8.69-7 9.93C7.98 19.69 5 15.52 5 11V6.3zm-1 12.31l6-6l-1.41-1.42L11 12.67L8.41 10.1L7 11.5z"/>
                        </svg>
                        <span class="ms-3">Roles & Permissions</span>
                    </Link>
                </li>

                <li v-if="canManageNotes">
                    <Link
                        :href="route('notes.index')"
                        :class="[
                            'flex items-center p-3 rounded-lg group font-medium transition-all duration-200',
                            currentRoute.includes('/notes')
                                ? 'text-white bg-[#EA222F]/20 border-l-4 border-[#EA222F] shadow-lg'
                                : 'text-white/80 hover:bg-[#EA222F]/10 hover:text-white hover:shadow-md'
                        ]"
                    >
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M18 4v3h3a1 1 0 0 1 1 1v10a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1m2 14a1 1 0 1 1-2 0V9h2zM6 8a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1m2 4a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1" clip-rule="evenodd"/>
                        </svg>
                        <span class="ms-3">Notes</span>
                    </Link>
                </li>

                <!-- Additional Maritime Sections -->
                <!-- <li v-if="isSpecialUser">
                    <Link
                        :href="route('home')"
                        :class="[
                            'flex items-center p-3 rounded-lg group font-medium transition-all duration-200',
                            currentRoute.includes('/operations')
                                ? 'text-white bg-[#EA222F]/20 border-l-4 border-[#EA222F] shadow-lg'
                                : 'text-white/80 hover:bg-[#EA222F]/10 hover:text-white hover:shadow-md'
                        ]"
                    >
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1l3.5 1v-1.5L13 19v-5.5z"/>
                        </svg>
                        <span class="ms-3">Operations</span>
                    </Link>
                </li>

                <li>
                    <Link
                        :href="route('home')"
                        :class="[
                            'flex items-center p-3 rounded-lg group font-medium transition-all duration-200',
                            currentRoute.includes('/reports')
                                ? 'text-white bg-[#EA222F]/20 border-l-4 border-[#EA222F] shadow-lg'
                                : 'text-white/80 hover:bg-[#EA222F]/10 hover:text-white hover:shadow-md'
                        ]"
                    >
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2M9 17H7v-7h2zm4 0h-2V7h2zm4 0h-2v-4h2z"/>
                        </svg>
                        <span class="ms-3">Port Reports</span>
                    </Link>
                </li> -->
            </ul>

            <!-- Sidebar Footer -->
            <div class="mt-8 pt-6 border-t border-white/10">
                <div class="text-center">
                    <p class="text-xs text-white/60 mb-2">APMDC Maritime</p>
                    <div class="flex justify-center items-center space-x-3">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-green-400 rounded-full mr-1"></div>
                            <span class="text-xs text-white/80">ISO 9001:2015</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-blue-400 rounded-full mr-1"></div>
                            <span class="text-xs text-white/80">Secure</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content Area with APMDC Background -->
    <div class="p-4 sm:ml-64 mt-14 min-h-screen bg-gradient-to-br from-gray-50 to-blue-50/30">
        <!-- Page Header -->
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-[#303791] font-poppins">
                Maritime Management Dashboard
            </h1>
            <p class="text-gray-600 mt-1">
                Comprehensive vessel operations and logistics management
            </p>
        </div>

        <!-- Page Content -->
        <main class="bg-white rounded-xl shadow-sm border border-gray-200/50 p-6">
            <slot />
        </main>

        <!-- Footer -->
        <div class="mt-6 text-center">
            <p class="text-xs text-gray-500">
                © 2024 APMDC - Premium Ship Agency & Logistics Services
            </p>
        </div>
    </div>
</template>

<script setup lang="ts">
import {computed, onMounted} from 'vue'
import { router, Link, usePage } from '@inertiajs/vue3';
import {
    initAccordions,
    initCarousels,
    initCollapses,
    initDials,
    initDismisses,
    initDrawers,
    initDropdowns,
    initModals,
    initPopovers,
    initTabs,
    initTooltips } from 'flowbite'

type AuthUser = {
    id: number
    name: string
    email: string
    roles?: string[]
    permissions?: string[]
    isSuperAdmin?: boolean
    can?: Record<string, boolean>
}

// initialize components based on data attribute selectors
onMounted(() => {
    initAccordions();
    initCarousels();
    initCollapses();
    initDials();
    initDismisses();
    initDrawers();
    initDropdowns();
    initModals();
    initPopovers();
    initTabs();
    initTooltips();
})

const page = usePage();
const currentRoute = page.url;
const user = computed(() => page.props.auth.user as AuthUser | null);
const canAccess = (permission: string) => computed(() => Boolean(user.value?.isSuperAdmin || user.value?.can?.[permission]));

const canEditLeadership = canAccess('editLeadership');
const canViewUsers = canAccess('viewUsers');
const canManageRoles = canAccess('manageRoles');
const canManageNews = canAccess('manageNews');
const canManageProjects = canAccess('manageProjects');
const canManageProjectCategories = canAccess('manageProjectCategories');
const canManageClientProjects = canAccess('manageClientProjects');
const canManageNotes = canAccess('manageNotes');

const logout = () => {
    router.post(route('logout'), {}, {
        onFinish: () => console.log('Logged out successfully'),
    });
};
</script>

<style scoped>
/* Custom animations for APMDC theme */
.border-\[\#EA222F\] {
    position: relative;
    overflow: hidden;
}

.border-\[\#EA222F\]::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(234, 34, 47, 0.1), transparent);
    animation: wave 2s linear infinite;
}

@keyframes wave {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

/* Smooth transitions for all interactive elements */
.bg-gradient-to-r, .bg-gradient-to-b, .bg-gradient-to-br,
.bg-\[\#EA222F\]\/20, .bg-\[\#EA222F\]\/10 {
    transition: all 0.3s ease-in-out;
}

/* Enhanced dropdown shadows */
#dropdown-user {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    border: 1px solid rgba(234, 34, 47, 0.1);
}

/* Subtle nautical animation for sidebar */
aside::before {
    content: '';
    position: absolute;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(234, 34, 47, 0.1) 0%, transparent 70%);
    bottom: -50px;
    right: -50px;
    animation: nautical 8s ease-in-out infinite;
}

@keyframes nautical {
    0%, 100% { transform: translateY(0px) scale(1); opacity: 0.3; }
    50% { transform: translateY(-10px) scale(1.1); opacity: 0.5; }
}

/* Status indicator pulse */
.animate-pulse {
    animation: status-pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

@keyframes status-pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
}

/* Hover effects for menu items */
.group:hover .group-hover\:shadow-md {
    box-shadow: 0 4px 6px -1px rgba(234, 34, 47, 0.1), 0 2px 4px -1px rgba(234, 34, 47, 0.06);
}
</style>
