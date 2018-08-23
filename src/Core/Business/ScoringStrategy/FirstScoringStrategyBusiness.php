<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 10:43
 */

namespace App\Core\Business\ScoringStrategy;


use App\Core\BO\PassedExerciseBO;

/**
 * TASK: 10 баллов, если последний ответ верный. 0 баллов, если неверный.
 */
class FirstScoringStrategyBusiness implements ScoringStrategyInterface
{
	public function calculateScore(PassedExerciseBO $passedExercise): int
	{
		$lastAnswer = $passedExercise->getLastAnswer();
		$exercise = $passedExercise->getExercise();

		return $exercise->checkAnswer($lastAnswer) ? 10 : 0;
	}

}