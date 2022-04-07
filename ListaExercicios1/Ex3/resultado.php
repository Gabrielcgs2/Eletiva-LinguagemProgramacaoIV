<?php

    $valor = $_POST['valor'];

    if($valor > 10)
        echo 'valor maior que 10';
    elseif($valor < 10)
        echo 'valor menor que 10';
    else
        echo 'valor igual a 10';
