<?php

class mknk_rest extends CModule
{
    public function __construct()
    {
        $arModuleVersion = [];
        include_once __DIR__ . "/version.php";

        $this->MODULE_ID = "mknk.rest";
        $this->MODULE_NAME = "MKNK REST";
        $this->MODULE_DESCRIPTION = "Модуль для связки сайта и мобильного приложения";
        $this->MODULE_VERSION = "";
        $this->MODULE_VERSION_DATE = "";
    }

    public function DoInstall()
    {
        $this->addCondUrl();
        RegisterModule($this->MODULE_ID);
    }

    public function DoUninstall()
    {
        $this->deleteCondUrl();
        UnRegisterModule($this->MODULE_ID);
    }

    private function addCondUrl()
    {

    }

    private function deleteCondUrl()
    {

    }
}