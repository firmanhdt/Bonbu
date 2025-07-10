<x-app-layout>
<div class="bg-white min-h-screen">
    <!-- Hero Section -->
    <section class="relative h-[600px] flex items-center bg-cover bg-center" style="background-image: url('{{ asset('img/bg-hero.png') }}');">
     
        <div class="relative z-10 max-w-2xl px-6 md:px-12">
            <h1 class="text-3xl md:text-4xl font-bold mb-2 text-white text-left">
                Hungry already?<br>
                Korean food craving? Bonbu got you!
            </h1>
            <p class="mb-6 text-base md:text-lg text-white text-left">
                Enjoy the taste of Korea at your fingertips.
            </p>
            <a href="#menu" class="inline-block px-6 py-2 border border-white text-white rounded hover:bg-white hover:text-black transition text-left">
                Explore Menu
            </a>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-2xl font-bold mb-8">Why Choose Bonbu?</h2>
        <div class="flex flex-col md:flex-row justify-center gap-8">
        <div class="flex-1">
            <div class="text-4xl mb-2">🛡️</div>
            <div class="font-semibold">Premium Ingredients</div>
            <div class="text-sm text-gray-500">We use high-quality, 
                fresh ingredients every single day.</div>
        </div>
        <div class="flex-1">
            <div class="text-4xl mb-2">🚚</div>
            <div class="font-semibold">Fast Delivery</div>
            <div class="text-sm text-gray-500">We strive to deliver your food 
                quickly and in the best condition.</div>
        </div>
        <div class="flex-1">
            <div class="text-4xl mb-2">🏅</div>
            <div class="font-semibold">Trusted Quality</div>
            <div class="text-sm text-gray-500">Authentic flavors with the highest 
                hygiene standards.</div>
        </div>
        </div>
    </div>
    </section>

    <!-- Must-Try Section -->
    <section class="py-12"></section>
      <div class="max-w-5xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-2">Must-Try</h2>
        <p class="mb-8 text-lg text-gray-700">Bonbu's top picks just for you.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
          @for ($i = 0; $i < 6; $i++)
          <div class="bg-gray-200 rounded-lg shadow flex flex-col p-0 overflow-hidden">
            <!-- Gambar produk -->
            <img src="{{ asset('img/produk-sample.png') }}" alt="Korean Chicken Bites" class="w-full h-40 object-cover">
            <div class="p-4 flex-1 flex flex-col justify-between">
              <div>
                <div class="font-semibold text-lg text-left leading-tight mb-1">Korean Chicken Bites - Dakganjeong Sauce</div>
                <div class="text-blue-600 font-bold text-left mb-1">Rp. 49.000</div>
                <div class="text-sm text-gray-700 text-left">Starter and Snack</div>
              </div>
            </div>
          </div>
          @endfor
        </div>
      </div>
    </section>

    <!-- Menu Category Section -->
    <section id="menu" class="py-12 bg-white">
      <div class="max-w-5xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-8">Menu Category</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 justify-center">
          <div class="border rounded-lg p-6 flex flex-col items-center">
            <div class="font-semibold text-lg mb-1">Starter and Snacks</div>
            <div class="text-gray-600">15 Items</div>
          </div>
          <div class="border rounded-lg p-6 flex flex-col items-center">
            <div class="font-semibold text-lg mb-1">Mains</div>
            <div class="text-gray-600">16 Items</div>
          </div>
          <div class="border rounded-lg p-6 flex flex-col items-center">
            <div class="font-semibold text-lg mb-1">Bonbu Signature Drinks</div>
            <div class="text-gray-600">17 Items</div>
          </div>
          <div class="border rounded-lg p-6 flex flex-col items-center">
            <div class="font-semibold text-lg mb-1">Desserts</div>
            <div class="text-gray-600">3 Items</div>
          </div>
          <div class="border rounded-lg p-6 flex flex-col items-center">
            <div class="font-semibold text-lg mb-1">Packages</div>
            <div class="text-gray-600">4 Items</div>
          </div>
          <div class="border rounded-lg p-6 flex flex-col items-center">
            <div class="font-semibold text-lg mb-1">Add-ons</div>
            <div class="text-gray-600">6 Items</div>
          </div>
          <div class="border rounded-lg p-6 flex flex-col items-center">
            <div class="font-semibold text-lg mb-1">Beverages</div>
            <div class="text-gray-600">1 Items</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action Section -->
    <section class="relative h-[350px] md:h-[400px] flex items-center justify-center bg-cover bg-center my-12 rounded-lg overflow-hidden" style="background-image: url('{{ asset('img/cta-bg.jpg') }}');">
      <div class="absolute inset-0 bg-black bg-opacity-60"></div>
      <div class="relative z-10 flex flex-col items-center justify-center w-full">
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-2 text-center">Can't wait to eat?</h2>
        <p class="text-lg text-white mb-6 text-center">Let's see what Bonbu's got for you.</p>
        <a href="/menu" class="px-8 py-2 bg-white text-black rounded shadow font-semibold hover:bg-gray-200 transition">Order Now</a>
      </div>
    </section>
</div>
</x-app-layout>
