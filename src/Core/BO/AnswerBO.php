<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 10:33
 */

namespace App\Core\BO;


class AnswerBO extends ABo
{
	/**
	 * @var string
	 */
	private $value;

	function __construct(string $value)
	{
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string
	{
		return $this->value;
	}

	/**
	 * @param string $value
	 */
	public function setValue(?string $value)
	{
		$this->value = $value;
	}
	
}