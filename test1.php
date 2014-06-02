<?php

$startMemory = xdebug_memory_usage();

$array = array();
$array = range(1, 100000);

echo xdebug_memory_usage() - $startMemory, ' bytes';

xdebug_debug_zval('array');