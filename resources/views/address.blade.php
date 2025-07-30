<x-app-layout>
<div class="max-w-xl mx-auto py-10 px-4">
    <h1 class="text-xl font-bold mb-4">Saved Address</h1>

    <div class="space-y-4 mb-6">
        @forelse ($addresses as $address)
            <div class="border rounded-lg bg-white p-4 flex justify-between items-start">
                <div>
                    <div class="font-bold">{{ $address->label ?? 'No Label' }}</div>
                    <div>{{ $address->recipient_name }}</div>
                    <div class="text-sm">{{ $address->details }}</div>
                </div>
                <a href="{{ route('address.edit', $address->id) }}" class="border rounded p-2 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15.232 5.232l3.536 3.536M9 11l6 6M3 21h6a2 2 0 002-2v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6z" />
                    </svg>
                </a>
            </div>
        @empty
            <p class="text-gray-600">You don't have any saved address yet.</p>
        @endforelse
    </div>

    <a href="{{ route('address.create') }}">
        <button class="w-full border rounded py-2 font-semibold hover:bg-gray-100">Add Address</button>
    </a>
</div>
</x-app-layout>
