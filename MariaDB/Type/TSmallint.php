<?php namespace DBTypeLength\MariaDB\Type;

use DBTypeLength\Extend\EInt;

/**
 * Class TSmallint
 *
 * @package DBTypeLength\MariaDB\Type
 *
 * @property int $min
 * @property int $max
 * @property TSmallint $unsigned
 */
class TSmallint extends EInt
{
	/**
	 * @var int $min
	 */
	protected $min = -32768;

	/**
	 * @var int $max
	 */
	protected $max = 32767;
}
