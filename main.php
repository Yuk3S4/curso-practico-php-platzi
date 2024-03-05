<?php

$words = [ "sol", "luna", "cielo", "estrellas", "lluvia" ];

$form = "<form action='analisis.php'>";

for ($i=0; $i < count($words); $i++) { 
    $form .= "La palabra: " . str_shuffle($words[$i]) . " " . 
    "<input type='text' name='palabra". $i ."'>" . 
    "<br>";
}

$button = "<button type='submit'>Enviar</button>";
$formClose = "</form>";

echo $form . $button . $formClose;