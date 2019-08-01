<?php namespace DBTypeLength\MariaDB\Type;

use DBTypeLength\Extend\EText;

/**
 * Class TTinytext
 *
 * @package DBTypeLength\MariaDB\Type
 *
 * @property int $byte
 * @property int $max
 */
class TTinytext extends EText
{
	/**
	 * @var int $byte
	 */
	protected $byte = 255;
}
