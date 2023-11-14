<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight ++xxl:leading-none font-montserrat">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ++xxl:px-12 font-montserrat">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ++xxl:shadow-2xl">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>