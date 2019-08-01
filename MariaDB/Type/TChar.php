<?php namespace DBTypeLength\MariaDB\Type;

use DBTypeLength\Extend\EChar;

/**
 * Class TChar
 *
 * @package DBTypeLength\MariaDB\Type
 *
 * @property int $max
 */
class TChar extends EChar
{
	/**
	 * @var int $max
	 */
	protected $max = 255;
}
