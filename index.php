<?php

require_once __DIR__.'/vendor/autoload.php';

$settings = [
  'database' => [
    'host' => 'localhost',
    'dbName' => 'bott',
    'username' => 'riyanris',
    'password' => '1234',
    'tableName' => 'users',
  ],
  'botUsername' => 'riyantesBot',
  'firstRun' => true,
];

$update = json_decode(file_get_contents('php://input'), true);

$bot = new \neneone\SnapeBot\SnapeBot('1369088735:AAGkBavShqR7Lt3CFfv_QLkvr6S2n45CvBU', $update, $settings);

require __DIR__.'/saveMsg.php';
require __DIR__.'/botCommands.php';
