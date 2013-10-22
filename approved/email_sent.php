
<?php
ini_set("SMTP","localhost");
ini_set("smtp_port",25);
$to = "akanshasatyarthi212@gmail.com";
$subject = "book issue";
$message = "Hello! this is to infrom you that book has been issued 
on your account for following 15 days";
$from = "205112005@nitt.edu";
$headers = "From:" . $from;

mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>
