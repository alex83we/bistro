<!doctype html>
<html lang="de">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <meta name="author" content="Alexander Guthmann">
    <meta name="publisher" content="Buttstädter Bistro">
    <meta name="copyright" content="Alexander Guthmann">
    <meta name="description" content="Buttstädter Bistro, Windhöfe 31, 99628, Buttstädt, Ihre Pizzeria in Buttstädt. Wir bieten ihnen hier unsere Speisekarte, an die immer aktuell ist und sie können dann bei uns per Telefon bestellen. Burger, Pizza, Döner, Kurdische Gerichte, Salat, Getränke">
    <meta name="keywords" content="Burger, Pizza, Döner, Kurdische, Gerichte, Salat, Getränke, Nudeln, Steinofenpizza, Pide, Spezialitäten, Snacks, Aufläufe, Buttstädt, Bistro, Lieferservice, Essen, auf, Rädern, Windhöfe, Mindestbestellwert">
    <meta name="page-topic" content="Dienstleistung">
    <meta name="audience" content="Alle">
    <meta http-equiv="content-language" content="de">
    <meta name="robots" content="index, follow">

    <!-- Dublin Core Meta Tags -->
    <meta name="DC.Creator" content="Alexander Guthmann">
    <meta name="DC.Publisher" content="Buttstädter Bistro">
    <meta name="DC.Rights" content="Alexander Guthmann">
    <meta name="DC.Description" content="Buttstädter Bistro, Windhöfe 31, 99628, Buttstädt, Ihre Pizzeria in Buttstädt. Wir bieten ihnen hier unsere Speisekarte, an die immer aktuell ist und sie können dann bei uns per Telefon bestellen. Burger, Pizza, Döner, Kurdische Gerichte, Salat, Getränke">
    <meta name="DC.Language" content="de">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Buttstädter Bistro Speisekarte">
    <meta property="og:site_name" content="Buttstädter Bistro">
    <meta property="og:url" content="https://www.buttstaedter-bistro.de">
    <meta property="og:description" content="Buttstädter Bistro, Windhöfe 31, 99628, Buttstädt, Ihre Pizzeria in Buttstädt. Wir bieten ihnen hier unsere Speisekarte, an die immer aktuell ist und sie können dann bei uns per Telefon bestellen. Burger, Pizza, Döner, Kurdische Gerichte, Salat, Getränke">
    <meta property="og:type" content="restaurant.menu">
    <meta property="og:image" content="https://www.buttstaedter-bistro.de/img/facebook_logo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.buttstaedter-bistro.de/">
    <meta property="twitter:title" content="Buttstädter Bistro Speisekarte">
    <meta property="twitter:description" content="Buttstädter Bistro, Windhöfe 31, 99628, Buttstädt, Ihre Pizzeria in Buttstädt. Wir bieten ihnen hier unsere Speisekarte, an die immer aktuell ist und sie können dann bei uns per Telefon bestellen. Burger, Pizza, Döner, Kurdische Gerichte, Salat, Getränke">
    <meta property="twitter:image" content="https://www.buttstaedter-bistro.de/img/twitter_logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>@yield('title') | Buttstädter Bistro</title>
</head>
<body class="bg-dark">


<main class="main d-block">
    @include('layouts.partials.topbar')

    @yield('content')

    @include('layouts.partials.footer')
</main>



<!-- Optional JavaScript -->
<!-- Popper.js first, then Bootstrap JS -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>