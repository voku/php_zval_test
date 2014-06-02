<?php

function test4($input) {

  echo "function1-begin:" . (xdebug_memory_usage() - $GLOBALS['startMemory']) . " bytes \n<br />";

  foreach ($input as $key => $value) {
    $input[$key] = null;
  }

  echo "function1-end:" . (xdebug_memory_usage() - $GLOBALS['startMemory']) . " bytes \n<br />";

  return $input;
}

function test4_ref(&$input) {

  echo "function2-begin:" . (xdebug_memory_usage() - $GLOBALS['startMemory']) . " bytes \n<br />";

  foreach ($input as $key => $value) {
    $input[$key] = null;
  }

  echo "function2-end:" . (xdebug_memory_usage() - $GLOBALS['startMemory']) . " bytes \n<br />";
}

$GLOBALS['startMemory'] = xdebug_memory_usage();
echo "start:" . (xdebug_memory_usage() - $GLOBALS['startMemory']) . " bytes \n<br />";

$array = range(1, 100000);
echo "array:" . (xdebug_memory_usage() - $GLOBALS['startMemory']) . " bytes \n<br />";

$array = test4($array);
echo "array-test4:" . (xdebug_memory_usage() - $GLOBALS['startMemory']) . " bytes \n<br />";

test4_ref($array);
echo "array-test4_ref:" . (xdebug_memory_usage() - $GLOBALS['startMemory']) . " bytes \n<br />";

echo "end:" . (xdebug_memory_usage() - $GLOBALS['startMemory']) . " bytes \n<br />";

