<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'site_palancatec';



$conexao = new MYSQLI($host, $usuario, $senha, $banco);


if($conexao -> connect_errno){

    echo = "erro de conexão com o banco de dados";

}

else{
    echo = "Conexão efectuada com sucesso!";
}
?>