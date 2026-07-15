<!DOCTYPE html>
<html>

<head>
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .field {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
            color: #333;
        }

        .value {
            padding: 5px;
            background: #f5f5f5;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>New Contact Form Submission</h2>

        <div class="field">
            <div class="label">Name:</div>
            <div class="value">{{ $data['first_name'] }} {{ $data['last_name'] }}</div>
        </div>

        <div class="field">
            <div class="label">Email:</div>
            <div class="value">{{ $data['email'] }}</div>
        </div>

        <div class="field">
            <div class="label">Phone:</div>
            <div class="value">{{ $data['phone'] ?? 'Not provided' }}</div>
        </div>

        <div class="field">
            <div class="label">Subject:</div>
            <div class="value">{{ ucfirst($data['subject']) }}</div>
        </div>

        <div class="field">
            <div class="label">Message:</div>
            <div class="value" style="white-space: pre-wrap;">{{ $data['message'] }}</div>
        </div>

        <p style="margin-top: 30px; color: #666; font-size: 12px;">
            This email was sent from the contact form on {{ config('app.name') }}
        </p>
    </div>
</body>

</html>
