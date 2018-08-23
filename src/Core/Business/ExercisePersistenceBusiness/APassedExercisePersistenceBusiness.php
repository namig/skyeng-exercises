<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 16:17
 */

namespace App\Core\Business\ExercisePersistenceBusiness;


use App\Core\BO\PassedExerciseBO;
use App\Core\Po2Bo\PassedExercisePo2Bo;

abstract class APassedExercisePersistenceBusiness
{
	/**
	 * @var PassedExercisePo2Bo
	 */
	protected $converter;

	function __construct(PassedExercisePo2Bo $converter)
	{
		$this->converter = $converter;
	}

	abstract public function save(PassedExerciseBO $passedExercise);
}