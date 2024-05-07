<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $site->description() }}">
    <title>{{ $site->title() }} | {{ $page->title() }}</title>

    @if ($image = $site->opengraph()->toFile())
    <meta property="og:image" content="{{ $image->url() }}" />

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ $site->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $site->title() }} | {{ $page->title() }}">
    <meta property="og:description" content="{{ $site->description() }}">
    <meta property="og:image" content="{{ $image->url() }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="mutantsftn.com">
    <meta property="twitter:url" content="{{ $site->url() }}">
    <meta name="twitter:title" content="{{ $site->title() }} | {{ $page->title() }}">
    <meta name="twitter:description" content="{{ $site->description() }}">
    <meta name="twitter:image" content="{{ $image->url() }}">

    @endif

    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
</head>
<body>

@include('partials.nav')

@yield('content')

@include('partials.footer')
</body>
</html>
