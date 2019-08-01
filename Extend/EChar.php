<?php namespace DBTypeLength\Extend;

/**
 * Class EChar
 *
 * @package DBTypeLength\Extend
 */
class EChar
{
	/**
	 * @var int $max
	 */
	protected $max = 0;

	public function __get($name)
	{
		return $this->{$name};
	}

	public function check(string $char): bool
	{
		return (mb_strlen($char) <= $this->max);
	}
}
