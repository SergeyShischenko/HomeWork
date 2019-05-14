<?php
require_once 'dev.php';

/**Прикреплено 2 файла в формате csv и xml. Необходимо синхронизировать данные, которые в них содержаться, то есть данные должны быть одинаковыми в обоих файлах но в соответствии с форматом который в них уже задан. Из одного файла необходимо записать недостающие записи в другой и наоборот.
Должно быть реализовано 4 класса: Csv/Read.php, Csv/Write.php, Xml/Read.php, Xml/Write.php.
Также использовать autoload и namespase.**/

###########
$readCsv = new \Csv\Read();

$csvres = $readCsv->readCsv('./data.csv');
//var_dump($csvres);

$cswWrit = new \Csv\Write();
$toWrite = [
    0=>'Роман',
    1=> '1990-08-20'
];
//$cswWrit->writCsv('./data.csv', $toWrite);

############

$readXml = new \Xml\Read();
$resRead = $readXml->readXml('./data.xml');

var_dump($resRead);

$endres = (object)array_merge((array)$csvres, (array)$resRead);
//var_dump($endres);

