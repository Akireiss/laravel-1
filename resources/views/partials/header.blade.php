<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    {{-- icons --}}
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">


    <title>
        {{ $title !== '' ? $title : 'Student System' }}

    </title>
</head>

<body class="bg-gray-100">




