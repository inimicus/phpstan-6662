<?php

class RequiredClass
{
    // Nope
}

define('GREET_REQUIRE_STRING', 'Hello');
define('GREET_REQUIRE_BOOL', true);
define('GREET_REQUIRE_CONCAT', 'Hel' . 'lo');
define('GREET_REQUIRE_INT', 123);
define('GREET_REQUIRE_FLOAT', 1.23);
define('GREET_REQUIRE_NULL', null);
$greetRequireVar = 'Hello';
define('GREET_REQUIRE_VAR', $greetRequireVar);
define('GREET_REQUIRE_FUNCTION', implode('', ['H', 'e', 'l', 'l', 'o']));
define('GREET_REQUIRE_ARRAY', ['Hello']);
define('GREET_REQUIRE_CLASS', RequiredClass::class);
