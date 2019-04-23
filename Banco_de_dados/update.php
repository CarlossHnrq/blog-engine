<?php 
session_start();
include_once 'connection.php';

$id = $_SESSION['id'];

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

$queryupdate = $link->query("update tb_accounts set  email='$email' name='$name', password='$password' where id='$id'");

?>