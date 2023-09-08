<!DOCTYPE html class="light">
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        
        <meta name="twitter:site" content="@preline">
        <meta name="twitter:creator" content="@htmlstream">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Hero Gradient Background using Tailwind CSS | Preline UI, crafted with Tailwind CSS">
        <meta name="twitter:description" content="Hero section example using Tailwind CSS for Preline UI, a product of Htmlstream.">
        <meta name="twitter:image" content="{{url('assets/images/og-logo.svg')}}">
      
        <meta property="og:url" content="https://preline.co/">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Preline">
        <meta property="og:title" content="Hero Gradient Background using Tailwind CSS | Preline UI, crafted with Tailwind CSS">
        <meta property="og:description" content="Hero section example using Tailwind CSS for Preline UI, a product of Htmlstream.">
        <meta property="og:image" content="{{url('assets/images/og-logo.svg')}}">

        <title>{{ $page->title }}</title>

        <link rel="icon" type="image/svg+xml" href="{{url('assets/images/favicon.svg')}}">
        <link rel="icon" type="image/png" href="{{url('assets/images/favicon.png')}}">        

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ url(mix('css/main.css', 'assets/build')) }}">
        <script defer src="{{ url(mix('js/main.js', 'assets/build')) }}"></script>
    </head>
    <body class="dark:bg-slate-900">
        @include('_layouts._header.menu')
        @yield('body')
        @include('_partials.modal')
        @stack('data')
        @include('_layouts._footer.menu')
    </body>
</html>
