<?php

$words = [ "sol", "luna", "cielo", "estrellas", "lluvia" ];

for ($i=0; $i < count($words); $i++) { 
    if ( $_REQUEST["palabra" . $i] === $words[$i] ) {
        echo "La palabra ingresada es correcta" . "<br>";
    } else {
        echo "La palabra ingresada es incorrecta, la palabra correcta es: $words[$i] <br>";    
    }
}

