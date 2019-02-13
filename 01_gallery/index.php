<?php
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/constants.php';
require_once __DIR__ . '/../classes/View.php';

$myGuestBook = new GuestBook(GUEST_BOOK_FILE);
$guestBookRecords = $myGuestBook->getData();

$view = new View('guestBookBasic.php', $guestBookRecords);
$view->display('guestBookBasic.php');


