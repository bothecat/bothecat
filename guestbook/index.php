<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/guestbook/classes/guestbook.php';

# http://bothecat/guestbook/?page=$1

$page = isset($_GET['page']) ? $_GET['page'] : 'guestbook';

echo $page;