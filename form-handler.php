<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'MAILSTRONY@DOMENASTRONY.com';

$email_subject = 'Z formularza kontaktowego';

$email_body = "Użytkownik: $name.\n ".
                "E-mail: $visitor_email.\n ".
                    "Temat: $subject.\n ".
                        "E-mail: $message.\n ";

$to = 'iownamustang@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: kontakt.html");
>?