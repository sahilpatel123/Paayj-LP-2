<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    } else {

        $to = "your_email@example.com"; // Replace with your email address
        $subject = "New Early Access Request";
        $message = "Email: $email";
        $headers = "From: webmaster@example.com"; // Replace with your email

        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully!";
            header('Location: index.html');
        } else {
            echo "Failed to send email";
        }
    }
}
?>