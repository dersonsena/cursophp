<?php

$a = 1; // escopo GLOBAL

function teste() {
    echo $a; // referencia uma vari�vel do escopo LOCAL (n�o definida)
}

teste();

?>