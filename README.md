# Issue phpstan/phpstan #6662

Minimal repro for [#6662](https://github.com/phpstan/phpstan/issues/6662).

When a constant behind a require/include is non-scalar, it can not be found.

Listing the file in the phpstan config under bootstrapFiles resolves the issue, however, as per phpstan v1.7.0 this should not be necessary.

# Example A

Non-scaler constants are not found when behind a require/include statement.

```
docker run --rm -v $PWD:/app ghcr.io/phpstan/phpstan analyze --level 1 .
 2/2 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%

 ------ ---------------------------------------------------------------------
  Line   index.php
 ------ ---------------------------------------------------------------------
  12     Constant GREET_REQUIRE_2 not found.
         💡 Learn more at https://phpstan.org/user-guide/discovering-symbols
  13     Constant GREET_REQUIRE_3 not found.
         💡 Learn more at https://phpstan.org/user-guide/discovering-symbols
  14     Constant GREET_REQUIRE_4 not found.
         💡 Learn more at https://phpstan.org/user-guide/discovering-symbols
 ------ ---------------------------------------------------------------------


 [ERROR] Found 3 errors
```

# Example B

Using a configuration with `bootstrapFiles` listing the file containing the non-scaler constants allows these constants to be found.

```
docker run --rm -v $PWD:/app ghcr.io/phpstan/phpstan analyze --level 1 -c fix-constants.neon .
 2/2 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%


 [OK] No errors
```

# Appendix A: PHP Output

```
php index.php
string(5) "Hello"
string(5) "hello"
string(5) "Hello"
string(5) "Hello"
string(6) "Cheers"
string(6) "cheers"
string(6) "Cheers"
string(6) "Cheers"
```
