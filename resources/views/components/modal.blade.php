<div id="{{ $id ?? 'modal' }}" {{ $attributes->merge(['class' => 'hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50']) }}>
    <div class="bg-white p-6 rounded-2xl shadow-2xl w-full max-w-md relative overflow-hidden transform scale-95 transition-all duration-300 ease-out">
        <!-- Header -->
        <h2 class="text-2xl font-semibold mb-4" style="color: #0EA5E9;">{{ $title ?? 'Modal Title' }}</h2>

        <!-- Content -->
        <p class="mb-6" style="color: #374151;">{{ $slot ?? 'Default message goes here.' }}</p>

        <!-- Footer with right-aligned button -->
        <div class="flex justify-end">
            <button onclick="closeModal('{{ $id ?? 'modal' }}')"
                class="px-4 py-2 font-medium rounded-lg shadow transition duration-200"
                style="background-color: #0EA5E9; color: #FFFFFF;"
                onmouseover="this.style.backgroundColor='#0B86D6'"
                onmouseout="this.style.backgroundColor='#0EA5E9'">
                Close
            </button>
        </div>
    </div>
</div>
