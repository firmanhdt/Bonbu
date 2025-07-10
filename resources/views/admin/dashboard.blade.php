<x-admin-layout>
    <div class="p-2 md:p-4">
        <h2 class="text-2xl font-bold">Dashboard Overview</h2>
        <p class="text-sm text-gray-500 mb-6">Welcome to Bonbu Main Dashboard</p>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mb-8 w-full">
            <div class="bg-white rounded-lg border p-4 flex flex-col items-center">
                <span class="text-sm text-gray-500">New Order</span>
                <span class="text-2xl font-bold">2</span>
            </div>
            <div class="bg-white rounded-lg border p-4 flex flex-col items-center">
                <span class="text-sm text-gray-500">In Process</span>
                <span class="text-2xl font-bold">3</span>
            </div>
            <div class="bg-white rounded-lg border p-4 flex flex-col items-center">
                <span class="text-sm text-gray-500">Out for Delivery</span>
                <span class="text-2xl font-bold">10</span>
            </div>
            <div class="bg-white rounded-lg border p-4 flex flex-col items-center">
                <span class="text-sm text-gray-500">Canceled</span>
                <span class="text-2xl font-bold">2</span>
            </div>
            <div class="bg-white rounded-lg border p-4 flex flex-col items-center">
                <span class="text-sm text-gray-500">All Orders</span>
                <span class="text-2xl font-bold">17</span>
            </div>
        </div>
        <div class="mb-4 w-full">
            <h3 class="text-lg font-semibold mb-2">New Order</h3>
            <div class="overflow-x-auto w-full">
                <table class="w-full bg-white border rounded-lg">
                    <thead>
                        <tr class="bg-gray-100 text-xs text-gray-700">
                            <th class="px-4 py-2 border">Order ID</th>
                            <th class="px-4 py-2 border">Customer</th>
                            <th class="px-4 py-2 border">Qty</th>
                            <th class="px-4 py-2 border">Total</th>
                            <th class="px-4 py-2 border">Date & Time</th>
                            <th class="px-4 py-2 border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 10; $i++)
                        <tr class="text-sm text-center">
                            <td class="px-4 py-2 border">Order ID #12345</td>
                            <td class="px-4 py-2 border">Byan</td>
                            <td class="px-4 py-2 border">3 Items</td>
                            <td class="px-4 py-2 border">Rp.285.000</td>
                            <td class="px-4 py-2 border">30/06/2025 15:44</td>
                            <td class="px-4 py-2 border">
                                <a href="#" class="text-blue-600 hover:underline">Order Details</a>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>