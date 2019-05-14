<?php

namespace Csv;


class Read
{
    public function readCsv($filePath)
    {
        $handle = fopen($filePath, 'r');
        $array_line = [];
        while (($result = fgetcsv($handle,0,';')) !== false)
            $array_line [] = $result;

        fclose($handle);
        return (object)$array_line;
    }
}