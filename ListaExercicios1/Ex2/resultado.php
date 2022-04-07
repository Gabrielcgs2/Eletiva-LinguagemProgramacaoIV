<?php

    $valor_quilo = $_POST['valor_quilo'];
    $quantidade = $_POST['quantidade'];
    $calculo = $quantidade / 1000;
    echo "Valor a Pagar: R$".($valor_quilo * $calculo);