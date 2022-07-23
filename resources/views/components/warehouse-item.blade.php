@props(['warehouse'])
<div class="group relative mb-10  ">
  <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
    <img src="{{ asset('Images/logistics_icon.svg') }}" alt="" srcset="">
  </div>
  <h3 class="mt-6 text-sm text-gray-500">
    <a href="#">
      <span class="absolute inset-0"></span>
        {{ $warehouse->location }}  
    </a>
  </h3>
  <p class="text-base font-semibold text-gray-900">
    {{ $warehouse->name }}
  </p>
</div>