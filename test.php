<?php

require_once __DIR__ . '/classes/View.php';

$view1 = new View();
$view1->assign('testName', 'testValue');

var_dump($view1->storage);
