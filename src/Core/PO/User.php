<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 12:46
 */

namespace App\Core\PO;

use App\Core\BO\PassedExerciseBO;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package App\Core\PO
 * @ORM\Entity()
 * @ORM\Table(name="user")
 */
class User extends BasePO
{
	/**
	 * @ORM\Column(type="string")
	 * @var string
	 */
	private $name;

	/**
	 * @ORM\OneToMany(targetEntity="App\Core\PO\PassedExercisePO", mappedBy="user")
	 * @var Collection|PassedExerciseBO[]
	 */
	private $passedExercises;

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
}