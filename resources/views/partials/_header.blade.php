<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
    @if ($title)
    <title>{{ $title }} - Yeti</title>
    @else
    <title>Yeti</title>
    @endif
    
    <!-- Generics -->
    <link rel="icon" href="{{ Vite::asset('resources/images/favicon/favicon-32.png') }}" sizes="32x32">
    <link rel="icon" href="{{ Vite::asset('resources/images/favicon/favicon-128.png') }}" sizes="128x128">
    <link rel="icon" href="{{ Vite::asset('resources/images/favicon/favicon-192.png') }}" sizes="192x192">
    
    <!-- Android -->
    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/favicon/favicon-196.png') }}" sizes="196x196">
    
    <!-- iOS -->
    <link rel="apple-touch-icon" href="{{ Vite::asset('resources/images/favicon/favicon-152.png') }}" sizes="152x152">
    <link rel="apple-touch-icon" href="{{ Vite::asset('resources/images/favicon/favicon-167.png') }}" sizes="167x167">
    <link rel="apple-touch-icon" href="{{ Vite::asset('resources/images/favicon/favicon-180.png') }}" sizes="180x180">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.css"/>

    
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- <link rel="stylesheet" href="{{ asset('build/css/style.css') }}" /> --}}
    @vite([ 'resources/css/style.css'])
</head>