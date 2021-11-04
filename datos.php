<?php

require_once __DIR__ . '/vendor/autoload.php';


$client = new MongoDB\Client(
    'mongodb+srv://yo:abc13579@cluster0.bosd3.mongodb.net/water?retryWrites=true&w=majority');

$tb=$client->water->Precipitaciones;
$filter= ['$and'=>
            [
                ['ANNO'=>['$eq'=>'1997']],
                ['ESTACION'=>['$eq'=>'Sutatausa']]
            ]
        ];

$rows = $tb->find($filter);
$datos= iterator_to_array($rows);
echo json_encode($datos);
/*$registro=array(
"iduser"=>"1458",
"fecha"=>"1/1/2033",
"puntaje"=>"14589"
);*/

//$resultado=$tb->insertOne($registro);
//echo $resultado->getInsertedCount();




?>