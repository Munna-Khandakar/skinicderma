@component('mail::message')
# Appointment Scheduled

Hi, {{ $patient['name']}}
Your appointment has been scheduled to 
@component('mail::panel')
date: {{ $patient['date'] }} 
<br>
time: {{ $patient['time'] }}
@endcomponent

Address: H# 733, R# 11, A# 04, Mirpur DOHS,Dhaka<br>
Please come 30 mins earlier. <br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
