<?php

$from="noreplay@professionalpainters.com";
$email= $_POST['email'];
$subject=$_POST['Your $150 Promo Code!'];
$message=$_POST['Thank you for choosing Professional Painters!'];

mail ($email, $subject, $message, "From:".$from);

alert("Your Message Has Been Sent to " $email);

?>