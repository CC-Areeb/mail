@component('mail::message')
# Welcome users

Lorem ipsum dolor sit, amet consectetur adipisicing elit.
Saepe earum suscipit dolorem? Assumenda nesciunt iure provident placeat saepe enim repellendus.

@component('mail::button', ['url' => 'https://mail.google.com'])
Send email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
