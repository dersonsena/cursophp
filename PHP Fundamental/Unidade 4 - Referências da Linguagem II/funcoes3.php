<?php

function cafeteira ($tipo="cappuccino") {
    return "Fazendo uma xícara de café " . $tipo . ".";
}

echo cafeteira(); // Fazendo uma xícara de café cappucino.
echo cafeteira(null) // Fazendo uma xícara de .;
echo cafeteira("expresso") // Fazendo uma xícara de café expresso.;

?>