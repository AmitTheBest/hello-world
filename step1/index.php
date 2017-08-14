<?php

require '../vendor/autoload.php';

function addColorfulButton($app, $n, $color) {
    $button = $app->add(['Button', $n * 2]);

    if ($n % 2 == 1) {
        $button->addClass('green');
    } else {
        $button->addClass('blue');
    }

    return $button;
}


// TODO: Explain later
$app = new \atk4\ui\App('Welcome to Agile Toolkit');
$app->initLayout('Centered');


$greeting = 'Hello, Code';
$a = 2;
$b = 3;

$greeting = $greeting . ' Result is: '. ($a + $b);

$colors = ['red', 'green', 'blue'];

for ($i = 1; $i < 10; $i++) {
    $b = addColorfulButton($app, $i, 'red');
    $b->icon = 'book';
}
