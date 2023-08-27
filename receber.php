<?php
if(isset($_POST['email']) && !empty($_POST['email'])) {
    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['message']);

    $to = "domildavaldeth@gmail.com";
    $subject = "Contacto - PalancaTec";
    $body = "Nome: " . $nome . "\n".
           "Email: " . $email . "\n".
           "Mensagem: " . $mensagem;

    $header = "From: joaopaulino399@gmail.com"."\r\n".
             "Reply-to: " . $email . "\r\n".
             "X-Mailer: PHP/" . phpversion();

    if(mail($to, $subject, $body, $header)) {
        echo("Email Enviado com sucesso!");
    } else {
        echo("O Email não pode ser Enviado");
    }
}
?>
