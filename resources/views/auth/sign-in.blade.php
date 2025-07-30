<x-app-layout>
  <div class="min-h-screen flex items-center justify-center bg-white">
    <div class="w-full max-w-md mx-auto">
      <h1 class="text-3xl font-bold text-center mb-2">Sign In</h1>

      {{-- Tampilkan error jika login gagal --}}
      @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
          {{ $errors->first() }}
        </div>
      @endif

      <form class="bg-white mt-6" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-4">
          <label class="block text-sm font-medium mb-1">Enter Phone Number</label>
          <input name="phone" type="text" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black" placeholder="Enter Phone Number" required>
        </div>

        <div class="mb-2 relative">
          <label class="block text-sm font-medium mb-1">Enter Password</label>
          <input name="password" type="password" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black pr-10" placeholder="Enter Password" required>
          <button type="button" class="absolute right-3 top-8 text-gray-400 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
          </button>
        </div>

        <div class="flex items-center justify-between mb-4">
          <label class="flex items-center text-sm">
            <input type="checkbox" name="remember" class="mr-2"> Remember me
          </label>
          <a href="/forgot-password" class="text-sm font-medium hover:underline">Forgot Password?</a>
        </div>

        <button type="submit" class="w-full bg-black text-white py-2 rounded font-semibold mb-4">Sign In</button>

        <div class="text-center text-sm mb-4">
          Don't have an account? <a href="/sign-up" class="font-semibold hover:underline">Sign up here</a>
        </div>

        <div class="flex items-center my-4">
          <div class="flex-grow border-t"></div>
          <span class="mx-2 text-gray-400 text-sm">Or sign in with</span>
          <div class="flex-grow border-t"></div>
        </div>

        <button type="button" class="w-full border border-gray-300 py-2 rounded flex items-center justify-center hover:bg-gray-50">
          <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="h-5 w-5 mr-2"> Google
        </button>
      </form>
    </div>
  </div>
</x-app-layout>
