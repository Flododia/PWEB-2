<?php   
    $raio = $_GET['raio'];
    $altura = $_GET['altura'];

    $area_base = pi * ($raio * $raio);
    $volume = $area_base * $altura;
    print 'O volume da caixa dagua é de ' . ($volume * 1000) . 'L';
?>
