--TEST--
Connection - ConnectDelimitedNodes

--SKIPIF--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_skipif("Connection", "testConnectDelimitedNodes");

--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("Connection", "testConnectDelimitedNodes");
--EXPECT--
PHP_COUCHBASE_OK