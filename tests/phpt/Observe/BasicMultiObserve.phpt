--TEST--
Observe - BasicMultiObserve

--SKIPIF--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_skipif("Observe", "testBasicMultiObserve");

--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("Observe", "testBasicMultiObserve");
--EXPECT--
PHP_COUCHBASE_OK