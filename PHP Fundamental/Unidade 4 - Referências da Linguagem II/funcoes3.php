<?php

function cafeteira ($tipo="cappuccino") {
    return "Fazendo uma x�cara de caf� " . $tipo . ".";
}

echo cafeteira(); // Fazendo uma x�cara de caf� cappucino.
echo cafeteira(null) // Fazendo uma x�cara de .;
echo cafeteira("expresso") // Fazendo uma x�cara de caf� expresso.;

?>