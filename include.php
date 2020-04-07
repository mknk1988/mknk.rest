<?php

use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses(
    "mknk.rest",
    [
        "Mknk\\Rest\\Request" => "/local/modules/mknk.rest/lib/request.php",
        "Mknk\\Rest\\Methods\\Method" => "/local/modules/mknk.rest/lib/methods/method.php",
        "Mknk\\Rest\\Methods\\User" => "/local/modules/mknk.rest/lib/methods/user.php",
    ]
);
