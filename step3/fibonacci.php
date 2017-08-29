<?php

require 'lib.php';

if (!isset($_GET['a'])) {
    $app->add(['Message', 'Argument in not specified', 'error']);

    $app->add(['ui'=>'divider']);

    $app->add(['View', 'Start over', 'secondary'])
        ->link(['index']);

    exit;
}



$a = $_GET['a'];
$b = $_GET['b'];
$c = $a + $b;

$greeting = 'The last 3 numbers are, ' . $a.', '.$b.', '.$c;
$app->add(['Header', $greeting]);


$app->add(['Button', 'Calculate next number', 'primary'])
    ->link(['a'=>$b, 'b'=>$c]);

$app->add(['ui'=>'divider']);

$app->add(['View', 'Start over', 'secondary'])
    ->link(['index']);
