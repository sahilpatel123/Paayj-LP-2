<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $to = "your_email@example.com"; // Replace with your email address
        $subject = "New Waitlist Join Request";
        $email = $_POST['email'];
        $message = "Email: $email";


        $headers = "From: webmaster@example.com"; // Replace with your email
        $headers .= "Reply-To: $email";


        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully!";
            header('Location: index.html');
            exit;
        } else {
            echo "Failed to send email";
        }
    } else {
        echo "Email field is empty";
    }
}
?>