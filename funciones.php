<?php

// $nombre = "Camila";
// $apellido = "Rojas";

// function concatenar( $nombre, $apellido ) {
//     echo "$nombre $apellido";
// }

// concatenar($nombre, $apellido);

function sumarNumeros($numeros) {

    $suma = 0;

    for ($i=0; $i < 4; $i++) { 
        $suma += $numeros[$i];
    }

    echo "La suma total es $suma";
}

$numeros = [2,3,4,5];
sumarNumeros($numeros);