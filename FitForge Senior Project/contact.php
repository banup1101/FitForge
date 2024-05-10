<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set up the recipient email address
    $to = "sherazsiddiqi40@outlook.com";
    $subject = "New message from $name";
    $body = "From: $name\nEmail: $email\n\nMessage:\n$message";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Message delivery failed.";
    }
} else {
    // If this page is accessed directly, redirect to the contact form
    header("Location: home.html");
    exit();
}
?>