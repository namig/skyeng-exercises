<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 15:24
 */

namespace App\Common\Exception\Business;


use App\Common\Type\Enums\BusinessExceptionEnum;
use Throwable;

class ExerciseCreatorConfigArgumentException extends ABusinessRuntimeException
{
	public function __construct($message = "", Throwable $previous = null)
	{
		$code = BusinessExceptionEnum::EXERCISE_CREATOR_CONFIG_ARGUMENT;
		parent::__construct($message, $code, $previous);
	}
}