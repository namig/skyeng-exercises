<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 12:35
 */

namespace App\Core\BO;


use App\Core\BO\Exercise\AExerciseBO;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class PassedExerciseBO extends ABo
{
	/**
	 * @var AExerciseBO
	 */
	private $exercise;

	/**
	 * @var Collection | AnswerBO[]
	 */
	private $answers;

	/**
	 * @var UserBO
	 */
	private $user;
	
	public function __construct()
	{
		$this->answers = new ArrayCollection();
	}

	/**
	 * @return AExerciseBO
	 */
	public function getExercise(): ?AExerciseBO
	{
		return $this->exercise;
	}

	/**
	 * @param AExerciseBO $exercise
	 */
	public function setExercise(?AExerciseBO $exercise)
	{
		$this->exercise = $exercise;
	}

	/**
	 * @return AnswerBO[]|Collection
	 */
	public function getAnswers()
	{
		return $this->answers;
	}

	/**
	 * @param AnswerBO[]|Collection $answers
	 */
	public function setAnswers($answers)
	{
		$this->answers = $answers;
	}

	/**
	 * @return AnswerBO
	 */
	public function getLastAnswer(): ?AnswerBO
	{
		return $this->answers->last();
	}

	/**
	 * @return UserBO
	 */
	public function getUser(): ?UserBO
	{
		return $this->user;
	}

	/**
	 * @param UserBO $user
	 */
	public function setUser(?UserBO $user)
	{
		$this->user = $user;
	}

	/**
	 * @param AnswerBO $answerBO
	 */
	public function addAnswer(AnswerBO $answerBO)
	{
		$this->answers->add($answerBO);
	}

	/**
	 * @return \App\Core\Business\ScoringStrategy\ScoringStrategyInterface|null
	 */
	public function getScoringStrategy()
	{
		return $this->getExercise()->getExerciseType()->getScoringStrategy();
	}
	
}