<?php

$startMemory = xdebug_memory_usage();

$string = '';

echo xdebug_memory_usage() - $startMemory, ' bytes';

xdebug_debug_zval('string');