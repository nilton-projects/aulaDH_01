<?php

// echo '<pre>';
// var_dump($_POST);

$email = $_POST['email'];
$senha = $_POST['senha'];

session_start();

if ($email === 'admin@admin' && $senha === '123456') {
    $_SESSION['logado'] = true;
    header('Location: home.php');
} else {
    $_SESSION['erro'] = 'Usuário ou senha inválidas';
    header('Location: index.php');
}