<?php
    //Getting the fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //Email data
    $to = "doctordraxter@gmail.com";
    $subject = "Contact from Github";

    $letter = "From: $name \n";
    $letter .= "Email: $email \n";
    $letter .= "Message: $message \n";

    //Sending email
    mail($to, $subject, $letter);
    header('Location: sended.html');
?>