<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/guestbook/classes/view.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/guestbook/classes/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/guestbook/classes/guestbook.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/guestbook/classes/data.php';


# http://bothecat/guestbook/?page=$1

$page = isset($_GET['page']) ? $_GET['page'] : 'guestbook';
if($page === 'getData'):
    Data::getMessages();
elseif($page === 'insert'):
    Data::insert();
else:
    $app = new GuestBook();
endif;
