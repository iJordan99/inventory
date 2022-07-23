<x-layout>
    <div class="bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-20 lg:max-w-none">
                <h2 class="text-2xl font-extrabold text-gray-900">Warehouses</h2>
        
                <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
                    

                    @foreach ($warehouses as $warehouse)
						<x-warehouse-item :warehouse="$warehouse"/>
					@endforeach
        
        
                

                
                </div>
            </div>
        </div>
  </div>
  



</x-layout>