<?php

namespace Mahmud\LaravelUtilities;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Mahmud\LaravelUtilities\Rules\Ascii;

class LaravelUtilitiesServiceProvider extends ServiceProvider {
    
    public function boot() {
        Validator::extend('ascii', Ascii::class . '@passes');
    }
}
