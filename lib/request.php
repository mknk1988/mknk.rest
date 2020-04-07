<?php


namespace Mknkrest;


class Request
{
    public static function parceRequest(array $request, $uri)
    {
        foreach ($request as $r) {
            var_dump($r);
        }
    }
}