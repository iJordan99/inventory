<x-layout>
    <div class="bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-10 lg:max-w-none">
                <h2 class="text-2xl font-extrabold text-gray-900 tracking-wider font-semibold uppercase">{{ $warehouse->name }}</h2>
                <span class="text-xs xs:text-sm text-gray-500">
                    {{ $warehouse->location }}
                </span>
                <!-- component -->
                    <x-search-bar/>
                    <div>
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                <table class="min-w-full leading-normal">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Product Name
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Reference
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 bg-white text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Quantity
                                            </th>					
                                        </tr>
                                    </thead>
                                    
                                    @foreach ($items as $item)
                                        <x-items-trow :item="$item"/>
                                    @endforeach
                                    
                                    
                                </table>
                                <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-end xs:justify-between          ">
                                    {{-- <span class="text-xs xs:text-sm text-gray-900">
                                        Showing 1 to 4 of 50 Entries
                                    </span> --}}
                                    <div class="inline-flex mt-2 xs:mt-0">
                                        <button
                                            class="text-sm text-white transition duration-150 hover:bg-gray-700 bg-gray-800 font-semibold py-2 px-4 rounded-l hover:text-white">
                                            Prev
                                        </button>
                                        &nbsp; &nbsp;
                                        <button
                                            class="text-sm text-white transition duration-150 hover:bg-gray-700 bg-gray-800 font-semibold py-2 px-4 rounded-r hover:text-white">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
  



</x-layout>