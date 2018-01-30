@component('mail::message')
# Introduction

Zdravo Nice
Potvrdi registraciju

<a class="btn btn-success" href="http://localhost:8000/verify/{{$user->verification_token}}">ovde</a>	
Hvala vam ,<br>
potvrdi

<h3>{{$user->verification_token}}</h1>

{{ config('app.name') }}
@endcomponent
