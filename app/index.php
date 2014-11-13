<?php
require realpath(dirname(__FILE__) . "/..").'/config.php';
require ROOT.'app/routes/produtos.php';

$app->run();
