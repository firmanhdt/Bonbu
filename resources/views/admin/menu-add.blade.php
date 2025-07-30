{{-- filepath: resources/views/admin/menu-add.blade.php --}}
<x-admin-layout>
    <div class="p-4 md:p-8">
        <div class="flex items-center mb-6">
            <a href="/admin/menu" class="mr-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </a>
            <h2 class="text-lg font-semibold">Add New Menu</h2>
        </div>
        <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data" class="max-w-4xl mx-auto bg-white border rounded-lg p-6 md:p-8">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex flex-col gap-3">
                    <label class="font-medium text-sm">Menu Name</label>
                    <input type="text" name="name" class="border rounded px-3 py-2 focus:outline-none focus:ring w-full" required />
                    <label class="font-medium text-sm">Price</label>
                    <input type="number" name="price" class="border rounded px-3 py-2 focus:outline-none focus:ring w-full" required />
                    <label class="font-medium text-sm">Category</label>
                    <select name="category_id" class="border rounded px-3 py-2 focus:outline-none focus:ring w-full" required>
                        <option value="">-- Select Category --</option>
                        @foreach($categories as $cat)
        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
    @endforeach
</select>
                    <label class="font-medium text-sm">Description</label>
                    <textarea name="description" rows="3" class="border rounded px-3 py-2 focus:outline-none focus:ring w-full"></textarea>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="font-medium text-sm">Image</label>
                    <input type="file" name="image" class="border rounded px-3 py-2 focus:outline-none focus:ring w-full" accept="image/*" />
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-4 mt-8 justify-center">
                <a href="/admin/menu" type="button" class="border rounded px-8 py-2 bg-white hover:bg-gray-100">Cancel</a>
                <button type="submit" class="border rounded px-8 py-2 bg-white hover:bg-gray-100">Save</button>
            </div>
        </form>
    </div>
</x-admin-layout>
