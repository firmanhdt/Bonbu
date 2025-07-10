<x-app-layout>
  <div class="max-w-3xl mx-auto py-10 px-4">
    <h1 class="text-xl font-bold mb-4">Checkout</h1>
    <div class="border rounded-lg bg-white p-4 mb-4">
      <div class="font-semibold mb-2">Order ID #12345</div>
      <div class="grid grid-cols-3 font-semibold border-b py-1">
        <div class="text-left">Product</div>
        <div class="text-center">Qty</div>
        <div class="text-right">Price</div>
      </div>
      <div class="grid grid-cols-3 py-1 border-b">
        <div class="text-left">Korean Chicken Bites - Dakganjeong Sauce</div>
        <div class="text-center">2</div>
        <div class="text-right">Rp. 110.000</div>
      </div>
      <div class="grid grid-cols-3 py-1 border-b">
        <div class="text-left">Bibimbap Chicken</div>
        <div class="text-center">2</div>
        <div class="text-right">Rp. 110.000</div>
      </div>
      <div class="grid grid-cols-3 py-1 border-b">
        <div class="text-left">Sundubujjigae</div>
        <div class="text-center">1</div>
        <div class="text-right">Rp. 55.000</div>
      </div>
      <div class="grid grid-cols-3 py-1 border-b font-semibold">
        <div class="text-left">Sub Total</div>
        <div class="text-center">5</div>
        <div class="text-right">Rp. 275.000</div>
      </div>
      <div class="grid grid-cols-3 py-1 border-b">
        <div class="text-left">Delivery Charge</div>
        <div></div>
        <div class="text-right">Rp. 10.000</div>
      </div>
      <div class="grid grid-cols-3 py-2 font-bold text-base">
        <div class="text-left">Total</div>
        <div></div>
        <div class="text-right">Rp. 285.000</div>
      </div>
    </div>
    <div class="border rounded-lg bg-white p-4 mb-4">
      <div class="font-semibold mb-1">Delivery Address</div>
      <div class="text-sm">Jl. Nangka 2 Blok 3 AF No.7 RT.3/RW.4 Pagedangan, Tangerang, Banten, 15339, Indonesia</div>
    </div>
    <div class="border rounded-lg bg-white p-4 mb-6">
      <div class="font-semibold mb-2">Choose Payment Method</div>
      <div class="flex flex-wrap gap-2 justify-center">
        <button class="border rounded-lg px-4 py-2 flex items-center gap-2 bg-white hover:bg-gray-100"><img src="{{ asset('img/bca.png') }}" alt="BCA" class="h-6">BCA</button>
        <button class="border rounded-lg px-4 py-2 flex items-center gap-2 bg-white hover:bg-gray-100"><img src="{{ asset('img/mandiri.png') }}" alt="Mandiri" class="h-6">Mandiri</button>
        <button class="border rounded-lg px-4 py-2 flex items-center gap-2 bg-white hover:bg-gray-100"><img src="{{ asset('img/bri.png') }}" alt="BRI" class="h-6">BRI</button>
        <button class="border rounded-lg px-4 py-2 flex items-center gap-2 bg-white hover:bg-gray-100"><img src="{{ asset('img/qris.png') }}" alt="QRIS" class="h-6">QRIS</button>
        <button class="border rounded-lg px-4 py-2 flex items-center gap-2 bg-white hover:bg-gray-100"><img src="{{ asset('img/shopeepay.png') }}" alt="ShopeePay" class="h-6">Shopee Pay</button>
        <button class="border rounded-lg px-4 py-2 flex items-center gap-2 bg-white hover:bg-gray-100"><img src="{{ asset('img/dana.png') }}" alt="DANA" class="h-6">DANA</button>
        <button class="border rounded-lg px-4 py-2 flex items-center gap-2 bg-white hover:bg-gray-100"><img src="{{ asset('img/gopay.png') }}" alt="Gopay" class="h-6">gopay</button>
        <button class="border rounded-lg px-4 py-2 flex items-center gap-2 bg-white hover:bg-gray-100"><img src="{{ asset('img/ovo.png') }}" alt="OVO" class="h-6">OVO</button>
      </div>
    </div>
    <button class="w-full border rounded py-2 font-semibold hover:bg-gray-100">Pay Now</button>
</div> 
</x-app-layout>