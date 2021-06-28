@extends('layouts.app')

@section('title', "Développement Web: Création de sites internet sur mesure")
@section('description', "Guillaume Sutty, développeur web freelance depuis 3 ans basé à Belfort. Je réalise des sites de tous types: vitrine, e-commerce, blog, site personnel.")

@section('content')

<section class="landing-page">

     <div class="landing-text">
          <h1>Freelance en<br><span class="blue">développement web</span><br>& <span class="blue">web design</span></h1>
          <h2 class="subtitle">Construis ton site, bâtis ton avenir</h2>
          <a href="{{ route('services') }}" class="btn">Découvrir nos services</a>
     </div>

     <div class="landing-img">
          <img src="{{ asset('assets/img/home-img.png') }}" alt="image d'un développeur en train de coder">
     </div>

     <img class="landing-wave" src="{{ asset('assets/svg/landing-wave.svg') }}" alt="vague de design en fond">

</section>

<section class="dev-banner">

     <h2>Création de site internet, site vitrine, site e-commerce sur-mesure</h2>
     <h3>Développeur Web Freelance à Belfort</h3>  

</section>

<section class="text-infos accueil-infos">

     <img src="{{ asset('assets/svg/story-line.svg') }}" alt="ligne avec des icones illustrant les textes">
     <div class="text-infos-container">
          <div class="text-content">
               <h4>Qui suis-je ?</h4>
               <span>Guillaume Sutty, freelance en développement web depuis 3 ans à Belfort.<br>Passionné d’informatique, je me suis formé pendant plus d’un an aux langages du web. J’ai ensuite développé mes compétences au cours des différentes missions qui m’ont été données de réaliser.</span>
          </div>
          <div class="text-content">
               <h4>Ce que je réalise ?</h4>
               <span>Création de sites web de tous types: sites vitrine, e-commerce, blog, site personnel, ...<br><br>Mes créations sont réalisées sur-mesure, et correspondent fidèlement à votre projet grâce à une phase d’échange sur vos envies et vos besoins.</span>
          </div>
          <div class="text-content">
               <h4>Pourquoi moi ?</h4>
               <span>Je vous garantie un site personnalisé, parfaitement sécurisé, adapté à tous les navigateurs et supports (téléphone, tablette, pc).<br>De plus, vous saurez être satisfait du design grâce à la conception d’une maquette visuelle avant développement.<br>N’hésitez plus à me contacter pour échanger sur votre projet.</span>
          </div>
     </div>

</section>

<section class="realisations">

     <img src="{{ asset('assets/svg/wave.svg') }}" alt="vague de transition" class="wave">
     
     <div class="realisations-container">

          <h4>Mes Réalisations</h4>

          <div class="realisations-previews">
               <div class="site-preview" style="background-image: url({{ asset('assets/img/batterie-a-dom.png') }})"">
                    <div class="site-details">
                         <span class="site-title">Batterie@Dom</span>
                         <span class="site-desc">Site vitrine de dépannage de batteries pour véhicules.<br>Création complète avec espace d’administration pour la personnalisation du site  et mise en ligne.</span>
                         <a href="https://batterie-a-dom.fr/" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                    </div>
               </div>
               <div class="site-preview" style="background-image: url({{ asset('assets/img/9i6esport.png') }})">
                    <div class="site-details">
                         <span class="site-title">9i6esport</span>
                         <span class="site-desc">Site vitrine d'une équipe esport avec ajout dynamique des sponsors, jeux, joueurs par une interface administration.</span>
                         <a href="https://9i6esport.fr/" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                    </div>
               </div>
               <div class="site-preview" style="background-image: url({{ asset('assets/img/desiweb.png') }})">
                    <div class="site-details">
                         <span class="site-title">DesiWeb</span>
                         <span class="site-desc">Site de présentation de l'activité de développement web avec portfolio de DesiWeb.</span>
                         <a href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
               </div>
          </div>

          <a href="{{ route('realisations') }}" class="btn">Voir tous les projets</a>

     </div>

     <img src="{{ asset('assets/svg/wave.svg') }}" class="end-wave wave" alt="vague de transition">

</section>

@endsection