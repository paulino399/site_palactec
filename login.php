<?php

session_start(); //iniciar uma sessão

// Verificar se houve uma acção da pagina entrar.php //

if(isset($_POST['submit'])  && !empty($_POST['email'])   && !empty($_POST['senha']))
{
    //não esta vazio os campos 
    //Conectar o banco de dados

    include_once('conectar.php');

//Local de armazenamento
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //Verificar a tabela do  banco de dados

    $sql ="SELECT * FROM  cadastro_cliente WHERE email_cliente = '$email' and senha_cliente = '$senha'";

    $verificar = $conexao -> query($sql);

    // Verificar se o registro é valido 

    if(mysqli_num_rows($verificar)< 1)
    {
        //Destruir dados incompletos
        unset($_SESSION['email_cliente']);
        unset($_SESSION['senha_cliente'])
        header('Location:entrar.php');
    }
    else{

        //Criar as varias caso não falte dados
        $_SESSION['email_cliente'] = $email;
        $_SESSION['senha_cliente'] = $senha;
        header('Location:usuario.php');
    }
}
else{
//Os campos estão vazio

header('Location: entrar.php');

}

?>