<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 10:43
 */

namespace App\Core\Business\ScoringStrategy;


use App\Core\BO\PassedExerciseBO;

class FirstScoringStrategyBusiness implements ScoringStrategyInterface
{
	public function calculateScore(PassedExerciseBO $passedExercise): int
	{
		// fake
		return 5;
	}

}