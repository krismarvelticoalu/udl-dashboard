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
                    <a href="/dashboard" class="flex items-center text-gray-600 font-medium hover:text-[#90C853]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        Products
                    </a>
                    <a href="/galleries" class="flex items-center text-[#90C853] font-medium">
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
                <h1 class="text-2xl md:text-3xl font-bold text-[#262626] font-rethink mb-4 md:mb-0">Galleries</h1>
                
                <!-- Mobile logout button -->
                <button class="md:hidden border border-[#90C853] text-[#90C853] py-2 px-6 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="#90C853">
                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h8.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 11-1.414-1.414L12.586 11H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>
                    <span class="font-medium text-sm">Log out</span>
                </button>
            </div>
            
            <!-- Form for adding gallery -->
            <div class="bg-white rounded-md shadow-sm p-6 mb-6">
                <form class="space-y-4">
                    <!-- Category -->
                    <div>
                        <input type="text" placeholder="Category" class="w-full px-4 py-3 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-[#90C853]">
                    </div>

                    <!-- Project Name -->
                    <div>
                        <input type="text" placeholder="Project Name" class="w-full px-4 py-3 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-[#90C853]">
                    </div>

                    <!-- Description -->
                    <div>
                        <input type="text" placeholder="Description" class="w-full px-4 py-3 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-[#90C853]">
                    </div>

                    <!-- GitHub Link -->
                    <div>
                        <input type="text" placeholder="GitHub link" class="w-full px-4 py-3 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-[#90C853]">
                    </div>

                    <!-- Image Uploads -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-4">
                        <div>
                            <p class="text-sm text-gray-600 mb-2">Header Image</p>
                            <div class="border border-gray-200 rounded-md p-6 flex flex-col items-center justify-center">
                                <button type="button" class="text-[#90C853] flex items-center text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    Upload Image
                                </button>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 mb-2">Additional Image</p>
                            <div class="border border-gray-200 rounded-md p-6 flex flex-col items-center justify-center">
                                <button type="button" class="text-[#90C853] flex items-center text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    Upload Image
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-[#90C853] text-white py-2 px-6 rounded-md">
                            Add Items
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</x-layout>