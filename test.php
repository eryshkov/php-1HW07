<?php

require_once __DIR__ . '/classes/View.php';

$view1 = new View();
$view1->assign('basic.php', 'testValue');
$view1->display('basic.php');


