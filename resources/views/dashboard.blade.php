<x-layout>
    <div class="flex flex-col md:flex-row h-screen">
        <!-- Sidebar - Collapsible on mobile -->
        <aside class="w-full md:w-64 bg-white p-4 md:p-6 flex md:flex-col justify-between shadow-md md:h-screen overflow-y-auto">
            <div class="flex md:flex-col w-full">
                <div class="flex items-center space-x-2 mb-4 md:mb-10">
                    <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
                    <span class="text-gray-700 font-medium">Product Admin</span>
                </div>
                <nav class="flex-1 md:mt-0 flex flex-col md:justify-start space-y-3">
                    <a href="/dashboard" class="flex items-center text-[#90C853] font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        Products
                    </a>
                    <a href="/galleries" class="flex items-center text-gray-600 font-medium hover:text-[#90C853]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4a.5.5 0 01-.5-.5V5a.5.5 0 01.5-.5h12a.5.5 0 01.5.5v9.5a.5.5 0 01-.5.5z" clip-rule="evenodd" />
                            <path d="M4 6h12M4 8h12M4 10h12" />
                        </svg>
                        Galleries
                    </a>
                </nav>
            </div>
            
            <div class="hidden md:block">
                <button class="border border-[#90C853] text-[#90C853] py-2 px-6 rounded-full flex items-center justify-center w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="#90C853">
                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h8.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 11-1.414-1.414L12.586 11H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>
                    <span class="font-medium text-sm">Log out</span>
                </button>
            </div>
        </aside>
        
        <!-- Main Content -->
        <main class="flex-1 p-4 md:p-10 overflow-y-auto bg-[#F4F4F4]">
            <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                <h1 class="text-2xl md:text-3xl font-bold text-[#262626] font-rethink mb-4 md:mb-0">Inventory</h1>
                
                <!-- Mobile logout button -->
                <button class="md:hidden border border-[#90C853] text-[#90C853] py-2 px-6 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="#90C853">
                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h8.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 11-1.414-1.414L12.586 11H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>
                    <span class="font-medium text-sm">Log out</span>
                </button>
            </div>
            
            <!-- Stats -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 mb-6 md:mb-8">
                <div class="p-4 bg-white shadow-sm text-center rounded">
                    <h2 class="text-gray-600 text-sm mb-1">Total Products</h2>
                    <p class="text-[#90C853] text-3xl md:text-4xl font-bold">3</p>
                </div>
                <div class="p-4 bg-white shadow-sm text-center rounded">
                    <h2 class="text-gray-600 text-sm mb-1">Categories</h2>
                    <p class="text-[#90C853] text-3xl md:text-4xl font-bold">1</p>
                </div>
                <div class="p-4 bg-white shadow-sm text-center rounded">
                    <h2 class="text-gray-600 text-sm mb-1">Total Items</h2>
                    <p class="text-[#90C853] text-3xl md:text-4xl font-bold">3</p>
                </div>
            </div>
            
            <!-- Add Product Button -->
            <div class="flex justify-end mb-4">
                <button class="bg-[#90C853] text-white py-2 px-4 rounded flex items-center text-sm">
                    <span class="mr-1">+</span> Add Product
                </button>
            </div>
            
            <!-- Table with scroll for mobile -->
            <div class="bg-white shadow-sm rounded-md overflow-x-auto">
                <table class="w-full text-left border-collapse min-w-full">
                    <thead>
                        <tr class="bg-[#E3F2D3]">
                            <th class="p-3 md:p-4 pl-4 md:pl-6 w-12"></th>
                            <th class="p-3 md:p-4 text-sm font-medium text-gray-600">Product Name</th>
                            <th class="p-3 md:p-4 text-sm font-medium text-gray-600">Category</th>
                            <th class="p-3 md:p-4 text-sm font-medium text-gray-600">Price</th>
                            <th class="p-3 md:p-4 text-sm font-medium text-gray-600">Date Added</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t border-gray-100">
                            <td class="p-3 md:p-4 pl-4 md:pl-6"><input type="checkbox" class="rounded"></td>
                            <td class="p-3 md:p-4 text-sm">UDL Lanyard 1.0</td>
                            <td class="p-3 md:p-4 text-sm">Lanyards</td>
                            <td class="p-3 md:p-4 text-sm">25.000</td>
                            <td class="p-3 md:p-4 text-sm">08/01/2025</td>
                        </tr>
                        <tr class="border-t border-gray-100">
                            <td class="p-3 md:p-4 pl-4 md:pl-6"><input type="checkbox" class="rounded"></td>
                            <td class="p-3 md:p-4 text-sm">UDL Lanyard 2.0</td>
                            <td class="p-3 md:p-4 text-sm">Lanyards</td>
                            <td class="p-3 md:p-4 text-sm">25.000</td>
                            <td class="p-3 md:p-4 text-sm">08/01/2025</td>
                        </tr>
                        <tr class="border-t border-gray-100">
                            <td class="p-3 md:p-4 pl-4 md:pl-6"><input type="checkbox" class="rounded"></td>
                            <td class="p-3 md:p-4 text-sm">Year 3 Students Lanyard</td>
                            <td class="p-3 md:p-4 text-sm">Lanyards</td>
                            <td class="p-3 md:p-4 text-sm">25.000</td>
                            <td class="p-3 md:p-4 text-sm">08/01/2025</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="flex justify-center mt-6">
                <button class="flex items-center justify-center w-8 h-8 bg-[#90C853] text-white rounded-full text-sm">
                    1
                </button>
            </div>
        </main>
    </div>
</x-layout>