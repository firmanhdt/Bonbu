<x-admin-layout>
    <div class="p-2 md:p-4">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold">Category Management</h2>
            <a href="/admin/category-add" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700 text-sm font-semibold">+ Add Category</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border rounded-lg">
                <thead>
                    <tr class="bg-gray-100 text-xs text-gray-700">
                        <th class="px-4 py-2 border">Category Name</th>
                        <th class="px-4 py-2 border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (DB::table('categories')->get() as $category)
                    <tr class="text-sm text-center">
                        <td class="px-4 py-2 border">{{ $category->name }}</td>
                        <td class="px-4 py-2 border flex justify-center gap-2">
                            <a href="/admin/category-edit/{{ $category->id }}" class="px-3 py-1 rounded bg-yellow-400 text-white text-xs font-semibold hover:bg-yellow-500">Edit</a>
                            <form action="/admin/category-delete/{{ $category->id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 rounded bg-red-500 text-white text-xs font-semibold hover:bg-red-600">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
