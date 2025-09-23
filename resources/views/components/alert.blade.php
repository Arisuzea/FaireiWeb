@props(['type' => 'success', 'message' => ''])

<div 
    x-data="{ open: true }" 
    x-show="open"
    x-init="setTimeout(() => open = false, 3000)" {{-- auto close after 3s --}}
    class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50"
>
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm w-full">
        <h2 class="text-lg font-semibold 
            {{ $type === 'success' ? 'text-green-600' : 'text-red-600' }}">
            {{ ucfirst($type) }}
        </h2>
        <p class="mt-2 text-gray-700">{{ $message }}</p>
        <button 
            @click="open = false"
            class="mt-4 bg-gray-200 px-4 py-2 rounded hover:bg-gray-300"
        >
            Close
        </button>
    </div>
</div>
