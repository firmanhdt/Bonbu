<x-app-layout>
<div class="max-w-4xl mx-auto py-10 px-4">
<h1 class="text-xl font-bold mb-4">Add Address</h1>
<form class="border rounded-lg bg-white p-6 flex flex-col md:flex-row gap-6">
    <div class="flex-1">
    <div class="mb-2 flex gap-2">
        <input type="text" class="border rounded px-3 py-2 w-full" placeholder="Search Location">
        <button type="button" class="border rounded px-4 py-2 font-semibold bg-white hover:bg-gray-100">Search Location</button>
    </div>
    <div class="w-full h-56 bg-gray-200 rounded flex items-center justify-center">
        <span class="text-gray-400">[Map Here]</span>
    </div>
    </div>
    <div class="flex-1 space-y-4">
    <div>
        <label class="block font-semibold mb-1">Name Address</label>
        <input type="text" class="w-full border rounded px-3 py-2" placeholder="Ex : Jl. Nangka 2">
    </div>
    <div>
        <label class="block font-semibold mb-1">Address Details (optional)</label>
        <input type="text" class="w-full border rounded px-3 py-2" placeholder="Ex : Tower A, Room Number 19">
    </div>
    <div>
        <label class="block font-semibold mb-1">Mark address as</label>
        <input type="text" class="w-full border rounded px-3 py-2" placeholder="Ex : Home, Office">
    </div>
    <div>
        <label class="block font-semibold mb-1">Recipient's Name</label>
        <input type="text" class="w-full border rounded px-3 py-2" placeholder="Ex : Byan">
    </div>
    <div>
        <label class="block font-semibold mb-1">Phone Number</label>
        <input type="text" class="w-full border rounded px-3 py-2" placeholder="Ex : 081234567890">
    </div>
    <button type="submit" class="w-full border rounded py-2 font-semibold bg-white hover:bg-gray-100">Save Address</button>
    </div>
</form>
</div> 
</x-app-layout>