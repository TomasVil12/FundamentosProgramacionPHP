<?php
    echo"Ejemplo del uso de comando switch en PHP <br>";
    $i =5;
    switch ($i) 
    {
        case 1:
            echo "Uno";
            break;
        case 2:
            echo "Dos";
            break;
        case 3:
            echo "Tres";
            break;
        case 4:
            echo "Cuatro";
            break;
        default:
            echo "Solo me programaron entre 1 y 4 <br>";
    };

?>