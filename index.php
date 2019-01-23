<?php

date_default_timezone_set('UTC');

include_once 'alicloud-php-updaterecord/V20150109/AlicloudUpdateRecord.php';

use Roura\Alicloud\V20150109\AlicloudUpdateRecord;

$AccessKeyId     = $_GET['id'];
$AccessKeySecret = $_GET['key'];
$updater         = new AlicloudUpdateRecord($AccessKeyId, $AccessKeySecret);
$newIp = $_GET['ip'];
$rr = $_GET['rr'];
$type = $_GET['type'];
$domain = $_GET['domain'];


$updater->setDomainName($domain);
$updater->setRecordType($type);
$updater->setRR($rr);
$updater->setValue($newIp);

print_r($updater->sendRequest());
