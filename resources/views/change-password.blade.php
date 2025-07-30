<x-app-layout>
<div class="max-w-xl mx-auto py-10 px-4">
<h1 class="text-xl font-bold mb-4">Change Password</h1>
<form class="border rounded-lg bg-white p-6">
    <div class="mb-4">
    <label class="block font-semibold mb-1">Current Password</label>
    <input type="password" class="w-full border rounded px-3 py-2" placeholder="Ex : zzzxxsaa">
    </div>
    <div class="mb-4">
    <label class="block font-semibold mb-1">New Password</label>
    <input type="password" class="w-full border rounded px-3 py-2" placeholder="Ex : zzzxxsaa">
    </div>
    <div class="mb-6">
    <label class="block font-semibold mb-1">Confirm New Password</label>
    <input type="password" class="w-full border rounded px-3 py-2" placeholder="Ex : zzzxxsaa">
    </div>
    <div class="flex gap-4 justify-center">
    <a href="/profile" class="border rounded px-6 py-2 font-semibold bg-white hover:bg-gray-100">Cancel</a>
    <button type="submit" class="border rounded px-6 py-2 font-semibold bg-white hover:bg-gray-100">Save Changes</button>
    </div>
</form>
</div> 
</x-app-layout>