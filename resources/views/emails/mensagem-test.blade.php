@component('mail::message')
# Introduction

Fala boquinha

@component('mail::button', ['url' => ''])
Se você leu isso aqui você é boiola
@endcomponent

Um grande abraço,<br>
{{ config('app.name') }}
@endcomponent
