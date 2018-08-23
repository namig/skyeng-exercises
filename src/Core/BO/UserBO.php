<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 12:43
 */

namespace App\Core\BO;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Class User
 * @package App\Core\BO
 */
class UserBO extends ABo
{
	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var Collection | PassedExerciseBO[]
	 */
	private $passedExercises;

	function __construct()
	{
		$this->passedExercises = new ArrayCollection();
	}

	/**
	 * @return string
	 */
	public function getName(): ?string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName(?string $name)
	{
		$this->name = $name;
	}

	/**
	 * @return PassedExerciseBO[]|Collection
	 */
	public function getPassedExercises()
	{
		return $this->passedExercises;
	}

	/**
	 * @param PassedExerciseBO[]|Collection $passedExercises
	 */
	public function setPassedExercises($passedExercises)
	{
		$this->passedExercises = $passedExercises;
	}

	public function addPassedExercise(PassedExerciseBO $passedExercise)
	{
		$this->passedExercises->add($passedExercise);
	}
}