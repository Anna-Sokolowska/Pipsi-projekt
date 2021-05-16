@component('mail::message')
# Hi from {{ config('app.name') }}!

Thanks for registration.<br>
Add your first movies and enjoy our app.

@component('mail::button', ['url' => url('/') ])
Let's start
@endcomponent

@endcomponent
