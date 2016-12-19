<?php

// Criando o cookie - 30 dias
setcookie('usuario', 'João Felix', time()+60*60*24*30);

echo $_COOKIE['usuario'];

?>