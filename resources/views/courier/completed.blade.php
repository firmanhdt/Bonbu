<x-courier-layout>
    <div class="p-2 md:p-4">
        <h2 class="text-2xl font-bold mb-1">Completed</h2>
        <p class="text-gray-500 text-sm mb-4">View completed deliveries</p>
        <div class="mb-4">
            <div class="flex items-center bg-white border rounded px-4 py-2 w-fit">
                <span class="inline-block w-3 h-3 rounded-full bg-green-500 mr-2 border border-green-600"></span>
                <span class="text-sm">5 Orders completed</span>
            </div>
        </div>
        <div class="space-y-4">
            @for ($i = 0; $i < 5; $i++)
            <a href="/courier/completed-order" class="block bg-gray-200 rounded border p-4 flex flex-col md:flex-row md:items-center md:justify-between hover:bg-gray-300 transition cursor-pointer">
                <div>
                    <div class="font-bold text-lg mb-1">Order ID #12345</div>
                    <div class="text-sm font-medium">Nisa • 08123456789</div>
                    <div class="text-xs text-gray-700">Jl. Nangka 2 Blok 3 AF No.7 RT.3/RW.4 Pagedangan, Tangerang, Banten, 15339, Indonesia</div>
                </div>
                <div class="flex gap-2 mt-4 md:mt-0 md:ml-4">
                    <span class="px-4 py-1 border rounded-full bg-white text-sm">Completed</span>
                </div>
            </a>
            @endfor
        </div>
    </div>
</x-courier-layout>