@component('mail::message')
# {{ $content->nom }}

E-mail : {{ $content->email }}
@component('mail::panel')
{{ $content->content }}
@endcomponent

Mercie,<br>
{{ $content->nom }}
@endcomponent

