--TEST--
pinpioint_php internal test case [pinpoint_test_main]
--SKIPIF--
<?php if (!extension_loaded("pinpoint_php")) print "skip"; ?>
--INI--
pinpoint_php.CollectorHost=unix:/unexist_file.sock
pinpoint_php.SendSpanTimeOutMs=0
pinpoint_php.UnitTest=true
--FILE--
<?php 
var_dump(pinpoint_test_main());
--EXPECTF--
bool(true)