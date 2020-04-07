<?php


namespace Mknk\Rest;


class Request
{
    public static function parceRequest(array $request)
    {
        foreach ($request as $k => $v) {
            echo $k . " : " .$v;
            echo "\n";
            echo md5($k.$v);

        }
    }
}