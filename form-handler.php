<?php
$name = htmlspecialchars($_POST['name']); // Sanitizing input to prevent XSS
$visitor_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitize email
$subject = htmlspecialchars($_POST['subject']); // Sanitizing input to prevent XSS
$message = htmlspecialchars($_POST['message']); // Sanitizing input to prevent XSS

$email_from = 'info@edufordlearning.rf.gd'; // Your domain-based email

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";

$to = 'barathtech30@gmail.com'; // Your email to receive the form submissions

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

// Send the email
mail($to, $email_subject, $email_body, $headers);

// Redirect to contact.html after sending email
header("Location: contact.html");
?>
