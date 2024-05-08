<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Email recipient
    $to = "prasannatiwari2012@gmail.com"; 
    
    // Email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";
    
    // Email subject
    $email_subject = "Contact Form Submission: $subject";
    
    // Email content
    $email_body = "<p><strong>Name:</strong> $name</p>";
    $email_body .= "<p><strong>Email:</strong> $email</p>";
    $email_body .= "<p><strong>Subject:</strong> $subject</p>";
    $email_body .= "<p><strong>Message:</strong><br>$message</p>";
    
    // Send email
    mail($to, $email_subject, $email_body, $headers);
    
    // Redirect back to the contact page after submission
    header('Location: contactme.html');
    exit;
}
?>