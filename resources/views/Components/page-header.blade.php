{{-- resources/views/components/page-header.blade.php --}}
<div class="flex flex-col md:flex-row justify-between items-center mb-6">
    <h1 class="text-2xl md:text-3xl font-bold text-[#262626] font-rethink mb-4 md:mb-0">{{ $title }}</h1>
    
    <!-- Mobile logout button -->
    <div class="md:hidden">
        <x-logout-button />
    </div>
</div>