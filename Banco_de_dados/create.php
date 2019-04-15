<?php
session_start();
include_once 'conexao.php';

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

$querySelect = $link->query("select email from tb_accounts");
$array_emails = [];

while($emails = $querySelect->fetch_assoc()){
	$emails_existentes = $emails['email'];
	array_push($array_emails, $emails_existentes);
}

if(in_array($email,$array_emails)){
	$_SESSION{'msg'} = "<p class=''>".'This email is already in use'."</p>";
	header("location:../sign-up.php")
}