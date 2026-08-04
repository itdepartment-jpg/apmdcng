<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div class="py-8">
            <div class="max-w-7xl mx-auto px-6">

                <!-- Welcome Section -->
                <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
                    <h1 class="text-3xl font-bold text-gray-800">
                        Welcome to APMDC Admin Portal
                    </h1>
                    
                   

                    <p class="text-gray-500 mt-2">
                        Manage your website, shipments, blog, leadership, and users
                        from one central dashboard.
                    </p>
                </div>

                <div class="mt-12 mb-8">

                    <h2 class="text-xl font-semibold text-slate-800">
                        Overview
                    </h2>

                    <p class="text-slate-500">
                        A snapshot of today's operations.
                    </p>

                </div>

               <!-- =========================================
                    DASHBOARD OVERVIEW CARDS
                ========================================= -->

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

                    <!-- Blog -->
                    <Link
                        href="/admin/blog"
                        class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
                    >
                        <div>
                            <p class="text-sm font-medium text-gray-500">
                                📝 Blog Posts
                            </p>

                            <h2 class="mt-3 text-4xl font-bold text-indigo-600">
                                0
                            </h2>
                        </div>

                        <p class="mt-8 text-sm font-semibold text-indigo-600">
                            Manage Blog →
                        </p>
                    </Link>

                    <!-- Shipments -->
                    <Link
                        href="/admin/shipments"
                        class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
                    >
                        <div>
                            <p class="text-sm font-medium text-gray-500">
                                🚢 Shipments
                            </p>

                            <h2 class="mt-3 text-4xl font-bold text-green-600">
                                0
                            </h2>
                        </div>

                        <p class="mt-8 text-sm font-semibold text-green-600">
                            Manage Shipments →
                        </p>
                    </Link>

                    <!-- Leadership -->
                    <Link
                        href="/admin/team"
                        class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
                    >
                        <div>
                            <p class="text-sm font-medium text-gray-500">
                                👥 Leadership
                            </p>

                            <h2 class="mt-3 text-4xl font-bold text-blue-600">
                                0
                            </h2>
                        </div>

                        <p class="mt-8 text-sm font-semibold text-blue-600">
                            Manage Leadership →
                        </p>
                    </Link>

                    <!-- Users -->
                    <Link
                        href="/admin/users"
                        class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
                    >
                        <div>
                            <p class="text-sm font-medium text-gray-500">
                                👤 Users
                            </p>

                            <h2 class="mt-3 text-4xl font-bold text-red-600">
                                0
                            </h2>
                        </div>

                        <p class="mt-8 text-sm font-semibold text-red-600">
                            Manage Users →
                        </p>
                    </Link>

                </div>

                <!-- Quick Actions -->
                <div class="bg-white rounded-xl shadow-sm p-6 mt-10">

                    <h2 class="text-xl font-semibold text-gray-800 mt-12 mb-8">
                        Quick Actions
                    </h2>

                    <div class="flex flex-wrap gap-4">

                        <Link
                            href="/admin/blog/create"
                            class="px-5 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition"
                        >
                            + New Blog Post
                        </Link>

                        <Link
                            href="/admin/shipments/create"
                            class="px-5 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition"
                        >
                            + Add Shipment
                        </Link>

                        <Link
                            href="/admin/team/create"
                            class="px-5 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition"
                        >
                            + Add Leader
                        </Link>

                        <Link
                            href="/admin/users"
                            class="px-5 py-3 bg-gray-800 text-white rounded-lg hover:bg-black transition"
                        >
                            Manage Users
                        </Link>

                    </div>

                </div>

                <!-- =========================================
     COMING SOON
========================================= -->

<div class="mt-14">

    <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-800">
            🚀 Coming Soon
        </h2>

        <p class="mt-2 text-slate-500">
            Exciting new modules and operational tools currently under development.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

        <!-- Shipment Tracking -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
            <div class="text-4xl mb-4">📦</div>

            <h3 class="text-lg font-semibold text-slate-800">
                Shipment Tracking
            </h3>

            <p class="mt-2 text-sm text-slate-500">
                Track containers, vessels, ETAs and shipment status in real time.
            </p>

            <span class="inline-block mt-5 px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs font-semibold">
                In Development
            </span>
        </div>

        <!-- Vessel Monitoring -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
            <div class="text-4xl mb-4">🚢</div>

            <h3 class="text-lg font-semibold text-slate-800">
                Vessel Monitoring
            </h3>

            <p class="mt-2 text-sm text-slate-500">
                Monitor incoming vessels, port arrivals, departures and schedules.
            </p>

            <span class="inline-block mt-5 px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs font-semibold">
                Planned
            </span>
        </div>

        <!-- Analytics -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
            <div class="text-4xl mb-4">📊</div>

            <h3 class="text-lg font-semibold text-slate-800">
                Business Analytics
            </h3>

            <p class="mt-2 text-sm text-slate-500">
                Interactive dashboards with shipment trends, customer insights and operational KPIs.
            </p>

            <span class="inline-block mt-5 px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-semibold">
                Phase 2
            </span>
        </div>

        <!-- Notifications -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
            <div class="text-4xl mb-4">🔔</div>

            <h3 class="text-lg font-semibold text-slate-800">
                Smart Notifications
            </h3>

            <p class="mt-2 text-sm text-slate-500">
                Receive alerts for shipment updates, vessel arrivals and important system activities.
            </p>

            <span class="inline-block mt-5 px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-xs font-semibold">
                Upcoming
            </span>
        </div>

        <!-- Warehouse -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
            <div class="text-4xl mb-4">🏢</div>

            <h3 class="text-lg font-semibold text-slate-800">
                Warehouse Management
            </h3>

            <p class="mt-2 text-sm text-slate-500">
                Manage warehouse inventory, storage allocation and cargo movements.
            </p>

            <span class="inline-block mt-5 px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-xs font-semibold">
                Roadmap
            </span>
        </div>

        <!-- Customer Portal -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
            <div class="text-4xl mb-4">🌍</div>

            <h3 class="text-lg font-semibold text-slate-800">
                Customer Portal
            </h3>

            <p class="mt-2 text-sm text-slate-500">
                Allow customers to track shipments, request quotes and access shipping documents online.
            </p>

            <span class="inline-block mt-5 px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">
                Future Release
            </span>
        </div>

    </div>

</div>

            </div>
        </div>

    </AuthenticatedLayout>
</template>