<x-courier-layout>
<div class="p-2 md:p-4">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
        <div>
            <h2 class="text-2xl font-bold">Active Orders</h2>
            <p class="text-gray-500 text-sm">Manage Your Current Deliveries</p>
        </div>
        <div class="flex flex-col gap-2 md:flex-row md:gap-2 mt-2 md:mt-0">
            <button class="px-4 py-1 border rounded-full bg-white hover:bg-gray-100 text-sm">Out for Delivery</button>
            <button class="px-4 py-1 border rounded-full bg-white hover:bg-gray-100 text-sm">Completed</button>
        </div>
    </div>
    <a href="/courier/active-order-detail">
    <div class="bg-gray-200 rounded border p-4 flex flex-col md:flex-row md:items-center md:justify-between mb-2">
        
        <div>
            <div class="font-bold text-lg mb-1">Order ID #12345</div>
            <div class="text-sm font-medium">Byan • 08123456789</div>
            <div class="text-xs text-gray-700">Jl. Nangka 2 Blok 3 AF No.7 RT.3/RW.4 Pagedangan, Tangerang, Banten, 15339, Indonesia</div>
        </div>
        <div class="flex gap-2 mt-4 md:mt-0 md:ml-4">
            <button class="px-3 py-1 rounded border bg-white text-xs">Out for Delivery</button>
            <button class="px-3 py-1 rounded border bg-white text-xs">Dropdown blm</button>
        </div>
    </div>
    </a>
</div>
</x-courier-layout>