@php
// Contoh data order, ganti dengan data dari controller
$order = [
  'id' => '12345',
  'items' => [
    ['name' => 'Korean Chicken Bites - Dakganjeong Sauce', 'qty' => 2, 'price' => 110000],
    ['name' => 'Bibimbap Chicken', 'qty' => 2, 'price' => 110000],
    ['name' => 'Sundubujjigae', 'qty' => 1, 'price' => 55000],
  ],
  'subtotal' => 275000,
  'delivery' => 10000,
  'total' => 285000,
  'address' => 'Jl. Nangka 2 Blok 3 AF No.7 RT.3/RW.4 Pagedangan, Tangerang, Banten, 15339, Indonesia',
  'courier' => 'zzzxxsaa • 08123456789',
  'status' => 2 // 0: confirmed, 1: prepared, 2: in progress, 3: delivered
];
$hasOrder = true; // Ganti false untuk tampilan kosong
@endphp
<x-app-layout>
<div class="max-w-3xl mx-auto py-10 px-4">
  <h1 class="text-2xl font-bold mb-6">Your Order</h1>
  @if(!$hasOrder)
    <div class="border rounded-lg bg-white flex flex-col items-center justify-center py-12 mb-6">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a2 2 0 012-2h2a2 2 0 012 2v2m-6 4h6a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
      <div class="font-bold text-lg mb-1">No Orders Yet</div>
      <div class="text-gray-500 text-center mb-4">Looks like you haven't placed an order yet.<br>Explore our delicious Korean menu and place your first order today!</div>
    </div>
    <a href="/" class="block w-full max-w-xs mx-auto border border-gray-400 rounded py-2 text-center font-semibold hover:bg-gray-100">Browse Menu</a>
  @else
    <div class="border rounded-lg bg-white p-4 mb-6">
      <div class="font-semibold mb-2">Order ID #{{ $order['id'] }}</div>
      <div class="grid grid-cols-3 font-semibold border-b py-1">
        <div class="text-left">Product</div>
        <div class="text-center">Qty</div>
        <div class="text-right">Price</div>
      </div>
      @foreach($order['items'] as $item)
        <div class="grid grid-cols-3 py-1 border-b">
          <div class="text-left">{{ $item['name'] }}</div>
          <div class="text-center">{{ $item['qty'] }}</div>
          <div class="text-right">Rp. {{ number_format($item['price'],0,',','.') }}</div>
        </div>
      @endforeach
      <div class="grid grid-cols-3 py-1 border-b font-semibold">
        <div class="text-left">Sub Total</div>
        <div class="text-center">{{ collect($order['items'])->sum('qty') }}</div>
        <div class="text-right">Rp. {{ number_format($order['subtotal'],0,',','.') }}</div>
      </div>
      <div class="grid grid-cols-3 py-1 border-b">
        <div class="text-left">Delivery Charge</div>
        <div></div>
        <div class="text-right">Rp. {{ number_format($order['delivery'],0,',','.') }}</div>
      </div>
      <div class="grid grid-cols-3 py-2 font-bold text-base">
        <div class="text-left">Total</div>
        <div></div>
        <div class="text-right">Rp. {{ number_format($order['total'],0,',','.') }}</div>
      </div>
    </div>
    <div class="border rounded-lg bg-white p-4 mb-4">
      <div class="font-semibold mb-1">Delivery Address</div>
      <div class="text-sm">{{ $order['address'] }}</div>
    </div>
    <div class="border rounded-lg bg-white p-4 mb-4">
      <div class="font-semibold mb-1">Courier Information</div>
      <div class="text-sm">{{ $order['courier'] }}</div>
    </div>
    <div class="border rounded-lg bg-white p-4">
      <div class="font-semibold mb-2">Delivery Status Order</div>
      <div class="space-y-2">
        <div class="flex items-start gap-2">
          <input type="checkbox" class="mt-1" disabled {{ $order['status'] >= 0 ? 'checked' : '' }}>
          <div>
            <div class="font-semibold">Order Confirmed</div>
            <div class="text-xs text-gray-500">Your order has been received</div>
          </div>
        </div>
        <div class="flex items-start gap-2">
          <input type="checkbox" class="mt-1" disabled {{ $order['status'] >= 1 ? 'checked' : '' }}>
          <div>
            <div class="font-semibold">Order Prepared</div>
            <div class="text-xs text-gray-500">Your order has been prepared</div>
          </div>
        </div>
        <div class="flex items-start gap-2">
          <input type="checkbox" class="mt-1" disabled {{ $order['status'] >= 2 ? 'checked' : '' }}>
          <div>
            <div class="font-semibold">Delivery In Progress</div>
            <div class="text-xs text-gray-500">Hang On! Your food is on the way</div>
          </div>
        </div>
        <div class="flex items-start gap-2">
          <input type="checkbox" class="mt-1" disabled {{ $order['status'] >= 3 ? 'checked' : '' }}>
          <div>
            <div class="font-semibold">Delivered</div>
            <div class="text-xs text-gray-500">Enjoy your food!</div>
          </div>
        </div>
      </div>
    </div>
  @endif
</div> 
</x-app-layout>