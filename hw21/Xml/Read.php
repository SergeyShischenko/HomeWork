<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.05.2019
 * Time: 9:58
 */

namespace Xml;


class Read
{
    public function readXml($path)
    {
        $res = [];
        $xmlObj = simplexml_load_file($path);
        foreach ($xmlObj as $value) {
            $res = $value;
            return $value;
            //return $xmlObj->birthday;
        }
    }



}