<?php

require './CRUDlogin.php'
session_start();

$email = filter_input(input_post, 'loginEmail', FILTER_SANITIZE_STRING);
$senha = filter_input(input_post, 'loginPassword', FILTER_SANITIZE_CHARS);

if($_SESSION['login'] = enterlogin($email, $senha)){
    $_SESSION['msg'] = 'Bem Vindo a pizzaria';
    header('Location: index.php');
}else{
    unset($_SESSION['login']);
    session_unset();
    $_SESSION['msg'] = 'Falha ao efetuar o login';
    header('Location: index.php');
}

?>