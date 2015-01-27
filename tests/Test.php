<?php

use HelloWorld\Say;

class Test extends PHPUnit_Framework_TestCase {

    public function test() {
        $this->assertEquals('Hello Composer!', Say::hello());
    }

}

