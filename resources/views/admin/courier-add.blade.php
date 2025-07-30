<x-admin-layout>
    <div class="p-2 md:p-4 max-w-md mx-auto">
        <div class="flex items-center mb-6">
            <a href="/admin/courier" class="mr-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </a>
            <h2 class="text-lg font-semibold">Add Courier</h2>
        </div>
        <form action="{{ route('admin.courier.store') }}" method="POST" class="bg-white border rounded-lg p-6">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Name</label>
                <input type="text" name="name" class="border rounded px-3 py-2 w-full focus:outline-none focus:ring" placeholder="Enter courier name" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Motor Type</label>
                <input type="text" name="motor_type" class="border rounded px-3 py-2 w-full focus:outline-none focus:ring" placeholder="Enter motor type" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Phone Number</label>
                <input type="text" name="phone_number" class="border rounded px-3 py-2 w-full focus:outline-none focus:ring" placeholder="Enter phone number" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Email</label>
                <input type="email" name="email" class="border rounded px-3 py-2 w-full focus:outline-none focus:ring" placeholder="Enter email" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Plate Number</label>
                <input type="text" name="plate_number" class="border rounded px-3 py-2 w-full focus:outline-none focus:ring" placeholder="Enter plate number" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Password</label>
                <input type="password" name="password" class="border rounded px-3 py-2 w-full focus:outline-none focus:ring" placeholder="Enter password" required />
            </div>
            <div class="flex gap-4 justify-center mt-6">
                <a href="/admin/courier" class="border rounded px-8 py-2 bg-white hover:bg-gray-100">Cancel</a>
                <button type="submit" class="border rounded px-8 py-2 bg-blue-600 text-white hover:bg-blue-700">Save</button>
            </div>
        </form>
    </div>
</x-admin-layout>
