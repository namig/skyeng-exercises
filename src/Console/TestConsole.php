<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 13:16
 */

namespace App\Console;


use App\Common\Type\Enums\ExerciseTypeEnum;
use App\Core\BO\AnswerBO;
use App\Core\BO\ExerciseConfig\InputExerciseConfigBO;
use App\Core\BO\ExerciseConfig\SelectExerciseConfigBO;
use App\Core\BO\ExerciseTypeBO;
use App\Core\BO\PassedExerciseBO;
use App\Core\Business\ExerciseCreator\InputExerciseCreatorBusiness;
use App\Core\Business\ExerciseCreator\SelectExerciseCreatorBusiness;
use App\Core\Business\ScoringStrategy\FirstScoringStrategyBusiness;
use App\Core\Business\ScoringStrategy\SecondScoringStrategyBusiness;

class TestConsole
{
	public function test()
	{
		$score = 0;
		$score += $this->createExercise1PassAndCalculateScore();
		$score += $this->createExercise2PassAndCalculateScore();

		echo sprintf('Количество очков: %d', $score);
	}

	private function createExercise1PassAndCalculateScore(): int
	{
		$exercise = $this->createInputExercise('Какой сейчас год?', '2018');

		$answer1 = new AnswerBO('2017');
		$answer2 = new AnswerBO('2018');

		$passedExercise = new PassedExerciseBO();
		$passedExercise->addAnswer($answer1);
		$passedExercise->addAnswer($answer2);

		$scoringStrategy = $exercise->getScoringStrategy();

		return $scoringStrategy->calculateScore($passedExercise);
	}

	private function createExercise2PassAndCalculateScore(): int
	{
		$exercise = $this->createSelectExercise('IT столица России?', 'Все', [
			'Москва',
			'Санкт-Петербург',
			'Саратов :)',
			'Все'
		]);

		$answer1 = new AnswerBO('Все');

		$passedExercise = new PassedExerciseBO();
		$passedExercise->addAnswer($answer1);

		$scoringStrategy = $exercise->getScoringStrategy();

		return $scoringStrategy->calculateScore($passedExercise);
	}


	private function createInputExercise(string $question, string $rightAnswer)
	{
		$scoringStrategy = new FirstScoringStrategyBusiness();
		$exerciseType = new ExerciseTypeBO(ExerciseTypeEnum::INPUT, $scoringStrategy);
		$creator = new InputExerciseCreatorBusiness($exerciseType);

		$config = new InputExerciseConfigBO();
		$config->setQuestion($question);
		$config->setRightAnswer($rightAnswer);

		return $creator->createExercise($config);
	}


	private function createSelectExercise(string $question, string $rightAnswer, array $options)
	{
		$scoringStrategy = new SecondScoringStrategyBusiness();
		$exerciseType = new ExerciseTypeBO(ExerciseTypeEnum::SELECT, $scoringStrategy);
		$creator = new SelectExerciseCreatorBusiness($exerciseType);

		$config = new SelectExerciseConfigBO();
		$config->setQuestion($question);
		$config->setRightAnswer($rightAnswer);
		$config->setOptions($options);

		return $creator->createExercise($config);
	}


}