<?php
require_once '.;\xampp\php\PEAR swift/lib/swift_required.php';

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('akanshasatyarthi212@gmail.com')
  ->setPassword('vasundhra');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Test Subject')
  ->setFrom(array('akanshasatyarthi212@gmail.com' => 'ABC'))
  ->setTo(array('205112005@nitt.edu'))
  ->setBody('This is a test mail.');

$result = $mailer->send($message);
?>