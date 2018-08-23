<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 10:44
 */

namespace App\Core\Business\ScoringStrategy;


use App\Core\BO\PassedExerciseBO;

/**
 * TASK: 10 баллов, если последний ответ верный и это была единственная попытка.
 * 5 баллов, если последний ответ верный, но это не первая попытка. 0 баллов, если последний ответ неверный.
 */
class SecondScoringStrategyBusiness implements ScoringStrategyInterface
{
	public function calculateScore(PassedExerciseBO $passedExercise): int
	{
		$lastAnswer = $passedExercise->getLastAnswer();
		$exercise = $passedExercise->getExercise();
		$isRightLastAnswer = $exercise->checkAnswer($lastAnswer);
		$answersCount = $passedExercise->getAnswers()->count();

		if ($isRightLastAnswer) {
			if ($answersCount == 1) {
				return 10;
			}
			return 5;
		}

		return 0;
	}

}