<?php

// This is cartoon fighting game app

require_once $_SERVER['DOCUMENT_ROOT'] . '/cartoon_fighting/sys/config.php';
require_once CLASSES . '/ClsChecker.php';
require_once APP_DROOT . '/sys/View.php';
require_once APP_DROOT . '/sys/db.php';
require_once APP_DROOT . '/sys/Session.php';
require_once CLASSES . '/Index.php';
require_once CLASSES . '/NewGame.php';
require_once CLASSES . '/Game.php';
require_once CLASSES . '/StaticPage.php';
require_once CLASSES . '/Records.php';
require_once CLASSES . '/Help.php';
require_once CLASSES . '/Fighter.php';

$cls_checker = new ClsChecker(isset($_GET['url']) ? $_GET['url'] : 'index');