<tbody>
    <tr class="hover:bg-gray-600">
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <div class="flex items-center">
                <div>
                    <p class="text-gray-900 whitespace-no-wrap">
                        {{ $item->name }}
                    </p>
                </div>
            </div>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <p class="text-gray-900 whitespace-no-wrap">{{ $item->reference }}</p>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <p class="text-gray-900 whitespace-no-wrap">
                {{ $item->pivot->stock }}
            </p>
        </td>
    </tr>					
</tbody>