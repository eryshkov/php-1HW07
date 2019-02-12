<?php

require_once __DIR__ . '/classes/View.php';

$view1 = new View();
$view1->assign('basic.php', [4,5,6]);
$view1->display('basic.php');


