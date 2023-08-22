<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PalancaTech</title>
   <link rel="stylesheet" href="./css/entrar.css">
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


<!--INICIO DO LOGIN-->
<div class="login">

<div class="logar">
<h1>LOGIN</h1>

<form action="" method="post">
    <input type="email" id="email_usuario" placeholder="Digite seu e-mail">
    <br>
    <input type="password" id="senha_usuario" placeholder="Digite sua senha">
    <br>
    <input type="button" id="btn_logar" value="ENTRAR">
</form>
</div>

<div class="logar" id="logar1">
   <h3 id="id_hoje">TÊNIS NICK</h3>
   <p id="p_hoje"> $AOA 4.500,45</p>
   <img src="img/nick.gif" alt="Tênis_Puma">
   <a href="#">COMPRAR</a>
</div>

</div>





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

</body>
</html>
