@component('mail::message')
    # {{$contact['subject']}}

    {{$contact['message']}}

    Thanks,
    {{$contact['name']}}
    {{$contact['phone']}}

@endcomponent
