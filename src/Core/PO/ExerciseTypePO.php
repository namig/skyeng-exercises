<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 11:18
 */

namespace App\Core\PO;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="exercise_type")
 */
class ExerciseTypePO extends BasePO
{
	/**
	 * @ORM\Column(type="string")
	 * @var string
	 */
	private $code;

	/**
	 * @var ScoringStrategyTypePO
	 * @ORM\ManyToOne(targetEntity="App\Core\PO\ScoringStrategyTypePO")
	 */
	private $scoringStrategyType;

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
	 * @return ScoringStrategyTypePO
	 */
	public function getScoringStrategyType(): ?ScoringStrategyTypePO
	{
		return $this->scoringStrategyType;
	}

	/**
	 * @param ScoringStrategyTypePO $scoringStrategyType
	 */
	public function setScoringStrategyType(?ScoringStrategyTypePO $scoringStrategyType)
	{
		$this->scoringStrategyType = $scoringStrategyType;
	}
}