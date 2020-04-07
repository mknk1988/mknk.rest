<?php


namespace Mknk\Rest\Methods;


abstract class Method
{
    abstract public function sendResponse();

    abstract protected function getData();

    abstract protected function setData();
}