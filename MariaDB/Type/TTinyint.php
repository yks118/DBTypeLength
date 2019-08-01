<?php namespace DBTypeLength\MariaDB\Type;

use DBTypeLength\Extend\EInt;

/**
 * Class TTinyint
 *
 * @package DBTypeLength\MariaDB\Type
 *
 * @property int $min
 * @property int $max
 * @property TTinyint $unsigned
 */
class TTinyint extends EInt
{
	/**
	 * @var int $min
	 */
	protected $min = -128;

	/**
	 * @var int $max
	 */
	protected $max = 127;
}
