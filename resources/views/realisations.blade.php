@extends('layouts.app')

@section('content')

<section class="landing-page">

     <div class="landing-text">
          <h1>Mon <span class="blue">expérience</span><br>est une <span class="blue">garantie</span><br>de <span class="blue">réussite</span></h1>
          <h2 class="subtitle">Plus de 3 ans de travail et de rigueur</h2>
     </div>

     <div class="landing-img" id="realisations-img">
          <img src="{{ asset('assets/img/realisations-img.png') }}" alt="image de différents outils et objets en rapport avec le développement">
     </div>

</section>

<section class="realisations" id="realisations-page">

     <img src="{{ asset('assets/svg/wave.svg') }}" alt="vague de transition" class="wave">
     
     <div class="realisations-container">

          <h4>Mes Réalisations</h4>

          <div class="realisations-previews">
               <?php for ($i=0; $i < 10; $i++) { ?>
                    <div class="site-preview">
                         <div class="site-details">
                              <span class="site-title">Batterie A Dom</span>
                              <span class="site-desc">Site vitrine de dépannage de batteries pour voitures, scooters, camions en IDF.<br>Création complète avec espace d’administration pour la personnalisation du site  et mise en ligne.</span>
                              <a href="#"><i class="fas fa-external-link-alt"></i></a>
                         </div>
                    </div>
               <?php } ?>
          </div>

     </div>

     <img src="{{ asset('assets/svg/wave.svg') }}" class="wave end-wave" alt="vague de transition">

</section>

@endsection