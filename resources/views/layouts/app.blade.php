<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            
            <!-- Navbar -->
            <nav class="bg-black text-white p-4">
                <div class="max-w-7xl mx-auto flex justify-between items-center">
                    <a href="{{ url('/') }}" class="text-lg font-bold">Attendance System</a>
                    <div class="space-x-4">
                        <a href="{{ route('students.index') }}" class="hover:underline">Students</a>
                        <a href="{{ route('attendance.index') }}" class="hover:underline">Attendance</a>
                        <a href="{{ route('attendance.report') }}" class="hover:underline">Reports</a>
                        
                        @auth
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="hover:underline">Logout</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="hover:underline">Login</a>
                            <a href="{{ route('register') }}" class="hover:underline">Register</a>
                        @endauth
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
