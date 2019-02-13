<?php
include_once __DIR__ . '/constants.php';
require_once __DIR__ . '/classes/GuestBook.php';

$myGuestBook = new GuestBook(GUEST_BOOK_FILE);

if (isset($_POST['message'])) {
    //Применил возврат $this из метода, что дает возможность сразу вызвать следующий метод
    $myGuestBook->append($_POST['message'])->save();

    header('Location: ' . GUEST_BOOK_URL_ROOT);
    exit;
} else {
    http_response_code(400);
}



