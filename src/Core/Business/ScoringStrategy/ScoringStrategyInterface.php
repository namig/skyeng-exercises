<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 10:42
 */

namespace App\Core\Business\ScoringStrategy;


use App\Core\BO\PassedExerciseBO;

interface ScoringStrategyInterface
{
	public function calculateScore(PassedExerciseBO $passedExercise) : int;
}