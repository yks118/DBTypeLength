<?php namespace DBTypeLength\MariaDB;

use DBTypeLength\MariaDB\Type\TBigint;
use DBTypeLength\MariaDB\Type\TChar;
use DBTypeLength\MariaDB\Type\TInt;
use DBTypeLength\MariaDB\Type\TLongtext;
use DBTypeLength\MariaDB\Type\TMediumint;
use DBTypeLength\MariaDB\Type\TMediumtext;
use DBTypeLength\MariaDB\Type\TSmallint;
use DBTypeLength\MariaDB\Type\TText;
use DBTypeLength\MariaDB\Type\TTinyint;
use DBTypeLength\MariaDB\Type\TTinytext;
use DBTypeLength\MariaDB\Type\TVarchar;

/**
 * Class MariaDB
 *
 * @package DBTypeLength\MariaDB
 *
 * @property TTinyint $tinyint
 * @property TSmallint $smallint
 * @property TMediumint $mediumint
 * @property TInt $int
 * @property TBigint $bigint
 *
 * @property TChar $char
 * @property TVarchar $varchar
 * @property TTinytext $tinytext
 * @property TText $text
 * @property TMediumtext $mediumtext
 * @property TLongtext $longtext
 */
class MariaDB
{
	/**
	 * @var TTinyint $tinyint
	 */
	protected $tinyint;

	/**
	 * @var TSmallint $smallint
	 */
	protected $smallint;

	/**
	 * @var TMediumint $mediumint
	 */
	protected $mediumint;

	/**
	 * @var TInt $int
	 */
	protected $int;

	/**
	 * @var TBigint $bigint
	 */
	protected $bigint;

	/**
	 * @var TChar $char
	 */
	protected $char;

	/**
	 * @var TVarchar $varchar
	 */
	protected $varchar;

	/**
	 * @var TTinytext $tinytext
	 */
	protected $tinytext;

	/**
	 * @var TText $text
	 */
	protected $text;

	/**
	 * @var TMediumtext $mediumtext
	 */
	protected $mediumtext;

	/**
	 * @var TLongtext $longtext
	 */
	protected $longtext;

	/**
	 * @var string $charset
	 */
	public $charset = 'utf8mb4';

	public function __get($name)
	{
		if (property_exists($this, $name) && !isset($this->{$name}))
		{
			$class = '\\DBTypeLength\\MariaDB\\Type\\T' . ucfirst($name);
			$this->{$name} = new $class($this->charset);
		}

		return $this->{$name};
	}
}
