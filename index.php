<?php include_once('index.html');

//recipient
$to = 'devinwiebelt@gmail.com';
$to = $_POST['email'];

$subject = 'Your $150 Promo is Here!';

$name = $_POST['name'];
$email= 'noreply@professionalpainters.com';
$phone = $_POST['phone'];

$message = 'Thank you for choosing Professional Painters! You are our number 1 customer!';

$header = $email;

if ($_POST){
mail($to, $subject, $email, $message)
};

?>