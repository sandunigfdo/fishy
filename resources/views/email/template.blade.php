<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microsoft Account Security Alert</title>
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
                {{ __('Microsoft Account Security Alert') }}
            </div>

            <div class="card-body">
                <p>Dear Amie,</p>

                <p>We have detected unusual activity on your Microsoft account and need your immediate attention to secure your account.</p>

                <p><b>Summary of Unusual Activity:</b></p>
                <ul>
                    <li>Date: Sep 03</li>
                    <li>Location: America</li>
                    <li>Device: Laptop</li>
                </ul>

                <p>As a security measure, we have temporarily limited access to your account. To regain full access and ensure the safety of your personal information, please verify your account details by following the link below:</p>

                <p><a href="#">Verify Your Account</a></p>

                <p>Please complete the verification process within the next 24 hours to avoid permanent suspension of your account.</p>

                <p><strong>What to do next:</strong></p>
                <ol>
                    <li>Click on the "Verify Your Account" button above.</li>
                    <li>Sign in with your Microsoft account credentials.</li>
                    <li>Follow the on-screen instructions to confirm your identity.</li>
                </ol>

                <p>For your protection, do not share this email or the verification link with anyone. Microsoft will never ask for your password in an email.</p>

                <p>If you did not attempt to log in from the above-mentioned location, please ignore this email or contact Microsoft Support immediately.</p>

                <p>Thank you for your prompt attention to this matter.</p>

                <p>Sincerely,</p>
                <p>Microsoft Security Team</p>

                <p><strong>Disclaimer:</strong></p>
                <p>This email is an automated notification. Please do not reply to this email.</p>
                <p>&copy; 2024 Microsoft Corporation. All rights reserved. Microsoft, Windows, and other product names are or may be registered trademarks of Microsoft Corporation.</p>
            </div>
        </div>
    </div>
</body>
</html>
