<?php

use App\Common\Environment;

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/Src/slimConfiguration.php';
require __DIR__.'/Routes/index.php';


Environment::load(__DIR__);

// echo __DIR__;