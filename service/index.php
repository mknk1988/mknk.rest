<?php
define("NOT_CHECK_PERMISSIONS", true);
define("STOP_STATISTICS", true);
define("BX_SENDPULL_COUNTER_QUEUE_DISABLE", true);

use Bitrix\Main\Loader;
use Mknkrest\Request;
use Mknkrest\Methods\User;

require_once $_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php";

Loader::includeModule("mknk.rest");
Request::parceRequest($_GET, $_SERVER["REQUEST_URI"]);
User::getVal();
//echo "<pre>";
//echo "<h1>GET</h1>";
//var_dump($_GET);
//echo "<h1>POST</h1>";
//var_dump($_POST);
//echo "<h1>REQUEST</h1>";
//var_dump($_REQUEST);
//echo "<h1>DATA</h1>";
//var_dump($_SERVER["REQUEST_URI"]);
//echo "</pre>";

require_once $_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_after.php";