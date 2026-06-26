<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
</head>
<body class="p-0 m-0">
    <x-partials.navbar></x-partials.navbar>
    <x-partials.main></x-partials.main>
    <x-partials.footer></x-partials.footer>
</body>
</html>