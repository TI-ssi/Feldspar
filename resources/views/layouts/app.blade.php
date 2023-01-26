<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

	@livewireStyles
	
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>	
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            <!-- Page Content -->
            <main class="container mx-auto min-h-screen py-3">
                {{ $slot ?? '' }}
		@yield('content')
            </main>

	    <footer class="text-center bg-gray-500 text-white w-100 p-3 fixed bottom-0 left-0 right-0 h-12">
	        {{ config('app.name', 'Laravel') }} - {{ date('Y') }}
	    </footer>
	    
    	    @livewireScripts

        </div>
    </body>
</html>
