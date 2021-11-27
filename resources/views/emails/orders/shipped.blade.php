@component('mail::message')
# Welcome

Hi, {{ $user->name }}
Welcome to Tutorial Mailtrap, your account has been created successfully.

@component('mail::button', ['url' => 'http://127.0.0.1:8000'])
Back
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
