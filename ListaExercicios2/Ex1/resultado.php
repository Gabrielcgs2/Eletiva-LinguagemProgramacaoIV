<?php
    $vetor = array(
        'pos1' => $_POST['valor1'],
        'pos2' => $_POST['valor2'],
        'pos3' => $_POST['valor3'],
        'pos4' => $_POST['valor4'],
        'pos5' => $_POST['valor5'],
        'pos6' => $_POST['valor6'],
        'pos7' => $_POST['valor7'],
        'pos8' => $_POST['valor8'],
        'pos9' => $_POST['valor9'],
        'pos10' => $_POST['valor10'],
    );
    foreach($vetor as $v){
        echo $v;
    }