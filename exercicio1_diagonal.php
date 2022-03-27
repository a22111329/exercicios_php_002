<?php

    function somar_diagonal_principal($matriz) {
        $soma = 0;
        for($i = 0; $i < count($matriz); $i++) {
            for($j = 0; $j < count($matriz); $j++) {
                if($i == $j) {
                    $soma += $matriz[$i][$j];
                }        
            }
        }
        return $soma;
    }

    $matriz = array( array(2, -1, -1),
                     array(-1, 2, -1),
                     array(-1, -1, 1)
                    );
    echo somar_diagonal_principal($matriz); 

?>
