<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 15:57
 */

namespace App\Core\Persistence\ExercisePersistence;


use App\Core\PO\PassedExercisePO;

interface PassedExercisePersistenceInterface
{
	public function save(PassedExercisePO $passedExercisePO);
}