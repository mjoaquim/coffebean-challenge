<?php
// Pega os valores do metodo post
$email = $_POST["email"];
$senha = $_POST["senha"]; // tratar

$sizeSenha = strlen($senha);

// Preferi usar o que o manual do PHP sugere, ele funciona da erro se for maior de 64 caracteres como o programa sugere.
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $vMail=1;
}

//Verificao da senha
if(!preg_match('/[0-9]{2}/', $senha)){
    $vSenha=1;
 }
 if(!preg_match('/[A-Z]{2}/', $senha)){
    $vSenha=1;
 }
 if(!preg_match('/[A-z]{2}/', $senha)){
    $vSenha=1;
 }
 if(!preg_match('/[^a-zA-Z0-9\-\/]{2}/', $senha)){
    $vSenha=1;
 }

if(!isset($vMail)):
    echo 'Retorne e valide o campo e-mail.<br>';
else: 
    echo 'O campo e-mail foi validado com sucesso!<br>';
endif;

if(!isset($vSenha)):
    echo 'O campo senha foi validado com sucesso!<br>';
else: 
    echo 'Retorne e valide o campo senha.<br>';
endif;
?>


