<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Perisal-PDP' }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col min-h-screen">

        <!-- Navbar -->
        <x-navbar />

        <!-- Dynamic Content -->
        <main class="p-6">
            @yield('content')
        </main>

        <!-- Footer -->
        <x-footer />

    </div>

</body>
</html>
