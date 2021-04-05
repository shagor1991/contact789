@component('mail::message')
# Introduction

You have a query from: {{ $data->name}}

# Name
{{ $data->name }}
# Email 
{{ $data->email }}
# Address 
{{ $data->address }}

# Message 
{{ $data->message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
