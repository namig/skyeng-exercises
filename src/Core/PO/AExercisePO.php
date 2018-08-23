<?php

namespace App\Core\PO;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"input"="App\Core\PO\InputExercisePO",
 *     "select"="App\Core\PO\SelectExercisePO"})
 * @ORM\Table(name="exercise")
 */
abstract class AExercisePO extends BasePO
{
	/**
	 * @ORM\Column(type="string")
	 * @var string
	 */
	protected $question;

	/**
	 * @ORM\Column(type="string")
	 * @var string
	 */
	protected $rightAnswer;

	/**
	 * @ORM\ManyToOne(targetEntity="App\Core\PO\ExerciseTypePO")
	 * @var ExerciseTypePO
	 */
	protected $exerciseType;

	/**
	 * @return string
	 */
	public function getQuestion(): ?string
	{
		return $this->question;
	}

	/**
	 * @param string $question
	 */
	public function setQuestion(?string $question)
	{
		$this->question = $question;
	}

	/**
	 * @return string
	 */
	public function getRightAnswer(): ?string
	{
		return $this->rightAnswer;
	}

	/**
	 * @param string $rightAnswer
	 */
	public function setRightAnswer(?string $rightAnswer)
	{
		$this->rightAnswer = $rightAnswer;
	}

	/**
	 * @return ExerciseTypePO
	 */
	public function getExerciseType(): ?ExerciseTypePO
	{
		return $this->exerciseType;
	}

	/**
	 * @param ExerciseTypePO $exerciseType
	 */
	public function setExerciseType(?ExerciseTypePO $exerciseType)
	{
		$this->exerciseType = $exerciseType;
	}
}