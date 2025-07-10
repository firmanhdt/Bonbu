<x-app-layout>
<div class="max-w-7xl mx-auto py-8 px-4 flex flex-col md:flex-row gap-8">
    <!-- Kiri: Menu -->
    <div class="flex-1 min-w-0">
        <h1 class="text-2xl font-bold mb-4">Menu</h1>
        <div class="flex flex-wrap gap-2 mb-6">
        <button class="px-4 py-1 border rounded-full bg-gray-100 text-sm font-medium hover:bg-gray-200">Starter and Snack</button>
        <button class="px-4 py-1 border rounded-full bg-gray-100 text-sm font-medium hover:bg-gray-200">Mains</button>
        <button class="px-4 py-1 border rounded-full bg-gray-100 text-sm font-medium hover:bg-gray-200">Bonbu Signature Drinks</button>
        <button class="px-4 py-1 border rounded-full bg-gray-100 text-sm font-medium hover:bg-gray-200">Desserts</button>
        <button class="px-4 py-1 border rounded-full bg-gray-100 text-sm font-medium hover:bg-gray-200">Packages</button>
        <button class="px-4 py-1 border rounded-full bg-gray-100 text-sm font-medium hover:bg-gray-200">Add-ons</button>
        <button class="px-4 py-1 border rounded-full bg-gray-100 text-sm font-medium hover:bg-gray-200">Beverages</button>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
        @for($i=0; $i<8; $i++)
        <div class="border rounded-lg bg-white p-3 flex flex-col">
            <img src="{{ asset('img/menu-sample.png') }}" alt="Korean Chicken Bites" class="rounded w-full h-32 object-cover mb-2">
            <div class="font-semibold text-sm mb-1">Korean Chicken Bites - Dakganjeong Sauce</div>
            <div class="text-blue-600 font-bold text-sm mb-1">Rp. 49.000</div>
            <div class="text-xs text-gray-500 mb-2">Starter and Snack</div>
            <div class="flex items-center gap-2 mt-auto">
            <button class="border rounded px-2 py-1 text-lg">-</button>
            <input type="text" value="1" class="w-8 text-center border rounded py-1 text-sm" readonly>
            <button class="border rounded px-2 py-1 text-lg">+</button>
            </div>
        </div>
        @endfor
        </div>
    </div>
    <!-- Kanan: Cart -->
    <div class="w-full md:w-80 flex-shrink-0">
        <div class="border rounded-lg bg-white p-4 mb-4">
        <div class="font-bold mb-2">Byan</div>
        <div class="text-xs text-gray-600 mb-1">Delivery Address</div>
        <div class="text-sm mb-2">Jl. Nangka 2 Blok 3 AF No.7 RT.3/RW.4 Pagedangan, Tangerang, Banten, 15339, Indonesia</div>
        <button class="border rounded px-2 py-1 text-xs font-medium hover:bg-gray-100">Change Address</button>
        </div>
        <div class="border rounded-lg bg-white p-4">
        <div class="font-bold mb-2">Cart</div>
        @for($i=0; $i<3; $i++)
        <div class="flex gap-2 mb-3 items-start">
            <img src="{{ asset('img/menu-sample.png') }}" alt="Korean Chicken Bites" class="rounded w-12 h-12 object-cover">
            <div class="flex-1">
            <div class="font-semibold text-xs leading-tight">Korean Chicken Bites - Dakganjeong Sauce</div>
            <div class="text-blue-600 font-bold text-xs">Rp. 49.000</div>
            <div class="text-xs text-gray-500 mb-1">Starter and Snack</div>
            <div class="flex items-center gap-1 mb-1">
                <button class="border rounded px-2 py-0.5 text-xs">-</button>
                <input type="text" value="1" class="w-6 text-center border rounded py-0.5 text-xs" readonly>
                <button class="border rounded px-2 py-0.5 text-xs">+</button>
            </div>
            <input type="text" class="w-full border rounded px-2 py-1 text-xs mb-1" placeholder="Add Notes..">
            </div>
        </div>
        @endfor
        <div class="border-t my-2"></div>
        <div class="flex justify-between text-xs mb-1">
            <span>Sub Total</span>
            <span>Rp. 275.000</span>
        </div>
        <div class="flex justify-between text-xs mb-1">
            <span>Delivery Charge</span>
            <span>Rp. 10.000</span>
        </div>
        <div class="border-t my-2"></div>
        <div class="flex justify-between font-bold text-base mb-2">
            <span>Total</span>
            <span>Rp. 285.000</span>
        </div>
        <a href="/checkout">
        <button class="w-full bg-gray-200 border rounded py-2 font-semibold hover:bg-gray-300">Checkout</button>
        </a>
        </div>
    </div>
    </div> 
</x-app-layout>