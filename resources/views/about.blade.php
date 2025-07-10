<x-app-layout>
<div class="max-w-3xl mx-auto py-10 px-4">
    <h1 class="text-xl font-bold mb-4">About Us</h1>
    <div class="border rounded-lg bg-white flex flex-col md:flex-row overflow-hidden">
        <div class="flex-1 p-4">
        <div class="font-bold text-2xl mb-2">BONBU</div>
        <p class="text-sm mb-2">Bonbu is a restaurant that presents authentic Korean flavors in a warm and modern atmosphere. We are committed to serving delicious Korean cuisine, from main courses, traditional snacks, refreshing drinks, to mouth-watering desserts.</p>
        <p class="text-sm mb-2">With selected ingredients and hygienic processing, every dish at Bonbu is created to provide an unforgettable Korean culinary experience. We want every customer to feel the deliciousness and comfort as if they were enjoying food directly in Korea. We believe that good food is not only about taste, but also about the ease and satisfaction in enjoying it.</p>
        <p class="text-sm">Welcome to Bonbu - a place where Korean deliciousness comes closer to you.</p>
        </div>
        <div class="flex-1 min-w-[180px] max-w-xs flex items-center justify-center p-4">
        <img src="{{ asset('img/about.png') }}" alt="Bonbu Restaurant" class="rounded w-full object-cover h-48 md:h-64">
        </div>
    </div>
    </div> 
</x-app-layout>