<?php namespace DBTypeLength\MariaDB\Type;

use DBTypeLength\Extend\EText;

/**
 * Class TMediumtext
 *
 * @package DBTypeLength\MariaDB\Type
 *
 * @property int $byte
 * @property int $max
 */
class TMediumtext extends EText
{
	/**
	 * @var int $byte
	 */
	protected $byte = 16777215;
}
