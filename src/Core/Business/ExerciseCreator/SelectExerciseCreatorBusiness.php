<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 15:13
 */

namespace App\Core\Business\ExerciseCreator;


use App\Common\Exception\Business\ExerciseCreatorConfigArgumentException;
use App\Core\BO\Exercise\AExerciseBO;
use App\Core\BO\Exercise\SelectExerciseBO;
use App\Core\BO\ExerciseConfig\AExerciseConfigBO;
use App\Core\BO\ExerciseConfig\SelectExerciseConfigBO;

class SelectExerciseCreatorBusiness extends AExerciseCreatorBusiness
{
	function createExercise(AExerciseConfigBO $config): AExerciseBO
	{
		$exercise = new SelectExerciseBO();
		if ($config instanceof SelectExerciseConfigBO)
		{
			$exercise->setOptions($config->getOptions());
		}
		else {
			throw new ExerciseCreatorConfigArgumentException("Passed config is not SelectExerciseConfig");
		}
		$this->fillExerciseBaseFields($exercise, $config);

		return $exercise;
	}

}