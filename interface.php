<?php
namespace Validator;
use Src\Validator\Validator;


function validation($fields, $rules, $messages , $pathToPermitted): Validator
{
   return (new Validator($fields, $rules, $messages, $pathToPermitted));
}
