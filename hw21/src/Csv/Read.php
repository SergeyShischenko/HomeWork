<?php

namespace App\Csv;


class Read
{
    public function read($filePath)
    {
        $handle = fopen($filePath, 'r');
        $array_line = [];
        while (($result = fgetcsv($handle,0,';')) !== false)
            $array_line [] = $result;

        fclose($handle);
        return (object)$array_line;
    }
}