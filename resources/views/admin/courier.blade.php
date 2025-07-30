<x-admin-layout>
    <div class="p-2 md:p-4">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold">Courier Management</h2>
            <a href="/admin/courier-add" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700 text-sm font-semibold">+ Add Courier</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border rounded-lg">
                <thead>
                    <tr class="bg-gray-100 text-xs text-gray-700">
                        <th class="px-4 py-2 border">Name</th>
                        <th class="px-4 py-2 border">Motor Type</th>
                        <th class="px-4 py-2 border">Phone Number</th>
                        <th class="px-4 py-2 border">Email</th>
                        <th class="px-4 py-2 border">Plate Number</th>
                        <th class="px-4 py-2 border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($couriers as $courier)
                    <tr class="text-sm text-center">
                        <td class="px-4 py-2 border">{{ $courier->name }}</td>
                        <td class="px-4 py-2 border">{{ $courier->motor_type }}</td>
                        <td class="px-4 py-2 border">{{ $courier->phone_number }}</td>
                        <td class="px-4 py-2 border">{{ $courier->email }}</td>
                        <td class="px-4 py-2 border">{{ $courier->plate_number }}</td>
                        <td class="px-4 py-2 border flex justify-center gap-2">
                            <form action="{{ route('admin.courier.destroy', $courier->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus courier ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="px-3 py-1 rounded bg-red-500 text-white text-xs font-semibold hover:bg-red-600">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-gray-400 py-4">Belum ada courier.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
