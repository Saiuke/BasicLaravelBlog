@component('mail::message')
# Introduction

Markdown mailables use a combination of Blade components and Markdown syntax which allow you to easily construct mail messages while leveraging Laravel's pre-crafted components:

- One
- Two
- Three

@component('mail::button', ['url' => 'http://google.com'])
GOING CRAZY
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
