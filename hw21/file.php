<?php

require_once 'autoload.php';


$pathFile = './files/data.txt';
//$pathFile = __DIR__ . '/files/data.txt';
$handle = fopen($pathFile, 'a+');

var_dump($handle);

$str = fread($handle, filesize($pathFile));
//$str = file_get_contents($pathFile);
$strArray = file($pathFile);

var_dump($str);
/*
foreach ($strArray as $str) {
    printf('<p>%s</p>', $str);
}*/


/*while (($csv = fgetcsv($handle, filesize($pathFile), ';')) !== false) {
    var_dump($csv);
}*/


/*fwrite($handle, PHP_EOL .'Test5;28');
$str = file($pathFile);
var_dump($str);*/


//rename( __DIR__ . '/files/data_test.csv', __DIR__ . '/files/test.txt');

//unlink(__DIR__ . '/files/test.txt');

fclose($handle);


var_dump(realpath('./files/data.txt'));


function __autoload ($nameClass) {

    if ('File' == $nameClass) {
        require_once 'src/File.php';
    }
}