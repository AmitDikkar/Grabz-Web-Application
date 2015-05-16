<?php
header('Access-Control-Allow-Origin: *');

$input = json_decode(file_get_contents('php://input'), true);
$shopperEmail = $input["shopperEmail"];

$to      = $shopperEmail;
$subject = 'SignUp Request from Shopkeeper';
$message = 'Hey, I want to sign up';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To:'. $shopperEmail . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
$message = "successfully sent a message.";
$response_data = array("message"=>$message);
header('Content-Type: application/json');
echo json_encode($response_data);
?> 

