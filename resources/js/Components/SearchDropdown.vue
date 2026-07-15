<template>
    <div class="mb-5">
        <label :for="inputId" class="block text-sm font-medium text-gray-700">
            {{ label }}
        </label>
        <div class="relative">
            <input
                :id="inputId"
                type="text"
                v-model="searchQuery"
                @input="filterItems"
                @blur="validateSelection"
                @focus="showDropdown"
                :placeholder="placeholder"
                class="w-full border border-gray-300 rounded-md shadow-sm p-2"
                autocomplete="off"
            />
            <!-- Dropdown -->
            <ul
                v-if="showDropdownList && filteredItems.length"
                class="absolute z-10 bg-white border border-gray-300 rounded-md mt-1 max-h-40 overflow-y-auto w-full shadow-lg"
            >
                <li
                    v-for="item in filteredItems"
                    :key="item.id"
                    @mousedown="selectItem(item)"
                    class="cursor-pointer px-3 py-2 hover:bg-gray-100"
                >
                    {{ item[displayKey] }}
                </li>
            </ul>
            <!-- No match found -->
            <p v-if="showDropdownList && !filteredItems.length" class="text-red-500 mt-2">
                No match found. Please select a valid {{ label.toLowerCase() }}.
            </p>
        </div>
        <!-- Validation Error -->
        <p v-if="validationError" class="text-red-500 mt-2">
            Please select a valid {{ label.toLowerCase() }} from the dropdown.
        </p>
    </div>
</template>

<script setup lang="ts">
import { ref, watch } from 'vue';

// Define props for the reusable dropdown
const props = defineProps({
    items: {
        type: Array as () => Array<{ id: number; [key: string]: any }>,
        required: true,
    },
    displayKey: {
        type: String,
        default: 'name',
    },
    modelValue: {
        type: Object as () => { id: number; [key: string]: any } | null,
        default: null,
    },
    label: {
        type: String,
        default: 'Item',
    },
    placeholder: {
        type: String,
        default: 'Search...',
    },
    inputId: {
        type: String,
        default: 'search-input',
    },
});

const emit = defineEmits(['update:modelValue', 'input-error']);

// Local state for search query and dropdown functionality
const searchQuery = ref<string>('');
const selectedItem = ref<{ id: number; [key: string]: any } | null>(props.modelValue);
const filteredItems = ref<typeof props.items>([]);
const showDropdownList = ref<boolean>(false);
const validationError = ref<boolean>(false);

// Filter items based on the search query
const filterItems = () => {
    const query = searchQuery.value.toLowerCase();
    if (query.trim() === '') {
        filteredItems.value = [];
        return;
    }
    filteredItems.value = props.items.filter(item =>
        item[props.displayKey].toLowerCase().includes(query)
    );
    showDropdownList.value = true;
    validationError.value = false; // Reset validation error on input
};

// Select item and emit it as the value
const selectItem = (item: { id: number; [key: string]: any }) => {
    searchQuery.value = item[props.displayKey];
    selectedItem.value = item;
    emit('update:modelValue', item);
    showDropdownList.value = false;
    validationError.value = false; // Clear validation error
};

// Validate item selection on blur
const validateSelection = () => {
    if (!selectedItem.value || selectedItem.value[props.displayKey] !== searchQuery.value) {
        validationError.value = true; // Set error if no valid item is selected
        selectedItem.value = null; // Reset selected item
        emit('update:modelValue', null); // Emit null value
        emit('input-error', `Invalid ${props.label.toLowerCase()} selected.`);
    }
    showDropdownList.value = false; // Hide dropdown
};

// Show dropdown on focus
const showDropdown = () => {
    if (filteredItems.value.length > 0) {
        showDropdownList.value = true;
    }
};

// Watch for external changes to the `modelValue` prop
watch(
    () => props.modelValue,
    newValue => {
        if (newValue) {
            searchQuery.value = newValue[props.displayKey];
            selectedItem.value = newValue;
        } else {
            searchQuery.value = '';
            selectedItem.value = null;
        }
    },
    { immediate: true } // Ensure the initial value is set
);
</script>

<style scoped>
/* Optional styles */
</style>
