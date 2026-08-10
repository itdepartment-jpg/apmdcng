<script setup lang="ts">
import { ref } from "vue";
import { Head, useForm } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";

interface LeadershipForm {
    name: string;
    position: string;
    description: string;
    category: string;
    order: number;
    email: string;
    phone: string;
    linkedin: string;
    appointed_date: string;
    image: File | null;
    display_order: number;
}

const form = useForm<LeadershipForm>({
    name: "",
    position: "",
    description: "",
    category: "",
    order: 1,
    email: "",
    phone: "",
    linkedin: "",
    appointed_date: "",
    image: null,
    display_order: 1,
});

const imagePreview = ref<string | null>(null);

const previewImage = (event: Event) => {
    const input = event.target as HTMLInputElement;

    if (!input.files?.length) {
        return;
    }

    const file = input.files[0];

    form.image = file;
    imagePreview.value = URL.createObjectURL(file);
};

const removePhoto = () => {
    form.image = null;
    imagePreview.value = null;
};

const submit = () => {
    form.post(route("admin.leadership.store"), {
        forceFormData: true,

        preserveScroll: true,

        onSuccess: () => {
            console.log("Leadership member saved successfully.");
        },

        onError: (errors) => {
            console.error("Failed to save leadership member:", errors);
        },
    });
};
</script>
    <template>
    <AuthenticatedLayout>
        <Head title="Add Leaders" />
            <div class="p-6">

            <h1 class="text-2xl font-bold mb-6">
                Create Leader
            </h1>

            <div class="bg-white rounded-xl shadow p-6">

                <form @submit.prevent="submit">

                    <div class="flex items-start gap-8">

                        <!-- =========================================
                            PROFILE PHOTO
                        ========================================== -->

                        <div class="w-80 flex-shrink-0">

                            <!-- Photo Card -->

                            <!-- =========================================
                                PROFILE PHOTO
                            ========================================= -->

                            <div class="w-80 flex-shrink-0">

                                <div class="rounded-2xl border border-gray-200 bg-white shadow-sm">

                                    <!-- Card Header -->

                                    <div class="border-b px-6 py-4">

                                        <h2 class="text-lg font-semibold text-gray-800">
                                            Profile Photo
                                        </h2>

                                        <p class="mt-1 text-sm text-gray-500">
                                            Upload the leader's profile picture.
                                        </p>

                                    </div>

                                    <!-- Card Body -->

                                    <div class="p-6">

                                        <!-- Image Preview -->

                                        <!-- =========================================
                                            IMAGE PREVIEW
                                        ========================================= -->

                                        <div
                                            class="relative flex h-80 w-full items-center justify-center overflow-hidden rounded-xl border-2 border-dashed border-gray-300 bg-gray-50 transition hover:border-[#303791]"
                                        >

                                            <!-- Preview -->

                                            <img
                                                v-if="imagePreview"
                                                :src="imagePreview"
                                                class="h-full w-full object-cover"
                                            >

                                            <!-- Empty State -->

                                            <div
                                                v-else
                                                class="text-center"
                                            >

                                                <div
                                                    class="mx-auto flex h-24 w-24 items-center justify-center rounded-full bg-gray-200"
                                                >

                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-12 w-12 text-gray-500"
                                                        fill="none"
                                                        viewBox="0 0 24 24"
                                                        stroke="currentColor"
                                                    >
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="1.5"
                                                            d="M16 7a4 4 0 10-8 0m8 0H8m8 0v10a2 2 0 01-2 2H10a2 2 0 01-2-2V7"
                                                        />
                                                    </svg>

                                                </div>

                                                <h4 class="mt-5 font-semibold text-gray-700">
                                                    Upload Profile Photo
                                                </h4>

                                                <p class="mt-2 text-sm text-gray-500">
                                                    Drag & Drop or Click to Upload
                                                </p>

                                            </div>

                                        </div>

                                        <!-- Upload Button -->

                                        <label
                                            class="mt-6 flex cursor-pointer items-center justify-center rounded-lg bg-[#303791] px-5 py-3 font-semibold text-white transition hover:bg-[#252d72]"
                                        >

                                            Choose Image

                                            <input
                                                type="file"
                                                accept="image/*"
                                                class="hidden"
                                                @change="previewImage"
                                            >

                                        </label>

                                        <!-- Remove Button -->

                                        <button
                                            v-if="imagePreview"
                                            type="button"
                                            @click="removePhoto"
                                            class="mt-3 w-full rounded-lg border border-red-300 px-5 py-3 font-medium text-red-600 transition hover:bg-red-50"
                                        >

                                            Remove Photo

                                        </button>

                                        <!-- Help Text -->

                                        <div class="mt-6 rounded-lg bg-gray-50 p-4">

                                            <h5 class="font-semibold text-gray-700">
                                                Upload Requirements
                                            </h5>

                                            <ul class="mt-3 space-y-2 text-sm text-gray-500">

                                                <li>✓ JPG, PNG or WEBP</li>

                                                <li>✓ Maximum size: 2 MB</li>

                                                <li>✓ Recommended: 500 × 500 pixels</li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- =========================================
                            LEADER INFORMATION
                        ========================================= -->

                        <div class="flex-1">

                            <div class="rounded-2xl border border-gray-200 bg-white shadow-sm">

                                <!-- Card Header -->

                                <div class="border-b px-6 py-4">

                                    <h2 class="text-lg font-semibold text-gray-800">
                                        Leader Information
                                    </h2>

                                    <p class="mt-1 text-sm text-gray-500">
                                        Enter the leader's profile details.
                                    </p>

                                </div>

                                <!-- Card Body -->

                                <div class="p-6">

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                                        <!-- Full Name -->

                                        <div>

                                            <label class="block mb-2 text-sm font-medium text-gray-700">
                                                Full Name <span class="text-red-500">*</span>
                                            </label>

                                            <input
                                                v-model="form.name"
                                                type="text"
                                                placeholder="Enter Full Name"
                                                class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[#EA222F] focus:ring-[#EA222F]"
                                            />
                                            <InputError
                                                class="mt-2"
                                                :message="form.errors.name"
                                            />

                                        </div>

                                        <!-- Position -->

                                        <div>

                                            <label class="block mb-2 text-sm font-medium text-gray-700">
                                                Position <span class="text-red-500">*</span>
                                            </label>

                                            <input
                                                v-model="form.position"
                                                type="text"
                                                placeholder="Managing Director"
                                                class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[#EA222F] focus:ring-[#EA222F]"
                                            />
                                            <InputError
                                                class="mt-2"
                                                :message="form.errors.position"
                                            />

                                        </div>

                                        <!-- Category -->

                                        <div>

                                            <label class="block mb-2 text-sm font-medium text-gray-700">
                                                Category
                                            </label>

                                            <select v-model="form.category" class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[#EA222F] focus:ring-[#EA222F]">

                                                    <option value="">
                                                        Select Category
                                                    </option>

                                                    <option value="executive">
                                                        Executive Leadership
                                                    </option>

                                                    <option value="senior">
                                                        Senior Management
                                                    </option>

                                                    <option value="key">
                                                        Key Personnel
                                                    </option>

                                                

                                            </select>

                                        </div>

                                        <!-- Display Order -->

                                        <div>

                                            <label class="block mb-2 text-sm font-medium text-gray-700">
                                                Display Order
                                            </label>

                                            <input
                                                v-model="form.display_order"
                                                type="number"
                                                min="1"
                                                class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[#EA222F] focus:ring-[#EA222F]"
                                            />

                                        </div>

                                        <!-- Email -->

                                        <div>

                                            <label class="block mb-2 text-sm font-medium text-gray-700">
                                                Email Address
                                            </label>

                                            <input
                                                v-model="form.email"
                                                type="email"
                                                placeholder="john.doe@apmdcng.com"
                                                class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[#EA222F] focus:ring-[#EA222F]"
                                            />
                                            <InputError
                                                class="mt-2"
                                                :message="form.errors.email"
                                            />

                                        </div>

                                        <!-- LinkedIn -->

                                        <div>

                                            <label class="block mb-2 text-sm font-medium text-gray-700">
                                                LinkedIn Profile
                                            </label>

                                            <input
                                                v-model="form.linkedin"
                                                type="url"
                                                placeholder="https://linkedin.com/in/johndoe"
                                                class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[#EA222F] focus:ring-[#EA222F]"
                                            />

                                        </div>

                                        <div>

                                            <label class="block mb-2 text-sm font-medium text-gray-700">
                                                Phone Number
                                            </label>

                                            <input
                                                v-model="form.phone"
                                                type="text"
                                                placeholder="+234..."
                                                class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[#EA222F] focus:ring-[#EA222F]"
                                            />

                                            <InputError
                                                class="mt-2"
                                                :message="form.errors.phone"
                                            />

                                        </div>

                                        <div>

                                            <label class="block mb-2 text-sm font-medium text-gray-700">
                                                Appointed Date
                                            </label>

                                            <input
                                                v-model="form.appointed_date"
                                                type="date"
                                                class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[#EA222F] focus:ring-[#EA222F]"
                                            />

                                            <InputError
                                                class="mt-2"
                                                :message="form.errors.appointed_date"
                                            />

                                        </div>

                                    </div>

                                    <!-- Biography -->

                                    <div class="mt-6">

                                        <label class="block mb-2 text-sm font-medium text-gray-700">
                                            Biography
                                        </label>

                                        <textarea
                                            v-model="form.description"
                                            rows="8"
                                            placeholder="Write a short biography about this leader..."
                                            class="w-full rounded-lg border border-gray-300 px-4 py-3"
                                        ></textarea>

                                                                    <InputError
                                class="mt-2"
                                :message="form.errors.description"
                            />

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- =========================================
                        ACTION BUTTONS
                    ========================================== -->

                    <div class="mt-8 flex justify-end gap-3">

                        <button
                            type="button"
                            @click="$inertia.visit(route('leadership.index'))"
                            class="rounded-lg border border-gray-300 px-6 py-3 hover:bg-gray-100"
                        >
                            Cancel
                        </button>

                        <button
                            type="submit"
                            :disabled="form.processing"
                             class="rounded-lg bg-[#EA222F] px-6 py-3 font-semibold text-white hover:bg-red-700"
                        >
                             {{ form.processing ? "Saving Leader..." : "Save Leader" }}
                        </button>

                    </div>

                </form>

                </div>

                </div>
 </AuthenticatedLayout>
</template>