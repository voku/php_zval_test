<?php

$GLOBALS['startMemory'] = xdebug_memory_usage();
echo "start:" . (xdebug_memory_usage() - $GLOBALS['startMemory']) . " bytes \n<br />";

$int = 123;
echo "int:" . (xdebug_memory_usage() - $GLOBALS['startMemory']) . " bytes \n<br />";

echo strlen((string)$int);
echo "strlen-test5:" . (xdebug_memory_usage() - $GLOBALS['startMemory']) . " bytes \n<br />";

echo "end:" . (xdebug_memory_usage() - $GLOBALS['startMemory']) . " bytes \n<br />";

