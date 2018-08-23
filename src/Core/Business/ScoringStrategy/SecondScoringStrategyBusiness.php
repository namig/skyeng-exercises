<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 10:44
 */

namespace App\Core\Business\ScoringStrategy;


use App\Core\BO\PassedExerciseBO;

class SecondScoringStrategyBusiness implements ScoringStrategyInterface
{
	public function calculateScore(PassedExerciseBO $passedExercise): int
	{
		// fake
		return 10;
	}

}