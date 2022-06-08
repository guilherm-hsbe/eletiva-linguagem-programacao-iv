<?php
    require_once("ponto.php");
    $p1 = new Ponto(2,4);
    echo "Quantidade de objetos criados:".Ponto::getContador();

    $p2 = new Ponto(4,6);
    echo "<br/>Distância entre os pontos:".$p1->calcularDistancia($p2);

    echo "<br/>Distância entre os pontos:".$p1->calcularDistancia2(4,6);
?>