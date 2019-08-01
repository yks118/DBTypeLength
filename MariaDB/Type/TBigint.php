<?php namespace DBTypeLength\MariaDB\Type;

use DBTypeLength\Extend\EInt;

/**
 * Class TBigint
 *
 * @package DBTypeLength\MariaDB\Type
 *
 * @property int $min
 * @property int $max
 * @property TBigint $unsigned
 */
class TBigint extends EInt
{
	/**
	 * @var int $min
	 */
	protected $min = -9223372036854775808;

	/**
	 * @var int $max
	 */
	protected $max = 9223372036854775807;
}
