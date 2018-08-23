<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 13:56
 */

namespace App\Core\Business\ExerciseCreator;


use App\Common\Exception\Business\ExerciseCreatorConfigArgumentException;
use App\Core\BO\Exercise\AExerciseBO;
use App\Core\BO\Exercise\InputExerciseBO;
use App\Core\BO\ExerciseConfig\AExerciseConfigBO;
use App\Core\BO\ExerciseConfig\InputExerciseConfigBO;

class InputExerciseCreatorBusiness extends AExerciseCreatorBusiness
{
	function createExercise(AExerciseConfigBO $config) : AExerciseBO
	{
		$exercise = new InputExerciseBO();
		if (!$config instanceof InputExerciseConfigBO) {
			throw new ExerciseCreatorConfigArgumentException("Passed config is not InputExerciseConfig");
		}
		$this->fillExerciseBaseFields($exercise, $config);

		return $exercise;
	}
}