<x-admin-layout>
    <div class="p-2 md:p-4">
        <h2 class="text-2xl font-bold">User Management</h2>
        <p class="text-sm text-gray-500 mb-4">Manage Customer Data</p>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border rounded-lg">
                <thead>
                    <tr class="bg-gray-100 text-xs text-gray-700">
                        <th class="px-4 py-2 border">Customer ID</th>
                        <th class="px-4 py-2 border">Name</th>
                        <th class="px-4 py-2 border">Phone Number</th>
                        <th class="px-4 py-2 border">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($customers as $customer)
                    <tr class="text-sm text-center">
                        <td class="px-4 py-2 border">{{ $customer->id }}</td>
                        <td class="px-4 py-2 border">{{ $customer->name }}</td>
                        <td class="px-4 py-2 border">{{ $customer->phone ?? '-' }}</td>
                        <td class="px-4 py-2 border">{{ $customer->email }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center text-gray-400 py-4">No customers found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
