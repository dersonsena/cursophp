<?php

// Inicializando dados de sessao
session_start();

echo "ID do usu�rio �: " . $_SESSION['usuario_id'] . ' - Seu nome �: ' . $_SESSION['usuario_nome'] . '<br />';

// Se voc� fechar seu navegador, nao sera impresso as variaveis e ira gerar notices

?>