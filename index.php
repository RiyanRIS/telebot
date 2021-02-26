<?php

require_once __DIR__.'/vendor/autoload.php';
// mysql://b87a5511b2a1d5:5bb788dc@us-cdbr-east-03.cleardb.com/heroku_102927024839192?reconnect=true
$settings = [
  'database' => [
    'host' => 'us-cdbr-east-03.cleardb.com',
    'dbName' => 'heroku_102927024839192',
    'username' => 'b87a5511b2a1d5',
    'password' => '5bb788dc',
    'tableName' => 'users',
  ],
  'botUsername' => 'riyantesBot',
  'firstRun' => true,
];

$update = json_decode(file_get_contents('php://input'), true);

$bot = new \neneone\SnapeBot\SnapeBot('1369088735:AAGkBavShqR7Lt3CFfv_QLkvr6S2n45CvBU', $update, $settings);

require __DIR__.'/saveMsg.php';
require __DIR__.'/botCommands.php';
