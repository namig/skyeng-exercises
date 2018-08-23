<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 13:55
 */

namespace App\Core\Business\ExerciseCreator;


use App\Core\BO\Exercise\AExerciseBO;
use App\Core\BO\ExerciseConfig\AExerciseConfigBO;
use App\Core\BO\ExerciseTypeBO;

abstract class AExerciseCreatorBusiness
{
	/**
	 * @var ExerciseTypeBO
	 */
	private $exerciseType;

	function __construct(ExerciseTypeBO $exerciseType)
	{
		$this->exerciseType = $exerciseType;
	}

	abstract function createExercise(AExerciseConfigBO $exerciseConfig) : AExerciseBO;

	function fillExerciseBaseFields(AExerciseBO $exercise, AExerciseConfigBO $config)
	{
		$exercise->setQuestion($config->getQuestion());
		$exercise->setRightAnswer($config->getRightAnswer());
		$exercise->setExerciseType($this->getExerciseType());
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
}