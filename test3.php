<?php

class Test3
{
  private $lall;

  public function __construct($lallInput)
  {
    $this->lall = $lallInput;
  }
}

$startMemory = xdebug_memory_usage();

$array = new SplFixedArray(100000);
for ($i = 0; $i < 100000; ++$i) {
  $array[$i] = new Test3($i);
}


echo xdebug_memory_usage() - $startMemory, ' bytes';

xdebug_debug_zval('array');