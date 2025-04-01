{{-- resources/views/components/sidebar.blade.php --}}
<aside class="w-full md:w-64 bg-white p-4 md:p-6 flex md:flex-col justify-between shadow-md md:h-screen overflow-y-auto">
    <div class="flex md:flex-col w-full">
        <div class="flex items-center space-x-2 mb-4 md:mb-10">
            <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
            <span class="text-gray-700 font-medium">Product Admin</span>
        </div>
        <nav class="flex-1 md:mt-0 flex flex-col md:justify-start space-y-3">
            <a href="/dashboard" class="flex items-center {{ $active === 'products' ? 'text-[#90C853]' : 'text-gray-600 hover:text-[#90C853]' }} font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                Products
            </a>
            <a href="/galleries" class="flex items-center {{ $active === 'galleries' ? 'text-[#90C853]' : 'text-gray-600 hover:text-[#90C853]' }} font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4a.5.5 0 01-.5-.5V5a.5.5 0 01.5-.5h12a.5.5 0 01.5.5v9.5a.5.5 0 01-.5.5z" clip-rule="evenodd" />
                    <path d="M4 6h12M4 8h12M4 10h12" />
                </svg>
                Galleries
            </a>
        </nav>
    </div>
    
    <div class="hidden md:block">
        <x-logout-button />
    </div>
</aside>