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
                            <img src="{{ asset('assets/svg/map-marker-alt-solid.svg') }}" alt="Icône de Position">
                            <img src="{{ asset('assets/svg/phone-solid.svg') }}" alt="Icône de Téléphone">
                            <img src="{{ asset('assets/svg/envelope-solid.svg') }}" alt="Icône de Mail">
                        </div>
                        
                        <div class="texts">
                            <span>Région de Belfort (90)</span>
                            <a href="tel:0643568323">06 43 56 83 23</a>
                            <a href="mailto:skyfrid.webdev@gmail.com">skyfrid.webdev@gmail.com</a>
                        </div>
                       
                    </div>

                    <a href="{{ route('contact.create') }}" class="btn footer-btn">Me contacter</a>

                </div>

                <img class="portrait" src="{{ asset("assets/img/photo-portrait.jpg") }}" alt="Photo de moi">

            </div>

            <div class="footer-links">

                <div class="presentation">
                    <img src="{{ asset("assets/svg/webdev-logo.svg") }}" alt="logo de l'entreprise">
                    <span>Guillaume Sutty - Création de sites webs: conception, réalisation, optimisation, hébergement et maintenance.
                        Je vous accompagne dans votre projet pour un rendu qui vous satisfera à coup sûr.</span>
                </div>

                <div class="other-pages">
                    <h5>Voir aussi</h5>
                    <ul>
                        <li><a href="{{ route('welcome') }}">Accueil</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('realisations') }}">Réalisations</a></li>
                    </ul>
                </div>

                <div class="contact-infos">
                    <h5>Contact</h5>
                    <ul>
                        <li><a href="tel:0643568323">Tél: 06 43 56 83 23</a></li>
                        <li><a href="mailto:skyfrid.webdev@gmail.com">Mail: skyfrid.webdev@gmail.com</a></li>
                        <li><a href="{{ route('contact.create') }}">Me contacter</a></li>
                    </ul>
                </div>

            </div>

            <hr>

            <div class="credits">
                <span>©2021 Guillaume Sutty - DesiWeb - Tous droits réservés | <a href="">Mentions Légales</a>  | <a href="">CGV</a></span>
            </div>

        </footer>
        
    </body>
</html>
