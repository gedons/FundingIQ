<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
            margin: 0 0 20px;
        }
        ul {
            padding-left: 20px;
            margin: 0 0 20px;
        }
        li {
            margin-bottom: 10px;
            font-size: 16px;
        }
        .footer {
            font-size: 14px;
            color: #888;
            text-align: center;
            margin-top: 20px;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
    </style>
</head>
<body>
    <div class="container">
        <h2>Funding Request</h2>
        <p>Hello {{ Auth::user()->name }},</p>
        <p>You have requested to fund your account with the following details:</p>
        <ul>
            <li>Amount: ${{ $transaction->amount }}</li>
            <li>Method: {{ strtoupper($transaction->method) }}</li>
            <li>Status: {{ ucfirst($transaction->status) }}</li>
            <li>Charge: ${{ $transaction->charge }}</li>
        </ul>
        <p>Kindly complete your payment.</p>
        <div class="footer">
            <p>If you have any questions, please contact our support team.</p>
        </div>
    </div>
</body>
</html>

