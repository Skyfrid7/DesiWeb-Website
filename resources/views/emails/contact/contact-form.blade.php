@component('mail::message')
# Bonjour

Vous avez reçu un mail de la part de {{ $data['first-name'] . ' ' . $data['name'] }}<br>
<b>Email:</b> {{ $data['email'] }}<br>
<b>Téléphone:</b> {{ $data['tel'] }}

<b>Sujet:</b> {{ $data['subject'] }}<br>
<b>Message:</b> {{ $data['message'] }}

Merci,<br>
DesiWeb
@endcomponent