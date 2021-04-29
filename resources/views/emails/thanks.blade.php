@component('mail::message')
# Thanks for visiting Skinic Dermatology Center

We highly appriciate your concern to choose Skinic Dermatology Center for you.
If you need further appointment you can 

@component('mail::button', ['url' => 'http://localhost:8000'])
Appointment Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
