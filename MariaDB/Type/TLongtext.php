<?php namespace DBTypeLength\MariaDB\Type;

use DBTypeLength\Extend\EText;

/**
 * Class TLongtext
 *
 * @package DBTypeLength\MariaDB\Type
 *
 * @property int $byte
 * @property int $max
 */
class TLongtext extends EText
{
	/**
	 * @var int $byte
	 */
	protected $byte = 4294967295;
}
