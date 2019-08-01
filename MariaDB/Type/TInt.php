<?php namespace DBTypeLength\MariaDB\Type;

use DBTypeLength\Extend\EInt;

/**
 * Class TInt
 *
 * @package DBTypeLength\MariaDB\Type
 *
 * @property int $min
 * @property int $max
 * @property TInt $unsigned
 */
class TInt extends EInt
{
	/**
	 * @var int $min
	 */
	protected $min = -2147483648;

	/**
	 * @var int $max
	 */
	protected $max = 2147483647;
}
