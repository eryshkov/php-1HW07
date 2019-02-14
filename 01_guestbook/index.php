<?php
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/../classes/View.php';

$myGuestBook = new GuestBook(__DIR__ . '/guestBook.txt');
$guestBookRecords = $myGuestBook->getData();

$view = new View();
$view->assign('guestBookRecords', $guestBookRecords);
$view->display(__DIR__ . '/templates/guestBookBasic.php');


