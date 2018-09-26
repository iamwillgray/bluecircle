<?php

$otheremail = $_POST['email']; //<-----This will be the enquirers' email
$name = $_POST['fullname'];
$message = $_POST['message'];

//set this to your email
$to = "bluecirclediabetes@gmail.com";

$email_subject = "Contact form submission: $name";

$email_body = "You have received a new message. " .
        " Here are the details:\n Name: $name \n " .
        "Email: $otheremail\n" .
        "\n Message: \n $message \n ";

$headers = "From: $otheremail\n";

$headers .= "Reply-To: $email_address";

mail($to, $email_subject, $email_body, $headers);

//redirect to the 'thank you' page

header('Location: php/thank-you.html');
?>
