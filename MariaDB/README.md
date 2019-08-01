# DBTypeLength MariaDB

## Use Method DB Type

### tinyint
 * min : -128
 * max : 127
 * support property : unsigned
 * support function : check(int $int): bool

### smallint
 * min : -32768
 * max : 32767
 * support property : unsigned
 * support function : check(int $int): bool

### mediumint
 * min : -8388608
 * max : 8388607
 * support property : unsigned
 * support function : check(int $int): bool

### int
 * min : -2147483648
 * max : 2147483647
 * support property : unsigned
 * support function : check(int $int): bool

### bigint
 * min : -9223372036854775808
 * max : 9223372036854775807
 * support property : unsigned
 * support function : check(int $int): bool

### char
 * max : 255
 * support function : check(string $char): bool

### varchar
 * max : 255
 * support function : check(string $char): bool

### tinytext
 * byte : 255
 * support property : max
 * support function : check(string $text): bool

### text
 * byte : 65535
 * support property : max
 * support function : check(string $text): bool

### mediumtext
 * byte : 16777215
 * support property : max
 * support function : check(string $text): bool

### longtext
 * byte : 4294967295
 * support property : max
 * support function : check(string $text): bool