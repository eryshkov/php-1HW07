<?php
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/../classes/View.php';

$myGuestBook = new GuestBook(__DIR__ . '/guestBook.txt');
$guestBookRecords = $myGuestBook->getData();

$view = new View('guestBookBasic.php', $guestBookRecords);
$view->display('guestBookBasic.php');


