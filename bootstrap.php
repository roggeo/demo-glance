<?php

include "vendor/autoload.php";

use Glance\Glance;
use Glance\Config;

//configurations
$conf = new Config();
$conf->setFolder('public');
$theme = new Glance($conf);

