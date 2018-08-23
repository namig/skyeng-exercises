<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 10:29
 */

namespace App\Core\BO;


use App\Core\Business\ScoringStrategy\ScoringStrategyInterface;
use App\Core\Persistence\ExercisePersistence\PassedExercisePersistenceInterface;

class ExerciseTypeBO extends ABo
{
	/**
	 * @var string
	 */
	private $code;
	
	/**
	 * @var ScoringStrategyInterface
	 */
	private $scoringStrategy;

	/**
	 * @var PassedExercisePersistenceInterface
	 */
	private $passedExercisePersistence;

	function __construct(string $code, ScoringStrategyInterface $scoringStrategy)
	{
		$this->code = $code;
		$this->scoringStrategy = $scoringStrategy;
	}

	/**
	 * @return string
	 */
	public function getCode(): ?string
	{
		return $this->code;
	}

	/**
	 * @param string $code
	 */
	public function setCode(?string $code)
	{
		$this->code = $code;
	}

	/**
	 * @return ScoringStrategyInterface
	 */
	public function getScoringStrategy(): ?ScoringStrategyInterface
	{
		return $this->scoringStrategy;
	}

	/**
	 * @param ScoringStrategyInterface $scoringStrategy
	 */
	public function setScoringStrategy(?ScoringStrategyInterface $scoringStrategy)
	{
		$this->scoringStrategy = $scoringStrategy;
	}
}