@extends('layouts.app')

@section('content')

<section class="landing-page">

     <div class="landing-text">
          <h1>Mes <span class="blue">services</span>: vous<br>proposer le <span class="blue">meilleur</span></h1>
          <h2 class="subtitle">Découvrez ma façon de travailler, mêlant rigueur et inovation</h2>
     </div>

     <div class="landing-img" id="services-img">
          <img src="{{ asset('assets/img/services-img.png') }}" alt="image d'une application en construction">
     </div>

</section>

<img src="{{ asset('assets/svg/wave.svg') }}" alt="vague de transition" class="wave" id="services-wave">

<section class="project-timeline">

     

     <img src="{{ asset('assets/img/project-timeline.png') }}" alt="Monsieur en train de développer">

     <div class="project-container">

          <div class="step-container">

               <div class="step-header">
                    <img src="" alt="">
                    <h3>Conception de votre projet</h3>
               </div>

               <div class="step-text">
                    <img src="" alt="">
                    <p>Nous échangeons ensemble sur vos besoins ainsi que les stratégies à mettre en oeuvre pour les traduire en proposition de solutions techniques.</p>
               </div>
               

          </div>

     </div>

</section>

<img src="{{ asset('assets/svg/wave.svg') }}" class="wave end-wave" alt="vague de transition">

<section class="text-infos services-infos">

     <img src="{{ asset('assets/svg/services-first-line.svg') }}" alt="ligne avec des icones illustrant les textes">
     <div class="text-infos-container">
          <div class="text-content">
               <h4>Conception fonctionnelle</h4>
               <span>Comment passer d’une intention à un projet répondant à vos besoins réels ?<br>Grâce à des techniques telles que l’écoute active, nous définissons ensemble votre produit dans les moindres détails en vous soulignant les limites de votre idée initiale.
               </span>
          </div>
          <div class="text-content">
               <h4>Gestion de projet</h4>
               <span>Mener à bien un projet digital nécessite rigueur et précision. Nos processus de production avec en particulier l’édition d’un cahier de recette dès la phase de conception vous garantissent d’obtenir un produit de qualité livré dans les temps.
               </span>
          </div>
          <div class="text-content">
               <h4>Développement logiciel</h4>
               <span>Nous parlons en PHP et TWIG avec nos serveurs car le framework Symfony est notre spécialité ! Côté client, nous faisons interagir les éléments en nous appuyant sur VueJs, react, angular, D3.js, tweenmax, Ecmascript et le bon vieux javascript !
               </span>
          </div>
     </div>

     <img src="{{ asset('assets/svg/services-second-line.svg') }}" alt="ligne avec des icones illustrant les textes" class="second-services-infos">
     <div class="text-infos-container">
          <div class="text-content">
               <h4>Intégration web</h4>
               <span>Offrir à vos usagers une expérience utilisateur optimum nécessite une interface réalisée dans les règles de l’art avec les bonnes technos ! SASS, Flexbox, Lazyloading, Webfont, HTML, CSS, SVG… sont nos technos pour vous offrir des sites responsive design et RGAA.
               </span>
          </div>
          <div class="text-content">
               <h4>Hébergement sécurisé</h4>
               <span>Qu’elles soient personnelles ou stratégiques, vos données sont cruciales ! L’indisponibilité de vos services en ligne est un manque à gagner considérable… Nous vous offrons des solutions professionnelles de qualité où tout est sécurisé, sauvegardé et surveillé H24.
               </span>
          </div>
          <div class="text-content">
               <h4>Maintenance du site</h4>
               <span>Le forfait maintenance vous permet d’acquérir une totale tranquilité, grâce à un contrôle mensuel de la sécurité et du fonctionnement du site, ainsi que la possibilité d’effectuer des modifications mineures du design ou autre.</span>
          </div>
     </div>

</section>

@endsection