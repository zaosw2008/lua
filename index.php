<?php
$redis=new redis();

$redis->connect('127.0.0.1');
echo redis->ping();
