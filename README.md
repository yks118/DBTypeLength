# DBTypeLength
Check DB Type Length In PHP 7.1+

## How To Use
```php
<?php
require_once '{YOUR PATH}/DBTypeLength/autoload.php';
$DBTypeLength = new \DBTypeLength\DBTypeLength();

// set your DB driver.
$mariadb = $DBTypeLength->MariaDB;

// set your DB charset. (default utf8mb4)
$mariadb->charset = 'utf8mb4';
```

### Use Method tinyint, smallint, mediumint, int, bigint

#### Use HTML

##### signed
```html
<input type="number" maxlength="<?php echo $mariadb->tinyint->max; ?>">
```

##### unsigned
```html
<input type="number" maxlength="<?php echo $mariadb->tinyint->unsigned->max; ?>">
```

#### Use PHP

##### signed
```php
<?php
/**
 * @var \DBTypeLength\MariaDB\MariaDB $mariadb
 */
if ($mariadb->tinyint->check(1)) echo 'true';
else echo 'false';
```

##### unsigned
```php
<?php
/**
 * @var \DBTypeLength\MariaDB\MariaDB $mariadb
 */
if ($mariadb->tinyint->unsigned->check(1)) echo 'true';
else echo 'false';
```

### Use Method tinytext, text, mediumtext, longtext

#### Use HTML
 * utf8 : 85
 * utf8mb4 : 63
```html
<input type="text" maxlength="<?php echo $mariadb->tinytext->max; ?>">
```

#### Use PHP
```php
<?php
/**
 * @var \DBTypeLength\MariaDB\MariaDB $mariadb
 */
if ($mariadb->tinytext->check('a')) echo 'true';
else echo 'false';
```