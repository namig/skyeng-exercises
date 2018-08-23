<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 10:37
 */

namespace App\Core\BO\Exercise;


use App\Core\BO\AnswerBO;

class SelectExerciseBO extends AExerciseBO
{
	/**
	 * @var array
	 */
	private $options;

	function checkAnswer(AnswerBO $userAnswer): bool
	{
		foreach ($this->options as $value) {
			if ($value == $userAnswer->getValue()) {
				return true;
			}
		}
		return false;
	}

	/**
	 * @return array
	 */
	public function getOptions(): ?array
	{
		return $this->options;
	}

	/**
	 * @param array $options
	 */
	public function setOptions(?array $options)
	{
		$this->options = $options;
	}
}