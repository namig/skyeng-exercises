<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 11:05
 */

namespace App\Core\PO;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="scoring_strategy_type")
 */
class ScoringStrategyTypePO extends BasePO
{
	/**
	 * @var string
	 */
	private $code;

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
}