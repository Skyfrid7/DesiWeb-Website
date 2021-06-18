@component('mail::message')
# Bonjour

Vous avez reçu un mail de la part de {{ $data['first-name'] . $data['name'] }}
<b>Email:</b> {{ $data['email'] }}
<b>Téléphone:</b> {{ $data['tel'] }}

<b>Sujet:</b> {{ $data['subject'] }}
<b>Message:</b> {{ $data['message'] }}

Merci,<br>
DesiWeb
@endcomponent