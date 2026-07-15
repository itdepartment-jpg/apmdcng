<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site Under Maintenance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css') {{-- Make sure Tailwind is compiled --}}
    <style>
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-white text-blue-900 flex items-center justify-center min-h-screen">
<div class="text-center animate-[fadeIn_1s_ease-out] px-6">
    <img src="{{ asset('images/tethyslogoooooxx.png') }}" alt="Tethys Logo" class="mx-auto w-48 mb-6">

    <div class="flex justify-center mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-yellow-500 animate-[bounce_1s_infinite]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 20.5C6.753 20.5 2.5 16.247 2.5 11S6.753 1.5 12 1.5 21.5 5.753 21.5 11 17.247 20.5 12 20.5z" />
        </svg>
    </div>

    <h1 class="text-3xl md:text-4xl font-bold mb-2">We're Under Maintenance</h1>
    <p class="text-lg text-blue-600 mb-6">Our team is currently working on some updates. We’ll be back shortly!</p>

    <div class="flex justify-center">
        <div class="w-6 h-6 border-4 border-blue-400 border-t-transparent rounded-full animate-spin"></div>
    </div>
</div>
</body>
</html>
