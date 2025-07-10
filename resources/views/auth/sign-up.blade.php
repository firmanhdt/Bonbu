<x-app-layout>
    <div class="min-h-screen flex items-center justify-center bg-white">
        <div class="w-full max-w-md mx-auto">
          <h1 class="text-3xl font-bold text-center mb-2">Sign Up</h1>
          <form class="bg-white mt-6">
            <div class="mb-3">
              <label class="block text-sm font-medium mb-1">Enter Your Name</label>
              <input type="text" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black" placeholder="Enter Your Name">
            </div>
            <div class="mb-3">
                <label class="block text-sm font-medium mb-1">Enter Email</label>
                <input type="text" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black" placeholder="Enter Email">
              </div>
            <div class="mb-3">
              <label class="block text-sm font-medium mb-1">Enter Phone Number</label>
              <input type="text" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black" placeholder="Enter Phone Number">
            </div>
            <div class="mb-3 relative">
              <label class="block text-sm font-medium mb-1">Create a Password</label>
              <input type="password" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black pr-10" placeholder="Create a Password">
              <button type="button" class="absolute right-3 top-8 text-gray-400 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
              </button>
            </div>
            {{-- <div class="mb-3 relative">
              <label class="block text-sm font-medium mb-1">Confirm Password</label>
              <input type="password" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black pr-10" placeholder="Confirm Password">
              <button type="button" class="absolute right-3 top-8 text-gray-400 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
              </button>
            </div> --}}
            <div class="mb-3 flex items-center">
              <input type="checkbox" id="terms" class="mr-2">
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