<x-app-layout>
<div class="max-w-2xl mx-auto py-10 px-4">
    <h1 class="text-xl font-bold mb-4">Profile</h1>

    <div class="border rounded-lg bg-white p-4 mb-4 flex justify-between items-start">
        <div>
            <div class="font-bold">Name</div>
            <div class="mb-2">zzzxxsaa</div>
            <div class="font-bold">Phone Number</div>
            <div class="mb-2">08123456789</div>
            <div class="font-bold">Email</div>
            <div>zzzxxsaa@gmail.com</div>
        </div>
        <a href="/profile/edit" class="border rounded px-4 py-1 font-semibold text-sm hover:bg-gray-100">Edit</a>
    </div>

    <div class="border rounded-lg bg-white p-4 mb-4">
        <div class="font-bold mb-2">Account</div>
        <ul class="text-sm space-y-1">
            <li><a href="/profile/edit" class="hover:underline">Change Profile</a></li>
            <li><a href="/profile/change-password" class="hover:underline">Change Password</a></li>
            <li><a href="/profile/address" class="hover:underline">Saved Address</a></li>
            <li><a href="#" class="hover:underline">Payment Method</a></li>
        </ul>
    </div>

    <div class="border rounded-lg bg-white p-4 mb-6">
        <div class="font-bold mb-2">Other Info</div>
        <ul class="text-sm space-y-1">
            <li><a href="/profile/privacy" class="hover:underline">Privacy Policy</a></li>
            <li><a href="/profile/terms" class="hover:underline">Terms and Conditions</a></li>
            <li><a href="/profile/help" class="hover:underline">Help Center</a></li>
        </ul>
    </div>

    <!-- Tombol Logout -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="w-full mt-4 bg-red-500 text-white font-semibold py-2 rounded hover:bg-red-600">
            Logout
        </button>
    </form>

</div> 
</x-app-layout>