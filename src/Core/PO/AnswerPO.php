<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 12:34
 */

namespace App\Core\PO;


use App\Core\BO\PassedExerciseBO;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="answer")
 */
class AnswerPO extends BasePO
{
	/**
	 * @ORM\Column(type="string")
	 * @var string
	 */
	private $value;

	/**
	 * @ORM\ManyToOne(targetEntity="App\Core\PO\PassedExercisePO")
	 * @var PassedExercisePO
	 */
	private $passedExercise;

	/**
	 * @return string
	 */
	public function getValue(): ?string
	{
		return $this->value;
	}

	/**
	 * @param string $value
	 */
	public function setValue(?string $value)
	{
		$this->value = $value;
	}
}