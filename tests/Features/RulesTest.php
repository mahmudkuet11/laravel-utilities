<?php

/**
 * Created by MD. Mahmud Ur Rahman <mahmudkuet11@gmail.com>.
 */

namespace Mahmud\LaravelUtilities\Tests\Features;

use Illuminate\Support\Facades\Validator;
use Mahmud\LaravelUtilities\LaravelUtilitiesServiceProvider;
use Mahmud\LaravelUtilities\Rules\Ascii;
use Orchestra\Testbench\TestCase;

class RulesTest extends TestCase {
    /**
     * @test
     */
    public function it_accepts_only_ascii_characters_in_a_string() {
        $validator = Validator::make(['foo' => 'bar'], ['foo' => 'ascii']);
        
        $this->assertFalse($validator->fails());
        
        $validator = Validator::make(['foo' => 'বার'], ['foo' => new Ascii()]);
        
        $this->assertTrue($validator->fails());
        $this->assertEquals("The foo must contain ASCII characters", $validator->errors()->get('foo')[0]);
    }
    
    protected function getPackageProviders($app) {
        return [
            LaravelUtilitiesServiceProvider::class,
        ];
    }
}
