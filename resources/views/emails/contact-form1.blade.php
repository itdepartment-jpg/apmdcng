@component('mail::message')
    # New Contact Form Submission

    Name: {{ $data['name'] }}

    Email: {{ $data['email'] }}

    Phone: {{ $data['phone'] ?? 'Not provided' }}

    Subject: {{ $data['subject'] ?? 'No subject selected' }}

    Message:
    {{ $data['message'] }}

@endcomponent
