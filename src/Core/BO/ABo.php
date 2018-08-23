<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 10:48
 */

namespace App\Core\BO;


abstract class ABo
{
	/**
	 * @var int
	 */
	private $id;

	/**
	 * @return int
	 */
	public function getId(): ?int
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId(?int $id)
	{
		$this->id = $id;
	}


}