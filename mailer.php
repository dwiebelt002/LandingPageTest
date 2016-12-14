<?php

sessions_start();

require_once 'libs/PHPMailerAutoload.php';

$errors = [];

print_r($_POST);

if(isset($_POST['name'])) {

}