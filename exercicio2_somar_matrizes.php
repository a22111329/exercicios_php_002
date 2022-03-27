<?php

    function somar_matrizes($matriz_a, $matriz_b) {
        $soma = array();
        for($i = 0; $i < count($matriz_a); $i++) {
            for($j = 0; $j < count($matriz_a); $j++) {
                $soma[$i][$j] = $matriz_a[$i][$j] + $matriz_b[$i][$j];
            }
        }

        for ($i = 0; $i < count($matriz_a); $i++) {
            for ($j = 0; $j < count($matriz_a); $j++) {
                echo $soma[$i][$j] . " ";
            }
            echo "<br>";
        }

    }

    $matriz_a = array( array(2, -1, -1),
                     array(-1, 2, -1),
                     array(-1, -1, 1)
                    );

    $matriz_b = array( array(2, -1, -1),
                    array(-1, 2, -1),
                    array(-1, -1, 1)
                );
    somar_matrizes($matriz_a, $matriz_b); 

?>
