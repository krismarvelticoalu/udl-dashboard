<x-layout>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-1/5 bg-white p-6 flex flex-col justify-between shadow-md">
            <div>
                <div class="flex items-center space-x-2 mb-6">
                    <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                    <span class="text-gray-700 font-medium">Product Admin</span>
                </div>
                <nav>
                    <a href="#" class="block text-[#90C853] font-medium">Products</a>
                </nav>
            </div>
            <button class="border border-[#90C853] text-[#90C853] py-2 px-6 rounded-full flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#90C853">
                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h8.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 11-1.414-1.414L12.586 11H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                <span class="font-medium">Log out</span>
            </button>
        </aside>
        
        <!-- Main Content -->
        <main class="flex-1 p-10">
            <h1 class="text-3xl font-bold text-[#262626] font-rethink mb-4">Inventory</h1>
            
            <!-- Stats -->
            <div class="grid grid-cols-3 gap-4 mb-6">
                <div class="p-4 bg-white shadow-md text-center rounded">
                    <h2 class="text-gray-600">Total Products</h2>
                    <p class="text-[#90C853] text-2xl font-bold">3</p>
                </div>
                <div class="p-4 bg-white shadow-md text-center rounded">
                    <h2 class="text-gray-600">Categories</h2>
                    <p class="text-[#90C853] text-2xl font-bold">1</p>
                </div>
                <div class="p-4 bg-white shadow-md text-center rounded">
                    <h2 class="text-gray-600">Total Items</h2>
                    <p class="text-[#90C853] text-2xl font-bold">3</p>
                </div>
            </div>
            
            <!-- Add Product Button -->
            <div class="flex justify-end mb-4">
                <button class="bg-[#90C853] text-white py-2 px-4 rounded">+ Add Product</button>
            </div>
            
            <!-- Table -->
            <div class="bg-white shadow-md rounded">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-[#E3F2D3]">
                        <tr>
                            <th class="p-3"><input type="checkbox"></th>
                            <th class="p-3">Product Name</th>
                            <th class="p-3">Category</th>
                            <th class="p-3">Price</th>
                            <th class="p-3">Date Added</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t">
                            <td class="p-3"><input type="checkbox"></td>
                            <td class="p-3">UDL Lanyard 1.0</td>
                            <td class="p-3">Lanyards</td>
                            <td class="p-3">25.000</td>
                            <td class="p-3">08/01/2025</td>
                        </tr>
                        <tr class="border-t">
                            <td class="p-3"><input type="checkbox"></td>
                            <td class="p-3">UDL Lanyard 2.0</td>
                            <td class="p-3">Lanyards</td>
                            <td class="p-3">25.000</td>
                            <td class="p-3">08/01/2025</td>
                        </tr>
                        <tr class="border-t">
                            <td class="p-3"><input type="checkbox"></td>
                            <td class="p-3">Year 3 Students Lanyard</td>
                            <td class="p-3">Lanyards</td>
                            <td class="p-3">25.000</td>
                            <td class="p-3">08/01/2025</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="flex justify-center mt-4">
                <button class="border border-gray-300 px-3 py-1 rounded">1</button>
            </div>
        </main>
    </div>
</x-layout>
