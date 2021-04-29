@component('mail::message')
# Welcome to Skinic

The admin of this organization invited you to create your account here.

@component('mail::button', [ 'url' => route('acceptInvitation', $invite->token) ])
Create Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
