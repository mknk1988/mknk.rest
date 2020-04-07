<?php


namespace Mknk\Rest\Methods;

use CUser;


class User extends Method
{
    public function sendResponse()
    {
        // TODO: Implement sendResponse() method.
    }

    protected function getData()
    {

    }

    protected function setData()
    {
        // TODO: Implement setData() method.
    }

    public function auth($login, $password)
    {
        $result = (new CUser())->Login($login, $password);
        return json_encode($result);
    }
}