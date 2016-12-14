<?php
session_start();
require_once 'libs/PHPMailerAutoload.php';

$errors =[];

if(isset($_POST['name'],$_POST['email'],$_POST['message'])){
    $fields=[
        'name'=>$_POST['name'],
        'email'=>$_POST['email'],
        'message'=>$_POST['message']
    ];
    foreach($fields as $field=>$data){
        if(empty($data)){
            $errors[]='The '.$field . ' field is required.';
        }
    }
    if(empty($errors)){
        $m=new PHPMailer;
        $m->isSMTP();
        $m->SMTPAuth=true;
        $m->Host='smtp.gmail.com';
        $m->Username='devinwiebelt@gmail.com';//replace by your email address
        $m->Password='SephiRoth@1988';//replace with your password
        $m->SMTPSecure='ssl';
        $m->Port=465;

        $m->isHTML();
        $m->Subject ='Your $150 Promo email';
        $m->Body='From:'.$fields['name'].'('.$fields['email'].')<p>"Thank you for using Professional Painters. You are our number one customer!"</p>';

        $m->FromName='Contact';
        $m->AddAddress('someone@gmail.com','Some one');
        if ($m->send()) {
            header('Location:thanks.php');
            die();
        }else{
            $errors[]="Sorry! Could not send email. Try again later.";
        }
    }
}else{
    $errors[]= 'Something went wrong';
}
$_SESSION['errors']=$errors;
$_SESSION['fields']=$fields;
header ('Location:index.php');