<?php
session_start();
header("Content-type: text/html; charset=utf-8"); 
require_once 'vendor/autoload.php';

use JPush\Model as M;
use JPush\JPushClient;
use JPush\Exception\APIConnectionException;
use JPush\Exception\APIRequestException;

$app_key = $_SESSION['app_key'];
$master_secret = $_SESSION['master_secret'];

$br = '<br/>';
$client = new JPushClient($app_key, $master_secret);

$result = $client->push()
    ->setPlatform(M\all)
    ->setAudience(M\all)
    ->setNotification(M\notification('你有一份新的饿了么订单！'))
    ->send();
echo 'Push Success.' . $br;
echo 'sendno : ' . $result->sendno . $br;
echo 'msg_id : ' .$result->msg_id . $br;
echo 'Response JSON : ' . $result->json . $br;