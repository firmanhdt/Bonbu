<x-app-layout>
<div class="min-h-screen flex items-center justify-center bg-white">
  <div class="border rounded-lg bg-white p-8 flex flex-col items-center max-w-md w-full">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
    <div class="font-bold text-xl mb-2">Payment Successful</div>
    <div class="text-gray-600 mb-4">Thank you! Your order is being processed.</div>
    <div class="border-t w-full mb-4"></div>
    <div class="w-full flex justify-between text-sm mb-1"><span>Order ID</span><span class="font-semibold">#12345</span></div>
    <div class="w-full flex justify-between text-sm mb-1"><span>Total</span><span class="font-semibold">Rp.285.000</span></div>
    <div class="w-full flex justify-between text-sm mb-4"><span>Payment Method</span><span class="font-semibold">DANA</span></div>
    <a href="/order" class="w-full border rounded py-2 font-semibold text-center mb-2 hover:bg-gray-100">Track Order</a>
    <a href="/" class="w-full border rounded py-2 font-semibold text-center hover:bg-gray-100">Back to Homepage</a>
    <div class="text-xs text-gray-400 mt-4 text-center">Automatically redirected to the order tracking page in 5 seconds.</div>
  </div>
</div> 
</x-app-layout>