<?php

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception; 

require 'vendor/autoload.php'; //carrega automaticamente os pacotes de terceiro

//var_dump($_POST); verificar se os dados estão chegando até aqui

$dados = [
    'nome' => $_POST['nome'] ,
    'cidade' => $_POST ['cidade'] ,
    'mensagem' => $_POST['mensagem'],
];

$mail = new PHPMailer(true); //criando um objeto PHPMailer, o true serve para habilitar as exceptions

try{
    $mail ->isSMTP(); //para usar o smtp para usar o e-mail
    $mail -> Host = ''; 
    $mail -> SMTPAuth = true; //Para enviar o email autenticado para não ir para SPAM
    $mail -> Username = ''; //Nome do usuário do Email
    $mail -> Password = ''; //Senha do usuario do email
    $mail -> SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //Encryption é uma constante do PHPMailer
    $mail -> Port = 587;
    $mail -> CharSet = 'UTF-8'; //Para os acentos funcionarem direitinho

    $mail -> setFrom("exemplo@exemplo.com" , 'Teste'); //Conta que vai enviar o email
    $mail -> addAdress('exemplo@exemplo' , 'exemplo'); // conta que vai receber o e-mail
    $mail -> isHTML(true); //para o email ser no padrão html
    $mail -> Subject = 'Assunto Teste'; //Assunto do email
    $corpo = "Nome: {$dados['nome']}"; //texto do email 
    $corpo .= "Cidade: {$dados['cidade']}"; //texto do email
    $corpo .= "Mensagem: {$dados['mensagem']}"; //texto do email

    $mail ->Body = $corpo; //indicando que o corpo do email vai ser a variável corpo

    $mail -> send(); //função para enviar o email de fato

    echo "Mensagem Enviada Com Sucesso!"; //mensagem para indicar que a mensagem foi enviada
catch(\Exception $e){ 
        echo $e getMessage(); 
    };
};