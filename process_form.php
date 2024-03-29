<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email configuration
    $to = "Nitesh13875@gmail.com"; // Replace with your email address
    $subject = "New message from your website";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Set additional headers
    $headers = "From: $name <$email>";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message! We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    echo "Form submission method not allowed.";
}
?>
