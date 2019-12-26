<?php
/**
 * Created by MD. Mahmud Ur Rahman <mahmudkuet11@gmail.com>.
 */

class HelpersTest extends \Orchestra\Testbench\TestCase {
    /**
     * @test
     */
    public function it_returns_number_in_double_format() {
        $this->assertTrue(7.33 === number(7.3314));
        $this->assertTrue(7.0 === number(7.3314, 0));
        $this->assertTrue(7.34 === number(7.3354));
        $this->assertTrue(7.335 === number(7.3354, 3));
    }
}
