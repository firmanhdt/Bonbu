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
                    @for ($i = 0; $i < 6; $i++)
                    <tr class="text-sm text-center">
                        <td class="px-4 py-2 border">CUST001</td>
                        <td class="px-4 py-2 border">Nisa</td>
                        <td class="px-4 py-2 border">08123456789</td>
                        <td class="px-4 py-2 border">zzzxxsaa@gmail.com</td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout> 