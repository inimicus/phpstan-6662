<?php

define('GREET_REQUIRE_1', 'Hello');
define('GREET_REQUIRE_2', strtolower('Hello'));
$greetRequireVar = 'Hello';
define('GREET_REQUIRE_3', $greetRequireVar);
define('GREET_REQUIRE_4', implode('', ['H', 'e', 'l', 'l', 'o']));
