<?php

// Verificar se houve uma acção da pagina entrar.php //

if(isset($_POST['submit'])  && !empty($_POST['email'])   && !empty($_POST['senha']))
{
    //não esta vazio
    //Conectar o banco de dados

    include_once('conectar.php');

//Local de armazenamento
    $email = $_POST['email'];
    $email = $_POST['senha'];

    //Verificar a tabela do  banco de dados

    $sql ="SELECT * FROM  cadastro_cliente WHERE email_cliete = '$email' and senha_cliente = '$senha'";

    $verificar = $conexao -> query($sql);

    // Verificar se o registro é valido 

    if(mysql_num_rows ($verificar)<1)
    {
        
    }
}
else{
//O campo esta vazio

header('Location: entrar.php');

}

?>