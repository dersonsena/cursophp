<?php

// Inicializando dados de sessao
session_start();

$_SESSION['usuario_id']   = 4;
$_SESSION['usuario_nome'] = 'Francisco';

echo "ID do usuário é: " . $_SESSION['usuario_id'] . ' - Seu nome é: ' . $_SESSION['usuario_nome'] . '<br />';

?>