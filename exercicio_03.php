<?php

// Efetue um algorítmo PHP que receba um valor digitado pelo usuário e verifique se esse
// valor é positivo, negativo ou igual a zero. Imprima na tela: "Valor Positivo", "Valor Negativo",
// "Igual a Zero"

    $valor = 1;
    if ($valor > 0) {
        echo 'Valor Positivo!';
    } elseif ($valor < 0) {
        echo 'Valor Negativo!'; 
    } else {
        echo 'Igual a Zero!';
    }