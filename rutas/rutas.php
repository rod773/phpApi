<?php

$arrayRutas = explode("/", $_SERVER['REQUEST_URI']);

echo "<pre>";
print_r($arrayRutas);
echo "<pre>";

if (count(array_filter($arrayRutas)) == 1) {

    $json = array(
        "detalle" => "no encontrado"
    );

    echo json_encode($json, true);

    return;
} else {
    if (count(array_filter($arrayRutas)) == 2) {
        if (array_filter($arrayRutas)[2] == "cursos"
        ) {

            $json = array(
                "detalle" => "estas en la vista cursos"
            );

            echo json_encode($json, true);

            return;
        }
        
        if (array_filter($arrayRutas)[2] == "registro"
        ) {

            $json = array(
                "detalle" => "estas en la vista registro"
            );

            echo json_encode($json, true);

            return;
        }
    }
}
?>