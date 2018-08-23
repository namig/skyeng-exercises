<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 12:48
 */

namespace App\Core\PO;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="passed_exercise")
 */
class PassedExercisePO extends BasePO
{
	/**
	 * @ORM\ManyToOne(targetEntity="App\Core\PO\AExercisePO")
	 * @var AExercisePO
	 */
	private $exercise;

	/**
	 * @ORM\OneToMany(targetEntity="App\Core\PO\AnswerPO", mappedBy="passedExercise")
	 * @var Collection | AnswerPO[]
	 */
	private $answers;

	/**
	 * @ORM\OneToOne(targetEntity="App\Core\PO\AnswerPO")
	 * @var AnswerPO
	 */
	private $lastAnswer;

	/**
	 * @ORM\ManyToOne(targetEntity="App\Core\PO\User", inversedBy="passedExercises")
	 * @var User
	 */
	private $user;

	/**
	 * @return mixed
	 */
	public function getExercise()
	{
		return $this->exercise;
	}

	/**
	 * @param mixed $exercise
	 */
	public function setExercise($exercise)
	{
		$this->exercise = $exercise;
	}

	/**
	 * @return AnswerPO[]|Collection
	 */
	public function getAnswers()
	{
		return $this->answers;
	}

	/**
	 * @param AnswerPO[]|Collection $answers
	 */
	public function setAnswers($answers)
	{
		$this->answers = $answers;
	}

	/**
	 * @return AnswerPO
	 */
	public function getLastAnswer(): ?AnswerPO
	{
		return $this->lastAnswer;
	}

	/**
	 * @param AnswerPO $lastAnswer
	 */
	public function setLastAnswer(?AnswerPO $lastAnswer)
	{
		$this->lastAnswer = $lastAnswer;
	}

	/**
	 * @return User
	 */
	public function getUser(): ?User
	{
		return $this->user;
	}

	/**
	 * @param User $user
	 */
	public function setUser(?User $user)
	{
		$this->user = $user;
	}
}