<script setup lang="ts">
import { PencilSquareIcon, TrashIcon } from "@heroicons/vue/24/outline";

interface Member {
    id: number;
    name: string;
    position: string;
    image_url: string | null;
    category: string;
    order: number;
}

defineProps<{
    title: string;
    members: Member[];
    canEdit: boolean;
}>();

const emit = defineEmits([
    "edit",
    "delete",
]);
</script>

<template>

<div class="bg-white rounded-xl shadow-sm border border-gray-200">

    <!-- Header -->

    <div
        class="px-6 py-4 border-b flex items-center justify-between">

        <h2
            class="text-xl font-bold text-gray-800">

            {{ title }}

        </h2>

        <span
            class="text-sm text-gray-500">

            {{ members.length }} Members

        </span>

    </div>

    <!-- Table -->

    <div class="overflow-x-auto">

        <table class="min-w-full">

            <thead class="bg-gray-50">

                <tr>

                    <th class="px-6 py-3 text-left">
                        Photo
                    </th>

                    <th class="px-6 py-3 text-left">
                        Name
                    </th>

                    <th class="px-6 py-3 text-left">
                        Position
                    </th>

                    <th class="px-6 py-3 text-center">
                        Order
                    </th>

                    <th class="px-6 py-3 text-right">
                        Actions
                    </th>

                </tr>

            </thead>

            <tbody>

                <tr
                    v-for="member in members"
                    :key="member.id"
                    class="border-t hover:bg-gray-50">

                    <td class="px-6 py-4">

                        <img
                            v-if="member.image_url"
                            :src="member.image_url"
                            class="w-14 h-14 rounded-lg object-cover">

                        <div
                            v-else
                            class="w-14 h-14 rounded-lg bg-gray-200">
                        </div>

                    </td>

                    <td class="px-6 py-4 font-semibold">

                        {{ member.name }}

                    </td>

                    <td class="px-6 py-4">

                        {{ member.position }}

                    </td>

                    <td class="px-6 py-4 text-center">

                        {{ member.order }}

                    </td>

                    <td
                        class="px-6 py-4">

                        <div
                            class="flex justify-end gap-2">

                            <button
                                v-if="canEdit"
                                @click="emit('edit', member)"
                                class="p-2 rounded-lg bg-blue-100 hover:bg-blue-200">

                                <PencilSquareIcon
                                    class="w-5 h-5 text-blue-600"/>

                            </button>

                            <button
                                v-if="canEdit"
                                @click="emit('delete', member.id)"
                                class="p-2 rounded-lg bg-red-100 hover:bg-red-200">

                                <TrashIcon
                                    class="w-5 h-5 text-red-600"/>

                            </button>

                        </div>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

</template>