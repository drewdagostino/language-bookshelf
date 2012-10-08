<?php

$name = $_GET['name'];
$email = $_GET['email'];
$feedback = $_GET['feedback'];

$to = 'drewdagostino@gmail.com';

$subject = 'Language Bookshelf Feedback from '.$name;

$from_add = 'noreply@languagebookshelf.com';

$headers = "From: $from_add\r\n";
$headers .= "Reply-To: $from_add\r\n";
$headers .= "Return-Path: $from_add\r\n";
$headers .= "X-Mailer: PHP \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= 'Content-Type: text/html; charset="us-ascii"';

$message = '<html><body>';
$message .= '<h4>Name: '.$name.'</h4>';
$message .= '<h4>Email: '.$email.'</h4>';
$message .= '<p>Feedback: '.$feedback.'</p>';

mail($to, $subject, $message, $headers);

?>