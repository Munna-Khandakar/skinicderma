@component('mail::message')
# Appointment Received
{{$name}}
Thanks for booking.
We will contact you shortly to schedule.<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
