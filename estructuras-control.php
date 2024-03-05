<?php

// $valorA = 10;

// if ( $valorA === 10 ) {
//     echo "Es diez";
// } else {
//     echo "No es 10";
// }

// $i = 0;
// while ($i <= 10) {
//     echo $i++;
// }

// do {
//     echo $i++;
// } while ($i <= 10);

// $arr = array(1,2,3,4);

// for ($i=0; $i < 4; $i++) { 
//     echo $arr[$i] . "\n";
// }
// foreach ($arr as $value) {
//     echo $value;
// }

$valorA = 6;

switch ($valorA) {
    case 1:
        echo "Es uno";
        break;
    case 2:
        echo "Es dos";
        break;
    case 3:
        echo "Es tres";
        break;
    default:
        echo "No es ninguno de los valores 1, 2 o 3";
        break;
}

