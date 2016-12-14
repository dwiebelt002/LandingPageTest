<?php include_once('index.html');

$from='devinwiebelt@gmail.com';
// $to = 'devinwiebelt@gmail.com';
// $to = $_POST['email'];

$subject = 'Your $150 Promo is Here!';

$name = $_POST['name'];
$email= $_POST['email'];
$phone = $_POST['phone'];

$to = $email;

$message = 'Thank you for choosing Professional Painters! You are our number 1 customer!';

$header = $email;

if ($_POST){
mail($to, $subject, $email, $message, "From:".$from);
echo "<script type='text/javascript'>alert('Your email has been sent! Thank you!);</script";
}

?>