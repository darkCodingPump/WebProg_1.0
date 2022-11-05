<?php
$file = file_get_contents('./xml/Autos.xml');
$cars = array();
try {
    $xml = simplexml_load_string($file);
    foreach ($xml->Auto as $car) {
        $carArray = array();

        foreach($car as $key => $value)
        {
            $carArray[(string)$key] = (string)$value;
        }
        $cars[] = $carArray;
    }
    print_r($cars);
} catch (Exception $e) {
    echo $e;
}