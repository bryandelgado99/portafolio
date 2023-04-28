<?php
    $name = $_POST['name'];
    $country = $_POST['country'];
    $visitor_email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $email_from = $visitor_email;
    
    $email_subject = "Contact To My Services;

    $email_body = "User Name: $name.\n" .
                    "User Email: $visitor_email.\n" .
                    "Country: $country.\n".
                    "Phone: $phone.\n".
                    "User Message: $message.";
    
    $to = "bryand9970@gmail.com";

    $headers = "From: $email_from\r\n".
                "Reply-To: $email_from\r\n"..
                "Subject: $email_subject\r\n".
                "From: $email_from\r\n".
                "To: $to\r\n";
    
    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact.html");

?>