--TEST--
Borken configuration - encrypted cookie with name and regexp
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) print "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/broken_conf_cookie_name_and_regexp.ini
--FILE--
--EXPECT--
[snuffleupagus][0.0.0.0][config][error] name and name_r are mutually exclusive on line 2.
