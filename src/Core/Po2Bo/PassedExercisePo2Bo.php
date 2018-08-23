<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 16:21
 */

namespace App\Core\Po2Bo;


use App\Core\BO\PassedExerciseBO;
use App\Core\PO\PassedExercisePO;

class PassedExercisePo2Bo
{

	public function convertToPo(PassedExerciseBO $bo)
	{
		$po = new PassedExercisePO();
		// $po->setUser(userConverter->convertToPo($bo->getUser()));
		// $po->setAnswers(answerConverter->convertToPO($bo->getAnswers()));
		return $po;
	}

}