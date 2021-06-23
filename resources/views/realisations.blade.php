@extends('layouts.app')

@section('title', "Nos réalisations: car l'expérience est gage de qualité")
@section('description', "Mon expérience est une garantie de réussite. Votre site correspondra fidèlement à votre projet grâce à une phase d’échange sur vos envies et vos besoins.")

@section('content')

<section class="landing-page">

     <div class="landing-text">
          <h1>Mon <span class="blue">expérience</span><br>est une <span class="blue">garantie</span><br>de <span class="blue">réussite</span></h1>
          <h2 class="subtitle">Plus de 3 ans de travail et de rigueur</h2>
     </div>

     <div class="landing-img" id="realisations-img">
          <img src="{{ asset('assets/img/realisations-img.png') }}" alt="image de différents outils et objets en rapport avec le développement">
     </div>

     <video src="{{ asset('assets/vid/whitebars.mp4') }}" muted preload="none" loop autoplay></video>

</section>

<section class="realisations" id="realisations-page">

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

     </div>

     <img src="{{ asset('assets/svg/wave.svg') }}" class="wave end-wave" alt="vague de transition">

</section>

@endsection