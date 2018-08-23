<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 14:13
 */

namespace App\Core\BO\ExerciseConfig;


use App\Core\BO\ExerciseTypeBO;

abstract class AExerciseConfigBO
{
	/**
	 * @var string
	 */
	private $question;

	/**
	 * @var string
	 */
	private $rightAnswer;

	/**
	 * @return string
	 */
	public function getQuestion(): ?string
	{
		return $this->question;
	}

	/**
	 * @param string $question
	 */
	public function setQuestion(?string $question)
	{
		$this->question = $question;
	}

	/**
	 * @return string
	 */
	public function getRightAnswer(): ?string
	{
		return $this->rightAnswer;
	}

	/**
	 * @param string $rightAnswer
	 */
	public function setRightAnswer(?string $rightAnswer)
	{
		$this->rightAnswer = $rightAnswer;
	}
}