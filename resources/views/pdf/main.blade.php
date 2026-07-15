<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Invoice</title>
    <style>
        /* Custom font for a professional look */
        body {
            font-family: 'Inter', sans-serif;

        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-sans">
<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
{{--        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">--}}
            <div class="overflow-hidden bg-white ">
            <div class="p-6 text-gray-900">
                <div class="max-w-4xl mx-auto bg-white">
                    <!-- Header -->
                    <div class="p-6">
                        <div class="flex justify-between items-center">
                            <div>
                                <img src="https://techsterlab.com/mainlogo.png" alt="HightechFusion Logo" class="h-12"> <!-- Adjust height as needed -->
                                <h1 class="text-3xl font-bold text-gray-800 mt-2">Invoice</h1>
                                <p class="text-gray-600 text-sm mt-1">Invoice #{{ $invoice->invoice_number }}</p>
                                <p class="text-gray-600 text-sm">Date: 2024-12-18</p>
                            </div>
                            <div class="text-right">
                                <h2 class="text-xl font-semibold text-gray-800">Your Company</h2>
                                <p class="text-gray-600 text-sm">123 Business Road</p>
                                <p class="text-gray-600 text-sm">City, Country</p>
                                <p class="text-gray-600 text-sm">Email: info@yourcompany.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- Client Information -->
                    <div class="p-6 border-t border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-800">Bill To:</h3>
                        <p class="text-gray-600 text-sm">{{ $recipient->name }}</p>
                        <p class="text-gray-600 text-sm">{{ $recipient->address }}</p>
                        <p class="text-gray-600 text-sm">{{ $recipient->city }}, {{ $recipient->state }}</p>
                        <p class="text-gray-600 text-sm">Nigeria</p>
                    </div>

                    <!-- Invoice Items -->
                    <div class="p-6 border-t border-gray-200">
                        <table class="w-full mb-4">
                            <thead>
                            <tr class="bg-gray-100">
                                <th class="border-b border-gray-200 px-4 py-2 text-left text-gray-600 text-sm font-medium">Description</th>
                                <th class="border-b border-gray-200 px-4 py-2 text-right text-gray-600 text-sm font-medium">Qty</th>
                                <th class="border-b border-gray-200 px-4 py-2 text-right text-gray-600 text-sm font-medium">Rate</th>
                                <th class="border-b border-gray-200 px-4 py-2 text-right text-gray-600 text-sm font-medium">TAX</th>
                                <th class="border-b border-gray-200 px-4 py-2 text-right text-gray-600 text-sm font-medium">Amount</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($invoice->items as $item)


                            <tr>
                                <td class="border-b border-gray-200 px-4 py-2 text-sm text-gray-700 align-top">
                                    <p>{{ $item->description }}</p>
                                </td>
                                <td class="border-b border-gray-200 px-4 py-2 text-right text-sm text-gray-700 align-top">{{ $item->quantity }}</td>
                                <td class="border-b border-gray-200 px-4 py-2 text-right text-sm text-gray-700 align-top">{{ number_format($item->unit_price, 2) }}</td>
                                <td class="border-b border-gray-200 px-4 py-2 text-right text-sm text-gray-700 align-top" ><div>
                                        <p>{{ number_format(($item->quantity * $item->unit_price) * 0.075, 2) }}</p>
                                        <p>7.5</p>

                                    </div></td>
                                <td class="border-b border-gray-200 px-4 py-2 text-right text-sm text-gray-700 align-top">{{ number_format($item->quantity * $item->unit_price, 2) }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="flex justify-end items-end">
                            <div class="text-right">
                                <p class="text-lg font-semibold text-gray-800">Subtotal:555</p>
                                <p class="text-lg font-semibold text-gray-800">VAT: 1000</p>
{{--                                <p class="text-2xl font-bold text-gray-900 mt-2">Grand Total: NGN{{ number_format($invoice->grand_total, 2) }}</p>--}}
                                <p class="text-lg font-bold text-gray-900 mt-2">Total: NGN{{ number_format($invoice->grand_total, 2) }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="border-t border-gray-200 p-6">
                        <p class="text-gray-600 text-sm text-center">Thank you for your business!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
