<?php

namespace App\Xml;

class Read
{
    function read($path)
    {
        $arr = [];
        $xmlObj = simplexml_load_string(file_get_contents($path));

        foreach ($xmlObj->user as $value) {
            $arr[] = [
                'name' => $value->__toString(),
                'birthday' => (string)$value['birthday'],
            ];
        }
        return $arr;
    }
}