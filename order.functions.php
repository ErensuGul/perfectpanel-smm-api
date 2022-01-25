<?php

include "smm.class.php";
$api = new Api();

$order = $api->order(array('service' => 1, 'link' => 'http://example.com/test', 'quantity' => 100)); # Default

$order = $api->order(array('service' => 1, 'link' => 'http://example.com/test', 'comments' => "good pic\ngreat photo\n:)\n;)")); # Custom Comments

$order = $api->order(array('service' => 1, 'link' => 'http://example.com/test')); # Package

$order = $api->order(array('service' => 1, 'link' => 'http://example.com/test', 'quantity' => 100, 'runs' => 10, 'interval' => 60)); # Drip-feed

$order = $api->order(array('service' => 1, 'username' => 'username', 'min' => 100, 'max' => 110, 'posts' => 0,'delay' => 30, 'expiry' => '11/11/2019')); # Subscriptions

$order = $api->order(array('service' => 1, 'link' => 'http://example.com/test', 'quantity' => 100, 'username' => "test")); # Comment Likes

$status = $api->status($order->order); # return status, charge, remains, start count, currency

$statuses = $api->multiStatus([1, 2, 3]); # return orders status, charge, remains, start count, currency
