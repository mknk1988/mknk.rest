<?php

use Bitrix\Main\UrlRewriter;
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

class mknk_rest extends CModule
{
    public function __construct()
    {
        $arModuleVersion = [];
        include_once __DIR__ . "/version.php";

        $this->MODULE_ID = Loc::getMessage("MKNK_MODULE_ID");
        $this->MODULE_NAME = Loc::getMessage("MKNK_MODULE_NAME");
        $this->MODULE_DESCRIPTION = Loc::getMessage("MKNK_MODULE_DESCRIPTION");
        $this->MODULE_VERSION = $arModuleVersion["VERSION"];
        $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
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
        $siteID = CSite::GetDefSite();
        UrlRewriter::add(
            $siteID,
            [
                "CONDITION" => "#^/api/#",
                "RULE" => "",
                "PATH" => "/local/modules/mknk.rest/service/index.php"
            ]
        );
    }

    private function deleteCondUrl()
    {
        $siteID = CSite::GetDefSite();
        UrlRewriter::delete(
            $siteID,
            [
                "CONDITION" => "#^/api/#",
                "PATH" => "/local/modules/mknk.rest/service/index.php"
            ]
        );
    }
}