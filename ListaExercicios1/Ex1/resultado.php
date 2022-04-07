<?php

    $valor_produto = $_POST['valor_produto'];
    $valor_pago = $_POST['valor_pago'];

    if($valor_produto == $valor_pago)
        echo "Não há troco!";
    elseif($valor_produto > $valor_pago)
        echo "Valor pago insulficiente!";
    else
        echo "Valor do troco: R$".($valor_pago - $valor_produto);