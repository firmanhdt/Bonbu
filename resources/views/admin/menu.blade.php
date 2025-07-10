<x-admin-layout>
    <div class="p-2 md:p-4">
        <h2 class="text-2xl font-bold">Menu Management</h2>
        <p class="text-sm text-gray-500 mb-4">Bonbu Menu Management</p>
        <div class="flex flex-wrap gap-2 mb-4">
            <button class="px-4 py-1 border rounded-full bg-white hover:bg-gray-100 text-sm">Starter and Snack</button>
            <button class="px-4 py-1 border rounded-full bg-white hover:bg-gray-100 text-sm">Mains</button>
            <button class="px-4 py-1 border rounded-full bg-white hover:bg-gray-100 text-sm">Bonbu Signature Drinks</button>
            <button class="px-4 py-1 border rounded-full bg-white hover:bg-gray-100 text-sm">Desserts</button>
            <button class="px-4 py-1 border rounded-full bg-white hover:bg-gray-100 text-sm">Packages</button>
            <button class="px-4 py-1 border rounded-full bg-white hover:bg-gray-100 text-sm">Add-ons</button>
            <button class="px-4 py-1 border rounded-full bg-white hover:bg-gray-100 text-sm">Beverages</button>

            <a href="/admin/menu-add" class="px-4 py-1 border rounded-full bg-white hover:bg-gray-100 text-sm flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                Add New Menu
            </a>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
            @for ($i = 0; $i < 10; $i++)
            <div class="bg-gray-100 rounded-lg p-2 flex flex-col shadow-sm">
                <img src="/img/bg-hero.png" alt="Menu" class="rounded-md object-cover w-full h-32 mb-2">
                <div class="flex-1">
                    <div class="font-medium text-sm">Korean Chicken Bites - Dakgangjeong Sauce</div>
                    <div class="text-blue-600 font-semibold text-sm">Rp. 49.000</div>
                    <div class="text-xs text-gray-500 mb-2">Starter and Snack</div>
                </div>
                <div class="flex gap-2 mt-auto">
                    <a href="/admin/menu-edit" class="p-2 rounded border hover:bg-gray-200" title="Edit">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 13l6-6m2 2l-6 6m-2 2h2v2h2v-2h2v-2h-2v-2h-2v2H9v2z"/></svg>
                    </a>
                    <button class="p-2 rounded border hover:bg-gray-200" title="Delete">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </div>
            @endfor
        </div>
    </div>
</x-admin-layout>