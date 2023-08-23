<?php

// Verificar se houve uma acção da pagina entrar.php //

if(isset($_POST['submit'])  && !empty($_POST['email'])   && !empty($_POST['senha']))
{
    //não esta vazio
    //Conectar o banco de dados

    include_once('conectar.php');
}
else{
//O campo esta vazio

header('Location: entrar.php');

}

?>