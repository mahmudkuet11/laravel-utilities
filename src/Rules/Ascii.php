<?php

namespace Mahmud\LaravelUtilities\Rules;

use Illuminate\Contracts\Validation\Rule;

class Ascii implements Rule {
    
    public function passes($attribute, $value) {
        return mb_check_encoding($value, "ASCII");
    }
    
    public function message() {
        return 'The :attribute must contain ASCII characters';
    }
}
