<?php

// Criando o cookie - 30 dias
setcookie('usuario', 'Jo�o Felix', time()+60*60*24*30);

echo $_COOKIE['usuario'];

?>