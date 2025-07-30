<x-app-layout>
  <div class="min-h-screen flex items-center justify-center bg-white">
    <div class="w-full max-w-md mx-auto">
      <h1 class="text-3xl font-bold text-center mb-2">Sign Up</h1>

      {{-- Error message --}}
      @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
          {{ $errors->first() }}
        </div>
      @endif

      <form class="bg-white mt-6" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
          <label class="block text-sm font-medium mb-1">Enter Your Name</label>
          <input name="name" type="text" class="w-full border rounded px-3 py-2" placeholder="Enter Your Name" required>
        </div>

        <div class="mb-3">
          <label class="block text-sm font-medium mb-1">Enter Email</label>
          <input name="email" type="email" class="w-full border rounded px-3 py-2" placeholder="Enter Email" required>
        </div>

        <div class="mb-3">
          <label class="block text-sm font-medium mb-1">Enter Phone Number</label>
          <input name="phone" type="text" class="w-full border rounded px-3 py-2" placeholder="Enter Phone Number" required>
        </div>

        <div class="mb-3 relative">
          <label class="block text-sm font-medium mb-1">Create a Password</label>
          <input name="password" type="password" class="w-full border rounded px-3 py-2" placeholder="Create a Password" required>
        </div>

        <div class="mb-3 flex items-center">
          <input type="checkbox" id="terms" class="mr-2" required>
          <label for="terms" class="text-sm">I agree to the Terms & Conditions</label>
        </div>

        <button type="submit" class="w-full bg-black text-white py-2 rounded font-semibold mb-4">Sign Up</button>

        <div class="text-center text-sm">
          Already have an account? <a href="/sign-in" class="font-semibold hover:underline">Sign In</a>
        </div>
      </form>
    </div>
  </div>
</x-app-layout>
