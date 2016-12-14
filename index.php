<?php include_once("index.html");

$name = $_POST['name'];
$email = $_POST['email'];

mail($email, $name, "Thank you");

?>