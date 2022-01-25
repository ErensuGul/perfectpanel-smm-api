<?php

include "smm.class.php";
$api = new Api();

$services = $api->services(); # return all services
$balance = $api->balance(); # return user balance
