<?php

$startMemory = xdebug_memory_usage();

$null = null;

echo xdebug_memory_usage() - $startMemory, ' bytes';

xdebug_debug_zval('null');
