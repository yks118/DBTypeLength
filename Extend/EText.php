<?php namespace DBTypeLength\Extend;

/**
 * Class EText
 *
 * @package DBTypeLength\Extend
 */
class EText
{
	/**
	 * @var int $byte
	 */
	protected $byte = 0;

	/**
	 * @var int $charsetByte
	 */
	private $charsetByte = 4;

	public function __construct(string $charset = 'utf8mb4')
	{
		switch ($charset)
		{
			case 'utf8' :
				$this->charsetByte = 3;
				break;
			default :
				$this->charsetByte = 4;
				break;
		}
	}

	public function __get($name)
	{
		if (!property_exists($this, $name))
		{
			if ($name === 'max')
			{
				return intval(floor($this->byte / $this->charsetByte));
			}
		}

		return $this->{$name};
	}

	public function check(string $text): bool
	{
		$length = mb_strlen($text);
		return $length <= floor($this->byte / $this->charsetByte);
	}
}
