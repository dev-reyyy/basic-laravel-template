@props([
    'heading' => 'Modal Heading',
])

<div id="modalTemplate" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-full bg-black/75">

    <div class="relative w-full max-h-full bg-white rounded-lg shadow dark:bg-gray-800" id="modalContent">
        <!-- Modal header -->
        <div class="flex items-center justify-between px-3 py-2 md:px-4 md:py-3 border-b rounded-t dark:border-gray-600 border-gray-200">
            <h3 id="modalHeading" class="mb-0 text-lg font-semibold text-gray-900 dark:text-white">
                {{ $heading }}
            </h3>
            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-close>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>

        <!-- Modal body -->
        <div class="p-4 md:p-5" id="modalBody">
            {{-- AJAX-loaded content will be injected here --}}
        </div>
    </div>
</div>