<?php

$startMemory = xdebug_memory_usage();

$array = array();
for ($i = 1; $i <= 100000; $i++) {
  $array[] = (string) $i;
}
unset($i);

echo xdebug_memory_usage() - $startMemory, ' bytes';

xdebug_debug_zval('array');