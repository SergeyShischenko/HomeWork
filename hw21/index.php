<?php


require_once 'vendor/autoload.php';


$readCsv = new \App\Csv\Read();
$resReadCsv = $readCsv->read('./data.csv');
var_dump($resReadCsv);

############
$readXml = new \App\Xml\Read();
$resReadXml = $readXml->read('./data.xml');

var_dump($resReadXml);

//$endres = (object)array_merge((array)$csvres, (array)$resRead);
//var_dump($endres);



