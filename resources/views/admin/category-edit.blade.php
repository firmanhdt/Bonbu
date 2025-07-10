<x-admin-layout>
    <div class="p-2 md:p-4 max-w-md mx-auto">
        <div class="flex items-center mb-6">
            <a href="/admin/category" class="mr-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </a>
            <h2 class="text-lg font-semibold">Edit Category</h2>
        </div>
        <form class="bg-white border rounded-lg p-6">
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Category Name</label>
                <input type="text" class="border rounded px-3 py-2 w-full focus:outline-none focus:ring" value="Starter and Snack" />
            </div>
            <div class="flex gap-4 justify-center mt-6">
                <a href="/admin/category" class="border rounded px-8 py-2 bg-white hover:bg-gray-100">Cancel</a>
                <button type="submit" class="border rounded px-8 py-2 bg-blue-600 text-white hover:bg-blue-700">Update</button>
            </div>
        </form>
    </div>
</x-admin-layout> 