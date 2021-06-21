@extends('layouts.app')

@section('title', "Nos services: découvrez notre façon de travailler")
@section('description', "La création de votre site se déroule en plusieurs étapes: conception, développement, mise en ligne et maintenance avec des technologies modernes et innovantes.")

@section('content')

<section class="landing-page">

     <div class="landing-text">
          <h1>Mes <span class="blue">services</span>: vous<br>proposer le <span class="blue">meilleur</span></h1>
          <h2 class="subtitle">Découvrez ma façon de travailler, mêlant rigueur et innovation</h2>
     </div>

     <div class="landing-img" id="services-img">
          <img src="{{ asset('assets/img/services-img.png') }}" alt="image d'une application en construction">
     </div>

</section>

<img src="{{ asset('assets/svg/wave.svg') }}" alt="vague de transition" class="wave" id="services-wave">

<section class="project-timeline">

     

     <img class="dev-worker" src="{{ asset('assets/img/project-timeline.png') }}" alt="Monsieur en train de développer">

     <div class="project-container">

          <div class="number">

               <?php for ($i=1; $i < 5; $i++) { ?>
                    <img class="digits" src="{{ asset('assets/svg/project-timeline/step-' . $i . '.svg') }}" alt="">
                    <img class="points" src="{{ asset('assets/svg/project-timeline/points.svg') }}" alt="">
               <?php } ?>

          </div>

          <div class="texts">

               <h3>Conception et maquettage</h3>
               <p>Nous échangeons ensemble sur vos besoins pour que je puisse déterminer les fonctionnalités à mettre en place. Ensuite, je conçois une maquette visuelle du site qui sera traduite en code une fois vos retours et améliorations faites.</p>

               <h3>Développement du site</h3>
               <p>Je procède au développement du site selon les technologies choisies, en respectant les standards en vigueur. Vous êtes régulièrement tenu informé de l’avancée du travail selon le moyen que vous préférez.</p>

               <h3>Livraison et mise en ligne du projet</h3>
               <p>Votre projet est enfin terminé et prêt à l'emploi! Je vous guide pour l’achat de l’hébergement, du nom de domaine et je m’occupe de la mise en ligne.</p>

               <h3>Support et maintenance</h3>
               <p>Je réalise les mises à jour nécessaires pour le fonctionnement continu et la sécurité de votre nouveau site internet, ainsi que des modifications mineures que vous pourriez suggérer.</p>

          </div>

     </div>

</section>

<img src="{{ asset('assets/svg/wave.svg') }}" class="wave end-wave" alt="vague de transition">

<section class="text-infos services-infos">

     <img src="{{ asset('assets/svg/services-first-line.svg') }}" alt="ligne avec des icones illustrant les textes">
     <div class="text-infos-container">
          <div class="text-content">
               <h4>Conception fonctionnelle</h4>
               <span>Je vous aide à développer vos idées en en soumettant les limites et en abordant des aspects souvent oubliés dans l'imagination d'un site.<br>Je met à contribution mon expérience dans la rédaction de votre cahier des charges si vous le désirez.
               </span>
          </div>
          <div class="text-content">
               <h4>Gestion de projet</h4>
               <span>Nous échangeons aussi souvent que vous le souhaitez sur l'avancée du site.<br>De plus, un lien vous est fourni pour suivre en temps réel la conception de la maquette du site, tout cela pour obtenir un produit de qualité et à votre image.
               </span>
          </div>
          <div class="text-content">
               <h4>Développement web</h4>
               <span>Je code en PHP avec le framework Laravel pour la communication avec le serveur. C’est une technologie qui a fait ses preuves, stable et populaire. A cela, j’ajoute du HTML, SASS, TailwindCSS et Javascript pour la partie visuelle ainsi que du SQL pour gérer la base de donnée.
               </span>
          </div>
     </div>

     <img src="{{ asset('assets/svg/services-second-line.svg') }}" alt="ligne avec des icones illustrant les textes" class="second-services-infos">
     <div class="text-infos-container">
          <div class="text-content">
               <h4>Technologies du moment</h4>
               <span>L’expérience utilisateur étant ma priorité, votre site sera au top de sa performance grâce à mes outils qui en améliore la qualité. Responsive, Flexbox, Grid, WebP, Lazyloading, Web Sockets font partie de mon quotidien.
               </span>
          </div>
          <div class="text-content">
               <h4>Hébergement sécurisé</h4>
               <span>Votre présence en ligne est primordiale et ne doit pas être entachée par un hébergement défaillant qui menaçerait vos données. Je vous propose des solutions professionnelles, sécurisées, avec des sauvegardes automatiques, tout ça au meilleur prix.
               </span>
          </div>
          <div class="text-content">
               <h4>Maintenance du site</h4>
               <span>Le forfait maintenance vous permet d’acquérir une totale tranquillité, grâce à un contrôle mensuel de la sécurité et du fonctionnement du site, ainsi que la possibilité d’effectuer des modifications mineures du design ou autre.</span>
          </div>
     </div>

</section>

@endsection