<?php

use Necessarylion\ECB\XChange;

require __DIR__.'/vendor/autoload.php';

$xChange = new XChange;

$result = $xChange->get('usd', 'thb');

print_r($result);

$result = $xChange->getAll('usd');

print_r($result);