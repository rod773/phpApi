<?php

$arrayRutas=explode("/",$_SERVER['REQUEST_URI']);



echo "<pre>";
print_r($arrayRutas);
echo "<pre>";

echo $_SERVER['REQUEST_URI'];

$json = array(
    "detalle"=>"no encontrado"
);

echo json_encode($json,true);
?>
