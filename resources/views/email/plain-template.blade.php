<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Login</title>
    <style>
        /* Add some basic styles for better formatting */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #0078d4;
            color: #fff;
            padding: 10px;
            font-size: 18px;
            border-radius: 4px 4px 0 0;
        }
        .card-body {
            padding: 20px;
        }
        .card-body a {
            color: #0078d4;
            text-decoration: none;
        }
        .card-body a:hover {
            text-decoration: underline;
        }
        ul, ol {
            margin: 0 0 20px 20px;
        }
        p {
            margin: 0 0 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                {{ __('Account Alert') }}
            </div>

            <div class="card-body">
                <p>Dear {{ $name }},</p>

                <p><a href="{{ $emailUrl }}">Access your account from here.</a></p>


                <p><strong>Disclaimer:</strong></p>
                <p>This email is an automated notification. Please do not reply to this email.</p>
            </div>
        </div>
    </div>
</body>
</html>
