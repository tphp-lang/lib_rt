<?php
// EXPECT: smoke=hello from Tphp\Lib_rt
require __DIR__ . "/../vendor/autoload.php";

use Tphp\Lib_rt\Greeter;

echo "smoke=", Greeter::hello(), "\n";
