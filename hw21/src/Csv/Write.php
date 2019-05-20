<?php

namespace App\Csv;


class Write
{
    public function writCsv ($filePath, array $file)
    {
        $handle = fopen($filePath, 'a');
        fputcsv($handle, $file, ';');

        fclose($handle);
    }

}