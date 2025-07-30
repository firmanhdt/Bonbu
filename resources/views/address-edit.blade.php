<x-app-layout>
<div class="max-w-xl mx-auto py-10 px-4">
    <h1 class="text-xl font-bold mb-4">Edit Address</h1>

    <form action="{{ route('address.update', $address->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm">Name</label>
            <input type="text" name="name" value="{{ $address->name }}" class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block text-sm">Details</label>
            <input type="text" name="details" value="{{ $address->details }}" class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block text-sm">Label</label>
            <input type="text" name="label" value="{{ $address->label }}" class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block text-sm">Recipient Name</label>
            <input type="text" name="recipient_name" value="{{ $address->recipient_name }}" class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block text-sm">Phone</label>
            <input type="text" name="phone" value="{{ $address->phone }}" class="w-full border rounded px-3 py-2">
        </div>

        <div class="pt-4">
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Update Address
            </button>
        </div>
    </form>
</div>
</x-app-layout>
