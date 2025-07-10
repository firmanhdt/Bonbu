<x-courier-layout>
<div class="p-2 md:p-4 max-w-3xl mx-auto">
    <div class="flex items-center mb-6">
        <a href="/courier/active-order" class="mr-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </a>
        <h2 class="text-xl font-bold">Order ID #12345</h2>
    </div>
    <div class="border rounded-lg bg-white mb-4 p-0">
        <div class="font-semibold px-4 pt-4 pb-2">Order Summary</div>
        <div class="px-4 pb-4">
            <div class="grid grid-cols-3 font-semibold border-b py-1">
                <div class="text-left">Product</div>
                <div class="text-center">Qty</div>
                <div class="text-right">Price</div>
            </div>
            <div class="grid grid-cols-3 py-1 border-b">
                <div class="text-left">Korean Chicken Bites - Dakgangjeong Sauce</div>
                <div class="text-center">2</div>
                <div class="text-right">Rp. 110.000</div>
            </div>
            <div class="grid grid-cols-3 py-1 border-b">
                <div class="text-left">Bibimbap Chicken</div>
                <div class="text-center">2</div>
                <div class="text-right">Rp. 110.000</div>
            </div>
            <div class="grid grid-cols-3 py-1 border-b">
                <div class="text-left">Sundubuijigae</div>
                <div class="text-center">1</div>
                <div class="text-right">Rp. 55.000</div>
            </div>
            <div class="grid grid-cols-3 py-1 border-b font-semibold">
                <div class="text-left">Sub Total</div>
                <div class="text-center">5</div>
                <div class="text-right">Rp. 275.000</div>
            </div>
            <div class="grid grid-cols-3 py-1 border-b">
                <div class="text-left">Delivery Charge</div>
                <div></div>
                <div class="text-right">Rp. 10.000</div>
            </div>
            <div class="grid grid-cols-3 py-2 font-bold text-lg">
                <div class="text-left">Total</div>
                <div></div>
                <div class="text-right">Rp. 285.000</div>
            </div>
        </div>
    </div>
    <div class="border rounded-lg bg-white mb-6 p-4">
        <div class="font-semibold mb-1">Byan</div>
        <div class="text-sm text-gray-700">Jl. Nangka 2 Blok 3 AF No.7 RT.3/RW.4 Pagedangan, Tangerang, Banten, 15339, Indonesia</div>
    </div>
    <div class="flex gap-4 justify-center mt-8">
        <button class="px-8 py-2 border rounded-full bg-white hover:bg-gray-100">Out for Delivery</button>
        <button class="px-8 py-2 border rounded-full bg-white hover:bg-gray-100">Completed</button>
    </div>
</div>
</x-courier-layout>