<?php

namespace Validators_pack\Validators;

// use Src\Validator\AbstractValidator;
use Validators_pack\Src\AbstractValidator;

class NumberValidator extends AbstractValidator
{

   protected string $message = 'Field :data must be number!';

   public function rule(): bool
   {
       return (int)($this->value);
   }
}
