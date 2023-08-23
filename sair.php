<?php

// Destruir as variaveis 

unset($_SESSION['email_cliente']);
unset($_SESSION['senha_cliente']);


//direcionamento para outra pagina depois de sair

header('Location:index.html');

?>