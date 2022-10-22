<?php

require 'required.php';

define('GREET_INLINE_1', 'Cheers');
define('GREET_INLINE_2', strtolower('Cheers'));
$greetInlineVar = 'Cheers';
define('GREET_INLINE_3', $greetInlineVar);
define('GREET_INLINE_4', implode('', ['C', 'h', 'e', 'e', 'r', 's']));

var_dump(GREET_REQUIRE_1);
var_dump(GREET_REQUIRE_2);
var_dump(GREET_REQUIRE_3);
var_dump(GREET_REQUIRE_4);
var_dump(GREET_INLINE_1);
var_dump(GREET_INLINE_2);
var_dump(GREET_INLINE_3);
var_dump(GREET_INLINE_4);
