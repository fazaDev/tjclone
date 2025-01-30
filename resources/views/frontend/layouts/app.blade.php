<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Tribun Jambi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow">
        <nav class="container mx-auto px-4 py-3 flex items-center justify-between">
            <a href="/" class="text-2xl font-bold text-red-600">TRIBUN JAMBI</a>
            <div class="flex items-center space-x-4">
                @include('frontend.partials.search-form')
                @auth
                    <a href="{{ route('profile') }}" class="text-gray-600 hover:text-red-600">Profil</a>
                    @if(auth()->user()->isAdmin())
                        <a href="/admin/dashboard" class="text-gray-600 hover:text-red-600">Admin</a>
                    @endif
                @else
                    <a href="/login" class="text-gray-600 hover:text-red-600">Login</a>
                @endauth
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-6">
        <div class="flex gap-6">
            <div class="w-3/4">
                @yield('content')
            </div>
            <div class="w-1/4">
                @include('frontend.partials.sidebar')
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-8 py-6">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; {{ date('Y') }} Tribun Jambi. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
