@extends('layouts.app')

@section('content')

<section class="landing-page">

     <div class="landing-text">
          <h1>Freelance en<br><span class="blue">développement web</span><br>& <span class="blue">web design</span></h1>
          <h2 class="subtitle">Création de sites internet</h2>
          <a href="{{ route('services') }}" class="btn">Découvrir nos services</a>
     </div>

     <div class="landing-img">
          <img src="{{ asset('assets/img/home-img.png') }}" alt="image d'un développeur en train de coder">
     </div>

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
               <span>Guillaume Sutty,  freelance en développement web depuis 3 ans à belfort.<br><br>Je réalise vos projets de sites vitrine, e-commerce, blog, ...</span>
          </div>
          <div class="text-content">
               <h4>Ce que je réalise ?</h4>
               <span>Création de sites web de tout type: sites vitrine, e-commerce, blog, site personnel, ...<br><br>Mes créations sont réalisées sur-mesure, et correspondent à 100% avec votre projet grâce à une phase d’échange sur vos envies.</span>
          </div>
          <div class="text-content">
               <h4>Pourquoi moi ?</h4>
               <span>Passioné d’informatique, je vous garantie un site sur-mesure parfaitement sécurisé, adapté à tout les navigateurs et supports (téléphone, tablette, pc).<br><br>N’hésitez plus à me contacter pour échanger sur votre projet.</span>
          </div>
     </div>

</section>

<section class="realisations">

     <img src="{{ asset('assets/svg/wave.svg') }}" alt="vague de transition" class="wave">
     
     <div class="realisations-container">

          <h4>Mes Réalisations</h4>

          <div class="realisations-previews">
               <?php for ($i=0; $i < 5; $i++) { ?>
                    <div class="site-preview">
                         <div class="site-details">
                              <span class="site-title">Batterie A Dom</span>
                              <span class="site-desc">Site vitrine de dépannage de batteries pour voitures, scooters, camions en IDF.<br>Création complète avec espace d’administration pour la personnalisation du site  et mise en ligne.</span>
                         </div>
                    </div>
               <?php } ?>
          </div>

          <a href="{{ route('realisations') }}" class="btn">Voir tous les projets</a>

     </div>

     <img src="{{ asset('assets/svg/wave.svg') }}" class="end-wave wave" alt="vague de transition">

</section>

@endsection