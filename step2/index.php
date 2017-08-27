<?php

require '../vendor/autoload.php';

use atk4\ui\App;

$app = new App('Welcome to Agile Toolkit');
$app->initLayout('Centered');

$bar = $app->add(['ui'=>'vertical buttons']);

$bar->add(['Button', 'Play', 'icon'=>'play']);
$bar->add(['Button', 'Pause', 'icon'=>'pause']);
$bar->add(['Button', 'Shuffle', 'icon'=>'shuffle']);



$group = $app->add(['View', false, 'blue tag', 'ui'=>'labels']);
$group->add(['Label', '$9.99']);
$group->add(['Label', '$19.99', 'red tag']);
$group->add(['Label', '$24.99']);

$app->add(['Label', 'Ipsum', 'orange bottom right attached', 'icon'=>'cut']);
//$label = $app->add(['Label', 'hello world', 'red right ribbon', 'icon'=>'mail']);
