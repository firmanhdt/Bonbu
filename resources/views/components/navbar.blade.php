<nav class="bg-white border-b border-gray-200 w-full z-30 top-0 left-0">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <!-- Logo dan garis vertikal -->
      <div class="flex items-center space-x-4">
        <a href="/" class="flex items-center">
          <img src="{{ asset('img/logo.png') }}" alt="BONBU Logo" class="h-8 w-auto">
        </a>
        <div class="h-8 border-l border-gray-400 mx-2"></div>
      </div>
      <!-- Menu utama -->
      <div class="hidden md:flex flex-1 items-center justify-center space-x-8">
        <a href="/" class="text-lg font-medium text-gray-800 hover:text-blue-600">Home</a>
        <a href="/order" class="text-lg font-medium text-gray-800 hover:text-blue-600">Your Order</a>
        <a href="/about" class="text-lg font-medium text-gray-800 hover:text-blue-600">About Us</a>
        <a href="/contact" class="text-lg font-medium text-gray-800 hover:text-blue-600">Contact Us</a>
      </div>
      <!-- Tombol Sign In & Sign Up -->
      <div class="hidden md:flex items-center space-x-2">
        <a href="/sign-in" class="px-4 py-2 border border-gray-800 rounded hover:bg-gray-100 font-semibold">Sign In</a>
        <a href="/sign-up" class="px-4 py-2 border border-gray-800 rounded hover:bg-gray-100 font-semibold">Sign Up</a>
      </div>
      <!-- Hamburger menu mobile -->
      <div class="md:hidden flex items-center">
        <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
          <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
  <!-- Mobile menu -->
  <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 bg-white border-b border-gray-200">
    <a href="/" class="block py-2 text-gray-800 hover:text-blue-600 font-medium">Home</a>
    <a href="/order" class="block py-2 text-gray-800 hover:text-blue-600 font-medium">Your Order</a>
    <a href="/about" class="block py-2 text-gray-800 hover:text-blue-600 font-medium">About Us</a>
    <a href="/contact" class="block py-2 text-gray-800 hover:text-blue-600 font-medium">Contact Us</a>
    <a href="/sign-in" class="block py-2 mt-2 border border-gray-800 rounded text-center font-semibold">Sign In</a>
    <a href="/sign-up" class="block py-2 mt-2 border border-gray-800 rounded text-center font-semibold">Sign Up</a>
  </div>
  <script>
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    btn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>
</nav> 