<?php

if (__DIR__ == '__DIR__') {
  die('you need php 5.3 get this working…'); }

define ('ABSPATH', __DIR__ . '/');

require_once 'libs/JadeHandler.class.php';

$Jade = new JadeHandler(ABSPATH . 'views/');
$Jade->assign('items', array('Lorem', 'Ipsum', 'Dolor', 'Sit', 'Amet'));
$Jade->render('home');