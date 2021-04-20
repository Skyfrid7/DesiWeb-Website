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

            <div class="footer-pre-banner">

                <div class="footer-infos-container">

                    <div class="infos-wrapper">

                        <div class="icons">
                            <img src="{{ asset('assets/svg/map-marker-alt-solid.svg') }}" alt="Icône de">
                            <img src="{{ asset('assets/svg/phone-solid.svg') }}" alt="Icône de">
                            <img src="{{ asset('assets/svg/envelope-solid.svg') }}" alt="Icône de">
                        </div>
                        
                        <div class="texts">
                            <span>Région de Belfort (90)</span>
                            <span>06 43 56 83 23</span>
                            <span>skyfrid.webdev@gmail.com</span>
                        </div>
                       
                    </div>

                    <a href="{{ route('contact.create') }}" class="btn footer-btn">Me contacter</a>

                </div>

                <img src="https://dummyimage.com/500x500/dedede/000000.png" alt="Photo de moi">

            </div>

        </footer>
        
    </body>
</html>
