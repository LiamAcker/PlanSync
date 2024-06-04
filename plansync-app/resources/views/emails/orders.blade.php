<x-mail::message>
Hello {{$user->name}},

This is your reminder on {{$reminder->title_string}}:

{{$reminder->description_string}}

Have a good day,<br>
{{ config('app.name') }}
</x-mail::message>
