<?php

$startMemory = xdebug_memory_usage();

$array = new SplFixedArray(100000);
for ($i = 0; $i < 100000; ++$i) {
  $array[$i] = $i;
}

echo xdebug_memory_usage() - $startMemory, ' bytes';

xdebug_debug_zval('array');