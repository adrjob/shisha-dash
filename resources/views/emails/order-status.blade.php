<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order: {{ $order->order_id }} - Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #ffffff;
            max-width: 600px;
            margin: 30px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: rgb(255, 153, 61);
            font-size: 26px;
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            display: block;
            margin: 0 auto 20px;
            width: 120px; /* Adjust logo size as needed */
        }
        .details {
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            border-left: 5px solid rgb(255, 153, 61);
        }
        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #666666;
            text-align: center;
        }
        a {
            color: rgb(255, 153, 61); /* Link color */
            text-decoration: none;
        }
        .thank-you {
            font-size: 16px;
            color: #333333;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://shishacoin.io/wp-content/uploads/2024/08/logo-shishacoin-200x200px.png" alt="ShishaCoin Logo" class="logo">
        <h1>Hello, {{ $order->customer_name }}!</h1>
        <div class="thank-you">
            <p>Thank you for shopping with us! We appreciate your trust in our company.</p>
        </div>

        @if($isDeliverd)
            <p>We are pleased to inform you that your order has been successfully delivered!</p>
        @else
            <p>We are excited to let you know that your product(s) have been shipped and are on their way!</p>
        @endif        

        <div class="details">
            <h3>Order Details:</h3>
            <p><strong>Order ID:</strong> {{ $order->order_id }}</p>
            <p><strong>Total Amount:</strong> ${{ $order->total }}</p>
            <p><strong>Shipping Address:</strong> {{ $order->billing_address_1 }}, {{ $order->billing_city }}, {{ $order->billing_state }} - {{ $order->billing_postcode }}</p>
        </div>

        @if($isDeliverd)
            <p>We look forward to seeing you again soon!</p>
        @else
            <p>You will receive another email with tracking information once your order has been delivered.</p>
        @endif    

        <div class="footer">
            <p>If you have any questions, feel free to <a href="mailto:info@shishacoin.io">contact us</a>.</p>
            <p>Best regards,<br>The ShishaCoin Team</p>
        </div>
    </div>
</body>
</html>
