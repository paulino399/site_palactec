<!-- Configurações do PHP-->

<?php

// iniciar uma sessão 

session_start();

if((!isset($_SESSION['email_cliente'])==true )
and (!isset($_SESSION['senha_cliente'])==true))
{
    //destruir as variaveis
    unset($_SESSION['email_cliente']);
    unset($_SESSION['senha_cliente']);
    header('Location:entrar.php');
}

else{
    //criar uma varivel de acesso
    $logado = $_SESSION['email_cliente'];
}



?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PalancaTech</title>
   <link rel="stylesheet" href="./css/usuario.css">
 <!-- <link rel="shortcut icon" href="img/palanca1.png" type="image/x-icon"> --> 
</head>
<body>
    <header>
    <div class="logo">
    <img src="img/palanca2.png" alt="logotipo PalancaTech">
</div>

<nav>
     <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="celular.html">CELULAR</a></li>
        <li><a href="roupa.html">ROUPAS</a></li>
        <li><a href="tenis.html">TÊNIS</a></li>
        <li><a href="cadastro.php">CADASTRAR</a></li>
        <li><a href="entrar.php">ENTRAR</a></li>
        <li><a href="contato.php">CONTATO</a></li>
     </ul>
</nav>
</header>
<!-- INÍCIO DA CONSTRUÇÃO DA SESSÃO DO USUARIO -->


<section class="barra_top">
    <div class="barra">
        <h1>Área  do Usuária</h1>
    </div>

    <div class="barra">
        <a href="index.html">SAIR</a>
    </div>
</section>


 <section class="usuario">
        <h2>Olá, Nome do Cliente</h2>
        <p>Seja Bem-Vindo à PalancaTec</p>
</section>


      <!--inserir e Inicio do Rodape-->

      <footer>
        <div class="rodape">
            <ul>
                <li><a href="pagina_init.html">HOME</a></li>
                <li><a href="calculadora.html">CALCULADORA</a></li>
                <li><a href="projeto.html">LOJA</a></li>
                <li><a href="celular.html">CELULARES</a></li>
                <li><a href="roupa.html">ROUPAS</a></li>
                <li><a href="tenis.html">TENIS</a></li>
                <li><a href="cadastro.html">CADASTRO</a></li> <!-- Fixed anchor tag placement -->
                <li><a href="entrar.html">ENTRAR</a></li>
                <li><a href="contato.php">CONTATO</a></li> <!-- Fixed anchor tag placement -->
            </ul>
        </div>

        <div class="rodape">
            <p>8 avenue du Bivaque - ville Universitaire</p>
            <p>Longwy - Lorraine - 54400 </p>
        </div>

        <div class="rodape">
             <p>Siga as nossas Redes sociais</p>
             <a href="#"><img src="img/facebook.png" alt="Facebook PalancaShoping"></a>
             <a href="#"><img src="img/instagram.png" alt="instagram PalancaShoping"></a>
             <a href="#"><img src="img/youtube.png" alt="youtube PalancaShoping"></a>
             
        </div>
      </footer>

    <!-- Configurações do JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="projeto.js"></script>

<!-- Configurações do JavaScript para as imagens que fazem a troca automatico -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.cycle-slideshow').cycle({
            fx: 'scrollHorz', // Efeito de movimento horizontal
            pauseOnHover: true, // Pausar ao passar o mouse
            speed: 400, // Velocidade de transição
            timeout: 3000 // Tempo entre as transições (em milissegundos)
        });
    });
</script>


<!-- Configuração do PHP -->

<?php

if(isset($_POST['submit'])){

    include_once('conectar.php');


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];

    $clientes = mysqli_query($conexao, "INSERT INTO cadastro_cliente(nome_cliente, email_cliente, senha_cliente, sexo_cliente) VALUE ('$nome', '$email', '$senha', '$sexo')");
}


?>

</body>
</html>
