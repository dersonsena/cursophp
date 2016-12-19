<?php

$a = 1; // escopo GLOBAL

function teste() {
    echo $a; // referencia uma variável do escopo LOCAL (não definida)
}

teste();

?>