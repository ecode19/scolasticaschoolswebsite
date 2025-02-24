<div x-data="{ open: false }" class="relative group">
    <a href="#" @mouseenter="open = true" @mouseleave="open = false"
        class="flex items-center p-2 text-lg text-white hover:border-b hover:border-green-400 transition duration-300">
        {{ $title }}
        <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:rotate-180" fill="none"
            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </a>

    <ul x-show="open" x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        @mouseenter="open = true" @mouseleave="open = false"
        class="absolute left-0 w-max bg-white text-gray-800 shadow-lg rounded-md py-2 mt-1 hidden group-hover:block z-50">

        {{ $slot }}
    </ul>
</div>
