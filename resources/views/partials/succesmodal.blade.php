<!-- Ocean-Themed Success Modal -->
<div id="successModal" class="fixed inset-0 z-[100] flex items-center justify-center hidden backdrop-blur-sm">
    <!-- Ocean wave background effect -->
    <div class="absolute inset-0 bg-gradient-to-b from-blue-900/80 to-teal-800/80 opacity-90"></div>

    <!-- Modal Container with marine styling -->
    <div class="relative bg-white/95 backdrop-blur-md rounded-xl shadow-2xl max-w-md w-full mx-4 overflow-hidden border border-blue-200/30 z-10 animate-fade-in-down">
        <!-- Wave header -->
        <div class="bg-gradient-to-r from-blue-600 to-teal-600 py-4 px-6 relative overflow-hidden">
            <div class="absolute -bottom-6 left-0 right-0 h-6 bg-white/95 clip-wave"></div>
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <h3 class="text-xl font-bold text-white ml-2 font-serif">Message Sent!</h3>
                </div>
                <button onclick="hideModal()" class="text-white/80 hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Bubble decoration -->
        <div class="absolute top-4 right-6">
            <div class="bubble w-4 h-4 bg-white/40 rounded-full"></div>
        </div>

        <!-- Content -->
        <div class="p-6 relative">
            <div class="flex items-start mb-4">
                <div class="bg-blue-100 p-3 rounded-full mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div class="text-gray-700" id="modalMessage"></div>
            </div>

            <!-- Progress bar (countdown timer) -->
{{--            <div class="h-1.5 bg-blue-100 rounded-full overflow-hidden mt-4">--}}
{{--                <div id="modalProgress" class="h-full bg-gradient-to-r from-blue-500 to-teal-500 w-full"></div>--}}
{{--            </div>--}}
        </div>

        <!-- Footer with marine buttons -->
        <div class="px-6 pb-6">
            <button onclick="hideModal()" class="w-full bg-gradient-to-r from-blue-600 to-teal-600 text-white py-3 px-6 rounded-lg hover:from-blue-700 hover:to-teal-700 transition-all duration-300 shadow-lg font-medium flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                OK
            </button>
        </div>
    </div>
</div>

<style>
    /* Wave clip path */
    .clip-wave {
        clip-path: path('M0,0 C150,20 250,0 350,20 C450,40 550,0 700,20 L800,0 L800,100 L0,100 Z');
    }

    /* Bubble animation */
    .bubble {
        animation: floatUp 4s ease-in-out infinite;
        opacity: 0.7;
    }

    @keyframes floatUp {
        0% { transform: translateY(0) scale(0.8); opacity: 0.7; }
        50% { opacity: 0.9; }
        100% { transform: translateY(-30px) scale(1.1); opacity: 0; }
    }

    /* Modal animation */
    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .animate-fade-in-down {
        animation: fadeInDown 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    /* Progress bar animation */
    #modalProgress {
        animation: progress 3s linear forwards;
    }

    @keyframes progress {
        from { width: 100%; }
        to { width: 0%; }
    }
</style>

<script>
    function hideModal() {
        const modal = document.getElementById('successModal');
        modal.classList.add('hidden');
    }

    // Auto-hide after 3 seconds
    function showSuccessModal(message) {
        const modal = document.getElementById('successModal');
        const messageEl = document.getElementById('modalMessage');

        messageEl.textContent = message;
        modal.classList.remove('hidden');

        setTimeout(() => {
            modal.classList.add('hidden');
        }, 3000);
    }
</script>
