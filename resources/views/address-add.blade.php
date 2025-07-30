<x-app-layout>
<div class="max-w-4xl mx-auto py-10 px-4">
<h1 class="text-xl font-bold mb-4">Add Address</h1>
<form method="POST" action="{{ route('address.store') }}" class="...">
    @csrf
    <div class="flex-1">
        ...
    </div>
    <div class="flex-1 space-y-4">
        <div>
            <label class="block font-semibold mb-1">Name Address</label>
            <input type="text" name="name" class="w-full border rounded px-3 py-2" placeholder="Ex : Jl. Nangka 2" required>
        </div>
        <div>
            <label class="block font-semibold mb-1">Address Details (optional)</label>
            <input type="text" name="details" class="w-full border rounded px-3 py-2" placeholder="Ex : Tower A, Room Number 19">
        </div>
        <div>
            <label class="block font-semibold mb-1">Mark address as</label>
            <input type="text" name="label" class="w-full border rounded px-3 py-2" placeholder="Ex : Home, Office">
        </div>
        <div>
            <label class="block font-semibold mb-1">Recipient's Name</label>
            <input type="text" name="recipient_name" class="w-full border rounded px-3 py-2" placeholder="Ex : Byan" required>
        </div>
        <div>
            <label class="block font-semibold mb-1">Phone Number</label>
            <input type="text" name="phone" class="w-full border rounded px-3 py-2" placeholder="Ex : 081234567890" required>
        </div>
        <button type="submit" class="w-full border rounded py-2 font-semibold bg-white hover:bg-gray-100">Save Address</button>
    </div>
</form>

</div>
</x-app-layout>
