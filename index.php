<?php
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/View.php';

$myGuestBook = new GuestBook(__DIR__ . '/guestBook.txt');

$view = new View();
$view->assign('guestBook', $myGuestBook);
$view->display(__DIR__ . '/templates/guestBookBasic.php');


