<div x-data="{ open: false }">
    <!-- Mobile sidebar toggle button di kanan atas -->
    <div class="fixed top-4 right-4 z-40 md:hidden">
        <button @click="open = true" class="p-2 text-gray-700 bg-white rounded shadow focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
    </div>
    <aside class="fixed inset-y-0 left-0 z-30 flex flex-col w-64 bg-white border-r border-gray-200 transition-transform transform -translate-x-full md:translate-x-0 md:static md:inset-0" :class="{ '-translate-x-full': !open, 'translate-x-0': open }">
        <!-- Logo & Title -->
        <div class="flex items-center justify-between h-16 px-6 border-b border-gray-200">
            <div class="flex items-center space-x-2">
                <img src="/img/logo.png" alt="Logo" class="h-8 w-auto">
                <span class="font-semibold">Admin Dashboard</span>
            </div>
            <!-- Mobile close button -->
            <button @click="open = false" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
        <!-- Menu -->
        <nav class="flex-1 px-4 py-6 space-y-3">
            <a href="/admin/dashboard" class="flex items-center px-4 py-2 border rounded-lg font-medium text-gray-900 hover:bg-gray-100 transition">
                <img src="/img/sidebar-admin/dashboard.png" alt="Dashboard" class="w-5 h-5 mr-3">
                Dashboard
            </a>
            <a href="/admin/menu" class="flex items-center px-4 py-2 border rounded-lg font-medium text-gray-900 hover:bg-gray-100 transition">
                <img src="/img/sidebar-admin/menu.png" alt="Menu Management" class="w-5 h-5 mr-3">
                Menu Management
            </a>
            <a href="/admin/category" class="flex items-center px-4 py-2 border rounded-lg font-medium text-gray-900 hover:bg-gray-100 transition">
                <img src="/img/sidebar-admin/menu.png" alt="Menu Management" class="w-5 h-5 mr-3">
                Category
            </a>
            <a href="/admin/courier" class="flex items-center px-4 py-2 border rounded-lg font-medium text-gray-900 hover:bg-gray-100 transition">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 17l2 2 4-4m5-5a7 7 0 11-14 0 7 7 0 0114 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H8a1 1 0 00-1 1v10"/></svg>
                Courier Management
            </a>
            <a href="/admin/order" class="flex items-center px-4 py-2 border rounded-lg font-medium text-gray-900 hover:bg-gray-100 transition">
                <img src="/img/sidebar-admin/order.png" alt="Order Management" class="w-5 h-5 mr-3">
                Order Management
            </a>
            <a href="/admin/user-management" class="flex items-center px-4 py-2 border rounded-lg font-medium text-gray-900 hover:bg-gray-100 transition">
                <img src="/img/sidebar-admin/customer.png" alt="Customers" class="w-5 h-5 mr-3">
                Customers
            </a>
            <a href="/admin/settings" class="flex items-center px-4 py-2 border rounded-lg font-medium text-gray-900 hover:bg-gray-100 transition">
                <img src="/img/sidebar-admin/setting.png" alt="Settings" class="w-5 h-5 mr-3">
                Settings
            </a>
            <a href="#" class="flex items-center px-4 py-2 border rounded-lg font-medium text-gray-900 hover:bg-gray-100 transition">
                <img src="/img/sidebar-admin/logout.png" alt="Logout" class="w-5 h-5 mr-3">
                Logout
            </a>
        </nav>
    </aside>
</div>

