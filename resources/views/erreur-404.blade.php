@extends('layouts.app')

@section('title', "Page non trouvée - Erreur 404")
@section('description', "")

@section('noindex') 
     <meta name="robots" content="noindex">
     <meta name="googlebot" content="noindex">
@endsection

@section('content')

<div class="container404">
     <span>404</span>
     <p>Oups<br>Vous vous êtes perdus!</p>
     <a href="{{ route('welcome') }}">REVENIR EN LIEUX SÛRS</a>
</div>

@endsection