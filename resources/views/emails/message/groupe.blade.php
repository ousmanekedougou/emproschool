
@component('mail::message')
# {{ $name }}
E-mail : {{ $subject }}
@component('mail::panel')
    {{$msg}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
