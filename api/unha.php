<?php

header("Access-Controla-Allow-Origin: *");
header("Content-tipe: application/json; charset=utf-8");

$unhas[1] = array(
    "id" => 1,
    "banner" => "http://localhost/teste/imagens/unha1.jpg",
    "nome" => "Unha Francesinha",
    "preco" => "R$ 50,00",
    "link" => "unha",
);
$unhas[2] = array(
    "id" => 2,
    "banner" => "http://localhost/teste/imagens/unha2.jpg",
    "nome" => "Unha Decorada",
    "preco" => "R$ 60,00",
    "link" => "unha",
);
$unhas[3] = array(
    "id" => 3,
    "banner" => "http://localhost/teste/imagens/unha3.jpg",
    "nome" => "Unha Gel",
    "link" => "unha",
);
$unhas[4] = array(
    "id" => 4,
    "banner" => "http://localhost/teste/imagens/unha4.jpg",
    "nome" => "Unha Colorida",
    "link" => "unha",
);
$unhas[5] = array(
    "id" => 5,
    "banner" => "http://localhost/teste/imagens/unha5.jpg",
    "nome" => "Unha com Pedraria",
    "link" => "unha",
);
$unhas[6] = array(
    "id" => 6,
    "banner" => "http://localhost/teste/imagens/unha6.jpg",
    "nome" => "Unha com Glitter",
    "link" => "unha",
);
    
echo json_encode($unhas);