<?php

require 'required.php';

class InlineClass
{
    // Nope
}

define('GREET_INLINE_STRING', 'Cheers');
define('GREET_INLINE_BOOL', false);
define('GREET_INLINE_CONCAT', 'Che' . 'ers');
define('GREET_INLINE_INT', 456);
define('GREET_INLINE_FLOAT', 4.56);
define('GREET_INLINE_NULL', null);
$greetInlineVar = 'Cheers';
define('GREET_INLINE_VAR', $greetInlineVar);
define('GREET_INLINE_FUNCTION', implode('', ['C', 'h', 'e', 'e', 'r', 's']));
define('GREET_INLINE_ARRAY', ['Cheers']);
define('GREET_INLINE_CLASS', InlineClass::class);

var_dump(GREET_REQUIRE_STRING);
var_dump(GREET_REQUIRE_BOOL);
var_dump(GREET_REQUIRE_CONCAT);
var_dump(GREET_REQUIRE_INT);
var_dump(GREET_REQUIRE_FLOAT);
var_dump(GREET_REQUIRE_NULL);
var_dump(GREET_REQUIRE_VAR);
var_dump(GREET_REQUIRE_FUNCTION);
var_dump(GREET_REQUIRE_ARRAY);
var_dump(GREET_REQUIRE_CLASS);

var_dump(GREET_INLINE_STRING);
var_dump(GREET_INLINE_BOOL);
var_dump(GREET_INLINE_CONCAT);
var_dump(GREET_INLINE_INT);
var_dump(GREET_INLINE_FLOAT);
var_dump(GREET_INLINE_NULL);
var_dump(GREET_INLINE_VAR);
var_dump(GREET_INLINE_FUNCTION);
var_dump(GREET_INLINE_ARRAY);
var_dump(GREET_INLINE_CLASS);
