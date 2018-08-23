<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 10:32
 */

namespace App\Core\BO\Exercise;


use App\Core\BO\AnswerBO;

class InputExerciseBO extends AExerciseBO
{
	function checkAnswer(AnswerBO $userAnswer): bool
	{
		return $userAnswer->getValue() == $this->rightAnswer;
	}
}