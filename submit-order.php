<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $pincode = htmlspecialchars($_POST['pincode']);
    $state = htmlspecialchars($_POST['state']);
    $nearby_location = htmlspecialchars($_POST['nearby-location']);
    $watch = htmlspecialchars($_POST['watch']);
    $quantity = htmlspecialchars($_POST['quantity']);

    // Email details
    $to = 'arysance@gmail.com';
    $subject = 'New Order from Arysance';
    $message = "
    <html>
    <head>
        <title>New Order</title>
    </head>
    <body>
        <h2>New Order Details</h2>
        <p><strong>Full Name:</strong> $name</p>
        <p><strong>Email Address:</strong> $email</p>
        <p><strong>Phone Number:</strong> $phone</p>
        <p><strong>Shipping Address:</strong> $address</p>
        <p><strong>Pin Code:</strong> $pincode</p>
        <p><strong>State:</strong> $state</p>
        <p><strong>Nearby Location:</strong> $nearby_location</p>
        <p><strong>Selected Watch:</strong> $watch</p>
        <p><strong>Quantity:</strong> $quantity</p>
    </body>
    </html>
    ";

    // Headers for email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: ' . $email . "\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo '<p>Order successfully placed. Thank you!</p>';
    } else {
        echo '<p>Failed to send the order. Please try again later.</p>';
    }
}
?>
