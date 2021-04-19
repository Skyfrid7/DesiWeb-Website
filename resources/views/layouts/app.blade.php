<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

        <!-- Js -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </head>

    <body>

        <nav id="navbar">

            <div class="logo">
                <a href="{{ route('welcome') }}"><img src="{{ asset('assets/svg/webdev-logo.svg') }}" alt="logo de l'entrepise Skyfrid Développement"></a>
            </div>

            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>

            <ul>
                <li>
                    <a href="{{ route('welcome') }}">Accueil</a>
                    <div class="{{ (request()->routeIs('welcome')) ? 'active' : '' }}"></div>
                </li>
                <li>
                    <a href="{{ route('services') }}">Services</a>
                    <div class="{{ (request()->routeIs('services')) ? 'active' : '' }}"></div>
                </li>
                <li>
                    <a href="{{ route('realisations') }}">Réalisations</a>
                    <div class="{{ (request()->routeIs('realisations')) ? 'active' : '' }}"></div>
                </li>
                <li class="contact {{ (request()->routeIs('contact.create')) ? 'contact-active' : '' }}">
                    <a href="{{ route('contact.create') }}">Contact</a>
                </li>
            </ul>

        </nav>

        <div id="main">
            @yield('content')
        </div>

        <footer>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926701.643826485!2d-6.433306280912983!3d47.186816987607365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47923b78fc4e48e1%3A0x409ce34b30d50d0!2sBelfort!5e0!3m2!1sfr!2sfr!4v1618864553063!5m2!1sfr!2sfr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            <div class="footer-infos-container">
                
            </div>

        </footer>
        
    </body>
</html>
