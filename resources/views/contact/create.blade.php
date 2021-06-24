@extends('layouts.app')

@section('title', "Un projet ? Une idée ? Une question ? Contactez-Nous !")
@section('description', "Contactez-moi pour que l'on discute de votre projet ! Devis gratuits sous 48h.  Je suis disponible à distance dans toute la France, avec RDV de suivi réguliers.")

@section('content')

@if (session()->has('message'))
<div class="alert-success" role="alert">
    {{ session()->get('message') }}
</div>
@endif

<div class="contact-container">

    <div class="form-main">

        <div class="form-container">

            <div class="title">

                <h1>Un <span class="blue">projet</span> à réaliser ?<br>Une <span class="blue">idée</span> ?</h1>
                <h2 class="subtitle">Contactez-moi !</h2>
    
            </div>
    
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
    
                <div class="input-flex-wrapper">
                    <div class="form-group">
                        <input type="text" class="form-control @error('first-name') is-invalid @enderror" name="first-name" value="{{ old('first-name') }}" required>
                        <span>Prénom *</span>
                        @error('first-name')
                        <div class="invalid-feedback">
                            {{ $errors->first('first-name') }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                        <span>Nom *</span>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                        @enderror
                    </div>
                </div>
    
                <div class="input-flex-wrapper">
                    <div class="form-group">
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required>
                        <span>Email *</span>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required>
                        <span>Téléphone *</span>
                        @error('tel')
                        <div class="invalid-feedback">
                            {{ $errors->first('tel') }}
                        </div>
                        @enderror
                    </div>
                </div>
            
                <div class="form-group">
                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required>
                <span>Sujet *</span>
                @error('subject')
                <div class="invalid-feedback">
                    {{ $errors->first('subject') }}
                </div>
                @enderror
                </div>
                <div class="form-group">
                    <textarea name="message" cols="30" rows="10" class="form-control @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                    <span>Message *</span>
                    @error('message')
                    <div class="invalid-feedback">
                        {{ $errors->first('message') }}
                    </div>
                    @enderror
                </div>
    
                <button type="submit" class="btn">Envoyer</button>
    
            </form>

        </div>

    </div>

    <div class="contact-side-infos">

        <div class="infos-wrapper">

            <div class="icons">
                <img src="{{ asset('assets/svg/map-marker-alt-solid.svg') }}" alt="Icône de Position">
                <img src="{{ asset('assets/svg/phone-solid.svg') }}" alt="Icône de Téléphone">
                <img src="{{ asset('assets/svg/envelope-solid.svg') }}" alt="Icône de Mail">
                <img src="{{ asset('assets/svg/twitter-brands.svg') }}" alt="Icône de Twitter">
            </div>
    
            <div class="texts">
                <span class="belfort">Région de Belfort (90)<br><span class="reminder"><img src="{{ asset("assets/svg/circle-solid.svg") }}" alt="Icône rond vert de disponibilité">Disponible à distance dans toute la France</span></span>
                <a href="tel:0781074110">07 81 07 41 10</a>
                <a href="mailto:contact@desiweb.fr">contact@desiweb.fr</a>
                <a href="https://twitter.com/DesiWeb2">@DesiWeb2</a>
            </div>

        </div>

        <img class="map-location" src="{{ asset('assets/img/contact-map.png') }}" alt="Ma Location en France (Belfort)">
        
    </div>

</div>


@endsection