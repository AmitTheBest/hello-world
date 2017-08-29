<?php

include 'lib.php';

$app->add(['Header', 'Introduction']);

$app->add(['Message', 'Rules'])
    ->text->addParagraph('Each number in a fibonacci sequence is sum of previous two numbers');

$app->add(['Button', 'Start', 'primary'])
    ->link(['fibonacci', 'a'=>0, 'b'=>1]);
