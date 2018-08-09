@component('mail::message')
# Feedback

There is new query from {{ $name }}
Message: {{ $message }}

@component('mail::button', ['url' => 'http://localhost:8000/contact'])
Submit new Query
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
