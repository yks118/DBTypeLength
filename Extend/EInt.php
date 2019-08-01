<?php namespace DBTypeLength\Extend;

/**
 * Class EInt
 *
 * @package DBTypeLength\Extend
 */
class EInt
{
	/**
	 * @var int $min
	 */
	protected $min = 0;

	/**
	 * @var int $max
	 */
	protected $max = 0;

	/**
	 * @var bool $unsigned
	 */
	private $unsigned = false;

	public function __get($name)
	{
		if ($name === 'unsigned')
		{
			$this->unsigned = true;
			return $this;
		}
		else
		{
			if (property_exists($this, $name))
			{
				if ($this->unsigned)
				{
					$this->unsigned = false;

					if ($name === 'min') return 0;
					else return ($this->min * -1) + $this->max;
				}
			}

		}

		return $this->{$name};
	}

	public function check(int $int): bool
	{
		if ($this->unsigned)
		{
			return (0 <= $int && $int <= ($this->min * -1) + $this->max);
		}
		else
		{
			return ($this->min <= $int && $int <= $this->max);
		}
	}
}
