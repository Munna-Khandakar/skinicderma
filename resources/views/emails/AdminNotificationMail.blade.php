@component('mail::message')
# Concern Admin

You have got a new appointment.

@component('mail::button', ['url' => 'http://localhost:8000/appointments'])
Open
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
