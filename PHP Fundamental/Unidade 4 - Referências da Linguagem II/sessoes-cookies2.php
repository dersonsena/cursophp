<?php

// Inicializando dados de sessao
session_start();

echo "ID do usuário é: " . $_SESSION['usuario_id'] . ' - Seu nome é: ' . $_SESSION['usuario_nome'] . '<br />';

// Se você fechar seu navegador, nao sera impresso as variaveis e ira gerar notices

?>