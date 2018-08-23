<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 16:18
 */

namespace App\Core\Business\ExercisePersistenceBusiness;


use App\Core\BO\PassedExerciseBO;
use App\Core\Persistence\ExercisePersistence\MySqlPassedExercisePersistence;
use App\Core\Po2Bo\PassedExercisePo2Bo;

class MySqlPassedExercisePersistenceBusiness extends APassedExercisePersistenceBusiness
{
	/**
	 * @var MySqlPassedExercisePersistence
	 */
	private $persistence;

	function __construct(PassedExercisePo2Bo $converter, MySqlPassedExercisePersistence $persistence)
	{
		parent::__construct($converter);
		$this->persistence = $persistence;
	}

	public function save(PassedExerciseBO $passedExercise)
	{
		// logic
		$po = $this->converter->convertToPo($passedExercise);
		$this->persistence->save($po);
	}

}