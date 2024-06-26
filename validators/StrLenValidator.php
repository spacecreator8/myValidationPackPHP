<?php

namespace Validators_pack\Validators;

// use Src\Validator\AbstractValidator;
use Validators_pack\Src\AbstractValidator;

class StrLenValidator extends AbstractValidator
{

   protected string $message = 'Field :data must be number!';

   public function rule(): bool
   {
       return (strlen($this->value) > 3);
   }
}