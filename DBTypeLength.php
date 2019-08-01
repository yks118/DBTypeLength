<?php namespace DBTypeLength;

use \DBTypeLength\MariaDB\MariaDB;

/**
 * Class DBTypeLength
 *
 * @package DBTypeLength
 *
 * @property MariaDB $MariaDB
 */
class DBTypeLength
{
	/**
	 * @var MariaDB $MariaDB
	 */
	protected $MariaDB;

	public function __get($name)
	{
		if (property_exists($this, $name) && !isset($this->{$name}))
		{
			$class = '\\DBTypeLength\\' . $name . '\\' . $name;
			$this->{$name} = new $class();
		}

		return $this->{$name};
	}
}
