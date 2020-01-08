@component('mail::message')
#Welcome to  {{config('app.name')}}

We are so exited to work with you
Click the button to continue to the application.

@component('mail::button', ['url' => route('users')])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
