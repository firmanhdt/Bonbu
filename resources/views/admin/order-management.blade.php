<x-admin-layout>
    <div class="p-2 md:p-4">
        <h2 class="text-2xl font-bold">Order Management</h2>
        <p class="text-sm text-gray-500 mb-4">Manage Customer Orders</p>
        <div class="flex flex-wrap gap-2 mb-4 bg-gray-100 p-2 rounded-full">
            <button class="px-4 py-1 rounded-full border bg-white hover:bg-gray-100 text-sm">New Orders</button>
            <button class="px-4 py-1 rounded-full border bg-white hover:bg-gray-100 text-sm">In Progress</button>
            <button class="px-4 py-1 rounded-full border bg-white hover:bg-gray-100 text-sm">Out for Delivery</button>
            <button class="px-4 py-1 rounded-full border bg-white hover:bg-gray-100 text-sm">Completed</button>
            <button class="px-4 py-1 rounded-full border bg-white hover:bg-gray-100 text-sm">All Orders</button>
        </div>
        @for ($i = 0; $i < 2; $i++)
        <div class="bg-gray-200 rounded border mb-6 p-4">
            <div class="flex flex-wrap items-center justify-between mb-2">
                <div class="font-bold text-lg">Order ID #12345</div>
                <div class="flex gap-2">
                    <button class="px-3 py-1 rounded border bg-white text-xs">New Orders</button>
                    <button class="px-3 py-1 rounded border bg-white text-xs">Dropdown blm</button>
                </div>
            </div>
            <div class="text-sm font-medium">Byan • 08123456789</div>
            <div class="text-xs text-gray-700 mb-2">Jl. Nangka 2 Blok 3 AF No.7 RT.3/RW.4 Pagedangan, Tangerang, Banten, 15339, Indonesia</div>
            <div class="bg-white border rounded p-4 mb-2">
                <div class="font-semibold mb-2">Order Summary</div>
                <div class="grid grid-cols-6 gap-2 text-sm mb-1">
                    <div class="col-span-3">Korean Chicken Bites - Dakgangjeong Sauce</div>
                    <div class="col-span-1 text-right">Qty: 2</div>
                    <div class="col-span-2 text-right">Rp. 110.000</div>
                </div>
                <div class="grid grid-cols-6 gap-2 text-sm mb-1">
                    <div class="col-span-3">Bibimbap Chicken</div>
                    <div class="col-span-1 text-right">Qty: 2</div>
                    <div class="col-span-2 text-right">Rp. 110.000</div>
                </div>
                <div class="grid grid-cols-6 gap-2 text-sm mb-1">
                    <div class="col-span-3">Sundubuijigae</div>
                    <div class="col-span-1 text-right">Qty: 1</div>
                    <div class="col-span-2 text-right">Rp. 55.000</div>
                </div>
                <div class="flex justify-between font-semibold border-t pt-2 mt-2 text-sm">
                    <div>Sub Total</div>
                    <div>Qty: 5</div>
                    <div class="col-span-2 text-right">Rp. 275.000</div>
                </div>
                <div class="flex justify-between text-sm">
                    <div>Delivery Change</div>
                    <div></div>
                    <div class="col-span-2 text-right">Rp. 10.000</div>
                </div>
                <div class="flex justify-between font-bold border-t pt-2 mt-2 text-sm">
                    <div>Total</div>
                    <div></div>
                    <div class="col-span-2 text-right">Rp. 285.000</div>
                </div>
            </div>
            <div class="bg-white border rounded p-3 text-sm">
                <div class="font-semibold mb-1">Courier Information</div>
                <div>zzzxxsaa • 08123456789</div>
            </div>
        </div>
        @endfor
    </div>
</x-admin-layout> 