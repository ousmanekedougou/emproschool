
@component('mail::message')
# {{ $name }}
E-mail : {{ $email }}
@component('mail::panel')
    {{$msg}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
