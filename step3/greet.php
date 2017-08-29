<?php

require '../vendor/autoload.php';

use atk4\ui\App;

$app = new App('Welcome to Agile Toolkit');
$app->initLayout('Centered');

$greeting = 'Hello, ' . $_GET['name'];
$button = $app->add(['Header', $greeting]);
