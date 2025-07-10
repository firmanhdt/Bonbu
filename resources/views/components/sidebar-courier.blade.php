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
                <span class="font-semibold">Courier Dashboard</span>
            </div>
            <!-- Mobile close button -->
            <button @click="open = false" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
        <!-- Profile Card -->
        <div class="flex items-start justify-between border rounded-lg p-3 mb-4 bg-white">
            <div class="flex-1">
                <div class="flex items-center gap-2 mb-1">
                    <img src="/img/sidebar-courier/profile.png" alt="Order Management" class="w-5 h-5 mr-3">
                    <span class="font-bold text-lg">zzzxxsaa</span>
                </div>
                <div class="text-sm text-gray-800">08123456789</div>
                <div class="text-sm text-gray-600">Motorcycle • B 1963 YAN</div>
            </div>
            <button class="ml-2 p-1 rounded hover:bg-gray-100" title="Edit Profile">
                <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 13l6-6m2 2l-6 6m-2 2h2v2h2v-2h2v-2h-2v-2h-2v2H9v2z"/></svg>
            </button>
        </div>
        <!-- Menu -->
        <nav class="flex-1 px-4 py-6 space-y-3">
            <a href="/courier/active-order" class="flex items-center px-4 py-2 border rounded-lg font-medium text-gray-900 hover:bg-gray-100 transition">
                <img src="/img/sidebar-courier/active.png" alt="Order Management" class="w-5 h-5 mr-3">
                Active Order
            </a>
            <a href="/courier/completed" class="flex items-center px-4 py-2 border rounded-lg font-medium text-gray-900 hover:bg-gray-100 transition">
                <img src="/img/sidebar-courier/completed.png" alt="Order Management" class="w-5 h-5 mr-3">
                Completed
            </a>
        </nav>
    </aside>
</div>

