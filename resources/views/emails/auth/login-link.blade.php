<x-mail::message>
# Brighton Bar Awards Login Link

Use the link below to log into the {{ config('app.name') }}.

<x-mail::button :url="$url">
    Click to Login
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
