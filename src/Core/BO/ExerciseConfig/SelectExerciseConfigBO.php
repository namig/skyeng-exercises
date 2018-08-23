<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 14:14
 */

namespace App\Core\BO\ExerciseConfig;


class SelectExerciseConfigBO extends AExerciseConfigBO
{
	/**
	 * @var array
	 */
	private $options;

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