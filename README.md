# Issue phpstan/phpstan #6662

Minimal repro for [#6662](https://github.com/phpstan/phpstan/issues/6662).

When a constant behind a require/include is non-scalar, it can not be found.

Listing the file in the phpstan config under bootstrapFiles resolves the issue, however, as per phpstan v1.7.0 this should not be necessary.

All testing performed with the `ghcr.io/phpstan/phpstan:1.8.10-php8.0` Docker image.

# Example A

Non-scaler constants are not found when behind a require/include statement.

```
docker run --rm -v $PWD:/app ghcr.io/phpstan/phpstan:1.8.10-php8.0 analyze --level 1 .
  2/2 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%

 ------ ---------------------------------------------------------------------
  Line   index.php
 ------ ---------------------------------------------------------------------
  17     Constant GREET_REQUIRE_VAR not found.
         💡 Learn more at https://phpstan.org/user-guide/discovering-symbols
  18     Constant GREET_REQUIRE_FUNCTION not found.
         💡 Learn more at https://phpstan.org/user-guide/discovering-symbols
 ------ ---------------------------------------------------------------------


 [ERROR] Found 2 errors
```

# Example B

Using a configuration with `bootstrapFiles` listing the file containing the non-scaler constants allows these constants to be found.

```
docker run --rm -v $PWD:/app ghcr.io/phpstan/phpstan:1.8.10-php8.0 analyze --level 1 -c fix-constants.neon .
 2/2 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%


 [OK] No errors
```

# Appendix A: PHP Output

```
php index.php
string(5) "Hello"
bool(true)
string(5) "Hello"
int(123)
float(1.23)
NULL
string(5) "Hello"
string(5) "Hello"
array(1) {
  [0]=>
  string(5) "Hello"
}
string(13) "RequiredClass"
string(6) "Cheers"
bool(false)
string(6) "Cheers"
int(456)
float(4.56)
NULL
string(6) "Cheers"
string(6) "Cheers"
array(1) {
  [0]=>
  string(6) "Cheers"
}
string(11) "InlineClass"
```
