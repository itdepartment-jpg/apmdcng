<template>
    <li>
        <Link
            :href="href"
            :class="[
        'flex items-center p-2 rounded-lg group',
        active
          ? 'text-white bg-blue-600 dark:bg-blue-700'
          : 'text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'
      ]"
        >
            <svg
                class="w-5 h-5 transition duration-75"
                :class="[
          active
            ? 'text-white'
            : 'text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white'
        ]"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path fill-rule="evenodd" d="icon" clip-rule="evenodd"></path>
            </svg>
            <span class="ms-3">{{ label }}</span>
        </Link>
    </li>
</template>

<script setup lang="ts">
defineProps({
    href: { type: String, required: true },
    icon: { type: String, required: true },
    label: { type: String, required: true },
    active: { type: Boolean, default: false }
})
</script>
