<?php

require_once __DIR__ . '/vendor/autoload.php';

    $arr = array('recibido' => $_GET['prueba']);
    echo json_encode($arr);

$client = new MongoDB\Client(
    'mongodb+srv://yo:abc13579@cluster0.bosd3.mongodb.net/MultimediaS?retryWrites=true&w=majority');

$tb=$client->MultimediaS->puntaje;

$registro=array(
"iduser"=>"1458",
"fecha"=>"1/1/2033",
"puntaje"=>"14589"
);

$resultado=$tb->insertOne($registro);
echo $resultado->getInsertedCount();


?>