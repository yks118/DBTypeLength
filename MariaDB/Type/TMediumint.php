<?php namespace DBTypeLength\MariaDB\Type;

use DBTypeLength\Extend\EInt;

/**
 * Class TMediumint
 *
 * @package DBTypeLength\MariaDB\Type
 *
 * @property int $min
 * @property int $max
 * @property TMediumint $unsigned
 */
class TMediumint extends EInt
{
	/**
	 * @var int $min
	 */
	protected $min = -8388608;

	/**
	 * @var int $max
	 */
	protected $max = 8388607;
}
