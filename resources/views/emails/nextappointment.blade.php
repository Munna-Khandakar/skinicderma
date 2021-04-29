@component('mail::message')
# Appointment Rescheduled

Hi, {{ $patient['name']}}
Your appointment has been rescheduled to 
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
