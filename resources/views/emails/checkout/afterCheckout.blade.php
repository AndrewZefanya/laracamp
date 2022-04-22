@component('mail::message')
# Register Camp: {{$checkout->Camp->title}}

Hi {{$checkout->User->name}},
<br>
Thankyou for the registration on <b>{{$checkout->Camp->title}}</b>, Please see the payment instruction by clicking the button below.


@component('mail::button', ['url' => route('dashboard)])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
