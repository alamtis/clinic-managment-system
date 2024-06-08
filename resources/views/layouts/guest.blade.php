<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data" lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body >
        <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
            {{ $slot }}
        </div>
    </body>
</html>
