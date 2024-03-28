<?php
namespace Validators_pack;
use Validators_pack\Src\Validator;


function validation($fields, $rules, $messages , $pathToPermitted): Validator
{
   return (new Validator($fields, $rules, $messages, $pathToPermitted));
}
