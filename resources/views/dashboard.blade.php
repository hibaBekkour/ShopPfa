<x-app-layout>
    <x-slot name="header">
    <link rel="stylesheet" href="web/css/styles.css">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <button class="home__btns">
                            <a href="/discover" class="button button--gray button--small"><br>Start Shopping Now!!</a>
                    </button>
                    
                </div>
            </div>
            
        </div>
    </div>


</x-app-layout>

