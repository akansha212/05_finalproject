<?php
phpinfo();
?>

<?php

require_once 'google/appengine/api/mail/Message.php';

use google\appengine\api\mail\Message;

// ...

$message_body = "...";

$mail_options = [
    "sender" => "akanshasatyarthi212@gmail.com",
    "to" => "205112005@nitt.edu",
    "subject" => "Your example.com account has been activated.",
    "textBody" => $message_body
];

try {
    $message = new Message($mail_options);
    $message->send();
} catch (InvalidArgumentException $e) {
    // ...
}
?>