<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 10:28
 */

namespace App\Core\BO\Exercise;

use App\Core\BO\ABo;
use App\Core\BO\AnswerBO;
use App\Core\BO\ExerciseTypeBO;
use App\Core\Business\ScoringStrategy\ScoringStrategyInterface;

abstract class AExerciseBO extends ABo
{
	/**
	 * @var string
	 */
	protected $question;

	/**
	 * @var ExerciseTypeBO
	 */
	protected $exerciseType;

	/**
	 * @var string
	 */
	protected $rightAnswer;

	abstract function checkAnswer(AnswerBO $userAnswer) : bool;

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
	 * @return ExerciseTypeBO
	 */
	public function getExerciseType(): ?ExerciseTypeBO
	{
		return $this->exerciseType;
	}

	/**
	 * @param ExerciseTypeBO $exerciseType
	 */
	public function setExerciseType(?ExerciseTypeBO $exerciseType)
	{
		$this->exerciseType = $exerciseType;
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

	/**
	 * @return ScoringStrategyInterface
	 */
	public function getScoringStrategy() : ScoringStrategyInterface
	{
		return $this->getExerciseType()->getScoringStrategy();
	}
}