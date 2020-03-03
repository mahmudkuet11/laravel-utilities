<?php

namespace Mahmud\LaravelUtilities\Rules;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Hash;

class HashCheck
{
    public function handle($attribute, $value, $parameters, Validator $validator)
    {
        if (! Hash::check($value, $parameters[0])) {
            $validator->errors()->add($attribute, 'Incorrect password');
        }

        return $validator;
    }
}
