<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Primary Meta Tags -->
        <title>DesiWeb - @yield('title')</title>
        <meta name="title" content="DesiWeb - @yield('title')">
        <meta name="description" content="@yield('description')">
        @yield('noindex')

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.desiweb.fr/">
        <meta property="og:title" content="DesiWeb - Développement Web: Création de sites internet sur mesure">
        <meta property="og:description" content="Guillaume Sutty, développeur web freelance depuis 3 ans basé à Belfort. Je réalise des sites de tous types: vitrine, e-commerce, blog, site personnel.">
        <meta property="og:image" content="https://www.desiweb.fr/assets/img/Desiweb-2-original.jpg">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://www.desiweb.fr/">
        <meta property="twitter:title" content="DesiWeb - Développement Web: Création de sites internet sur mesure">
        <meta property="twitter:description" content="Guillaume Sutty, développeur web freelance depuis 3 ans basé à Belfort. Je réalise des sites de tous types: vitrine, e-commerce, blog, site personnel.">
        <meta property="twitter:image" content="https://www.desiweb.fr/assets/img/Desiweb-2-original.jpg">

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
        <script defer src="{{ asset('assets/js/main.js') }}"></script>

        <!-- AnimateOnScroll -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script async src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-E96MS6BFB6"></script>
        <script>
            window.onload = function() {
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'G-E96MS6BFB6', { 'anonymize_ip': true });
            };
        </script>
    </head>

    <body>

        <script>
            window.onload = function() {
                AOS.init();
            };
        </script>

        <nav id="navbar">

            <div class="logo">
                <a href="{{ route('welcome') }}"><img src="{{ asset('assets/img/DesiWeb-png-2.png') }}" alt="logo de l'entrepise DesiWeb"></a>
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

        <div class="footer-pre-banner">

            <div class="footer-infos-container contact-coo">

                <div class="infos-wrapper">

                    <div class="icons">
                        <img src="{{ asset('assets/svg/map-marker-alt-solid.svg') }}" alt="Icône de Position">
                        <img src="{{ asset('assets/svg/phone-solid.svg') }}" alt="Icône de Téléphone">
                        <img src="{{ asset('assets/svg/envelope-solid.svg') }}" alt="Icône de Mail">
                    </div>
                    
                    <div class="texts">
                        <span class="belfort">Région de Belfort (90)<br><span id="reminder"><img src="{{ asset("assets/svg/circle-solid.svg") }}" alt="Icône rond vert de disponibilité">Disponible à distance</span></span>
                        <a href="tel:0781074110">07 81 07 41 10</a>
                        <a href="mailto:contact@desiweb.fr">contact@desiweb.fr</a>
                    </div>
                    
                </div>

                <a href="{{ route('contact.create') }}" class="btn footer-btn">Me contacter</a>

            </div>
            
            <div class="footer-infos-container devis-container">
                <img src="{{ asset('assets/svg/file-invoice-solid.svg') }}" alt="Icône de Devis">
                <h3>Devis en 48h</h3>
                <div class="cc-container">
                    <div><img src="{{ asset('assets/svg/check-solid.svg') }}" alt="Icône de Devis"><span>Réponse rapide</span></div>
                    <div><img src="{{ asset('assets/svg/check-solid.svg') }}" alt="Icône de Devis"><span>Prix attractifs</span></div>
                    <div><img src="{{ asset('assets/svg/check-solid.svg') }}" alt="Icône de Devis"><span>Site sur-mesure</span></div>
                    <div><img src="{{ asset('assets/svg/check-solid.svg') }}" alt="Icône de Devis"><span>Référencement optimisé</span></div>
                </div>

            </div>

        </div>

        <footer>

            <div class="footer-links">

                <div class="presentation">
                    <img src="{{ asset("assets/img/DesiWeb-png-2.png") }}" alt="logo de l'entreprise">
                    <span>Guillaume Sutty - Création de sites webs: conception, réalisation, optimisation, hébergement et maintenance.
                        Je vous accompagne dans votre projet pour un rendu qui vous satisfera à coup sûr.</span>
                </div>

                <div class="infos-pages-container">

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
                            <li><a href="tel:0781074110">Tél: 07 81 07 41 10</a></li>
                            <li><a href="mailto:contact@desiweb.fr">Mail: contact@desiweb.fr</a></li>
                            <li><a href="{{ route('contact.create') }}">Me contacter</a></li>
                        </ul>
                    </div>

                </div>

            </div>

            <hr>

            <div class="credits">
                <span>©2021 Guillaume Sutty - DesiWeb - Tous droits réservés | <a href="{{ route('mentions-legales') }}">Mentions Légales</a>  | <a href="{{ route('CGV') }}">CGV</a></span>
            </div>

        </footer>
        
    </body>
</html>
