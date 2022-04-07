<?php

    $valor = $_POST['valor'];

    if($valor > 0)
        echo 'Valor Positivo';
    elseif($valor < 0)
        echo 'Valor Negativo';
    else
        echo 'Igual a 0';
