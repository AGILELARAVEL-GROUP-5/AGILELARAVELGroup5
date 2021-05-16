<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('AGILE CRUD') }}
        </h2>
    </x-slot>
    <div class="py-12 px-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-sans font-semibold text-2xl p-6 bg-white border-8 rounded-3xl border-blue-800">
            
                    @yield('content')
        
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
