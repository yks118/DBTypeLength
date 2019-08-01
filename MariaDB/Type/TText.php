<?php namespace DBTypeLength\MariaDB\Type;

use DBTypeLength\Extend\EText;

/**
 * Class TText
 *
 * @package DBTypeLength\MariaDB\Type
 *
 * @property int $byte
 * @property int $max
 */
class TText extends EText
{
	/**
	 * @var int $byte
	 */
	protected $byte = 65535;
}
