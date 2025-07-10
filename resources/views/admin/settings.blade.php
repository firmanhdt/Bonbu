<x-admin-layout>
    <div class="p-2 md:p-4">
        <h2 class="text-2xl font-bold">Settings</h2>
        <p class="text-sm text-gray-500 mb-4">Manage Restaurant Information and Delivery Settings</p>
        <div class="bg-gray-200 border rounded-lg p-4 mb-6">
            <div class="flex items-center mb-4">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16"/></svg>
                <div>
                    <div class="font-semibold">Restaurant Information</div>
                    <div class="text-xs text-gray-600">Update Restaurant Details</div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="text-sm font-medium">Restaurant Name</label>
                    <input type="text" class="w-full border rounded px-3 py-2 mt-1 mb-2 bg-white" placeholder="Ex : Bonbu" />
                </div>
                <div>
                    <label class="text-sm font-medium">Phone Number</label>
                    <input type="text" class="w-full border rounded px-3 py-2 mt-1 mb-2 bg-white" placeholder="Ex : Bonbu" />
                </div>
            </div>
            <div class="mb-4">
                <label class="text-sm font-medium">Description</label>
                <textarea class="w-full border rounded px-3 py-2 mt-1 mb-2 bg-white"></textarea>
            </div>
            <div class="mb-4">
                <label class="text-sm font-medium">Address</label>
                <textarea class="w-full border rounded px-3 py-2 mt-1 mb-2 bg-white"></textarea>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="text-sm font-medium">Instagram</label>
                    <input type="text" class="w-full border rounded px-3 py-2 mt-1 mb-2 bg-white" placeholder="Ex : @bonbu.id" />
                </div>
                <div>
                    <label class="text-sm font-medium">Email</label>
                    <input type="text" class="w-full border rounded px-3 py-2 mt-1 mb-2 bg-white" placeholder="Ex : bonbuindonesia@gmail.com" />
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="text-sm font-medium">Operational Days</label>
                    <input type="text" class="w-full border rounded px-3 py-2 mt-1 mb-2 bg-white" placeholder="Ex : Monday - Sunday" />
                </div>
                <div>
                    <label class="text-sm font-medium">Operational Hours</label>
                    <input type="text" class="w-full border rounded px-3 py-2 mt-1 mb-2 bg-white" placeholder="Ex : 10:30 - 22:30" />
                </div>
            </div>
        </div>
        <div class="bg-gray-200 border rounded-lg p-4 mb-6">
            <div class="flex items-center mb-4">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16"/></svg>
                <div>
                    <div class="font-semibold">Restaurant Information</div>
                    <div class="text-xs text-gray-600">Configure delivery options and pricing</div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="text-sm font-medium">Delivery Fee per KM</label>
                    <div class="flex items-center gap-2">
                        <input type="text" class="w-32 border rounded px-3 py-2 mt-1 mb-2 bg-white" value="Rp.3.000" />
                        <span class="text-sm">KM</span>
                    </div>
                    <div class="text-xs text-gray-600">Current delivery fee: Rp3.000 per kilometer</div>
                </div>
                <div>
                    <label class="text-sm font-medium">Free Delivery Minimum</label>
                    <input type="text" class="w-40 border rounded px-3 py-2 mt-1 mb-2 bg-white"  value="Rp.100.000" />
                    <div class="text-xs text-gray-600">Free delivery for orders above Rp100.000</div>
                </div>
            </div>
            <div class="mb-4">
                <label class="text-sm font-medium">Estimated Delivery Time</label>
                <input type="text" class="w-40 border rounded px-3 py-2 mt-1 mb-2 bg-white" value="30 - 45 minutes" />
            </div>
        </div>
        <div class="flex justify-center">
            <button class="border rounded px-8 py-2 bg-white hover:bg-gray-100">Save All Settings</button>
        </div>
    </div>
</x-admin-layout> 