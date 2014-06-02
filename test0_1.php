<?php

$startMemory = xdebug_memory_usage();

$string = '1234567';

echo xdebug_memory_usage() - $startMemory, ' bytes';

xdebug_debug_zval('string');