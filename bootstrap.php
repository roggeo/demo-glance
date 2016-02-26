<?php
include "vendor/autoload.php";

use Glance\Glance,
    Glance\Config;

$conf = new Config();

// Defining folder repository of all yours themes
$conf->setFolderTheme('themes');

$theme = new Glance($conf);