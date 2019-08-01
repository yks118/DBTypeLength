<?php namespace DBTypeLength\MariaDB\Type;

use DBTypeLength\Extend\EChar;

/**
 * Class TVarchar
 *
 * @package DBTypeLength\MariaDB\Type
 *
 * @property int $max
 */
class TVarchar extends EChar
{
	/**
	 * @var int $max
	 */
	protected $max = 255;
}
