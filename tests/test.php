<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use HDLine\HDLine;

echo HDLine::underline2hump('Hello_World') . "\n";
echo HDLine::hump2underline('HelloWorld');