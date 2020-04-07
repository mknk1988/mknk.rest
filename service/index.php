<?php
define("NOT_CHECK_PERMISSIONS", true);
define("STOP_STATISTICS", true);
define("BX_SENDPULL_COUNTER_QUEUE_DISABLE", true);

use Bitrix\Main\Loader;
use Mknk\Rest\Request;
use Mknk\Rest\Methods\User;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php";

Loader::includeModule("mknk.rest");
Request::parceRequest($_GET);

require_once $_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_after.php";