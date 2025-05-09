<?php

require_once 'Elevador.php';

$elevador = new Elevador(5); // Capacidade de 5 pessoas (informativa)

$elevador->chamar(3);
$elevador->chamar(1);
$elevador->chamar(7);

echo "\nChamados pendentes:\n";
foreach ($elevador->getChamadosPendentes() as $andar) {
    echo "- Andar $andar\n";
}

echo "\nMovimentando elevador:\n";
$elevador->mover(); 
$elevador->mover();
$elevador->mover(); 
$elevador->mover();
