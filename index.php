<?php

require __DIR__.'/vendor/autoload.php';

$config = require __DIR__.'/config.php';

use DebugBar\StandardDebugBar;

$debugbar = new StandardDebugBar();
$debugbarRenderer = $debugbar->getJavascriptRenderer();

$app = new App\Libraries\Application($config);

echo $debugbarRenderer->render();
echo $app;


