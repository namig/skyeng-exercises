<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 16:18
 */

namespace App\Core\Business\ExercisePersistenceBusiness;


use App\Core\BO\PassedExerciseBO;
use App\Core\Persistence\ExercisePersistence\RedisPassedExercisePersistence;
use App\Core\Po2Bo\PassedExercisePo2Bo;

class RedisPassedExercisePersistenceBusiness extends APassedExercisePersistenceBusiness
{
	/**
	 * @var RedisPassedExercisePersistence
	 */
	private $persistence;

	function __construct(PassedExercisePo2Bo $converter, RedisPassedExercisePersistence $persistence)
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