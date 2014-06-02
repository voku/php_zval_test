<?php

$startMemory = xdebug_memory_usage();

$int = 0;

echo xdebug_memory_usage() - $startMemory, ' bytes';

xdebug_debug_zval('int');