<x-app-layout>
<div class="max-w-2xl mx-auto py-10 px-4">
  <h1 class="text-xl font-bold mb-4">Payment</h1>
  <div class="border rounded-lg bg-white p-4 mb-4 flex justify-between items-center">
    <div>
      <div class="font-semibold mb-1">Pay with DANA</div>
      <div class="font-bold text-2xl">Rp.285.000</div>
      <div class="text-sm">Order ID #12345</div>
    </div>
    <div class="text-right text-sm">10:00</div>
  </div>
  <div class="border rounded-lg bg-white p-4 mb-4 flex flex-col items-center">
    <div class="font-semibold mb-2">Scan to Pay</div>
    <img src="{{ asset('img/qr-sample.png') }}" alt="QR Code" class="w-40 h-40 mb-2">
    <div class="mb-2">Or</div>
    <button class="border rounded px-4 py-1 font-semibold hover:bg-gray-100">Download QR Code</button>
  </div>
  <div class="border rounded-lg bg-white p-4 mb-4">
    <div class="font-bold mb-1">How to Pay with DANA:</div>
    <ol class="list-decimal list-inside text-sm space-y-1">
      <li>Open the DANA app on your smartphone</li>
      <li>Tap on the Scan QR menu</li>
      <li>Point your camera at the displayed QR code, or select a saved code from your gallery</li>
      <li>Enter the total amount shown on your order</li>
      <li>Confirm the payment and save the transaction receipt</li>
    </ol>
  </div>
  <div class="border rounded-lg bg-white p-4 flex flex-col items-center mb-4">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3" /></svg>
    <div class="font-semibold mb-1">Waiting for Payment</div>
    <div class="text-xs text-gray-500 text-center">This page will update automatically once your payment is confirmed.</div>
  </div>
  <button class="w-full border rounded py-2 font-semibold hover:bg-gray-100">Cancel Payment</button>
</div> 
</x-app-layout>