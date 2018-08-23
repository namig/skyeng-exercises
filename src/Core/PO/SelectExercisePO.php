<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 12:30
 */

namespace App\Core\PO;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table("select_exercise")
 */
class SelectExercisePO extends AExercisePO
{
	/**
	 * @ORM\Column(type="array")
	 * @var array
	 */
	private $options;

	/**
	 * @return array
	 */
	public function getOptions(): ?array
	{
		return $this->options;
	}

	/**
	 * @param array $options
	 */
	public function setOptions(?array $options)
	{
		$this->options = $options;
	}
}