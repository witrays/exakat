<?php

namespace Test\Classes;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class ShouldHaveDestructor extends Analyzer {
    /* 1 methods */

    public function testClasses_ShouldHaveDestructor01()  { $this->generic_test('Classes/ShouldHaveDestructor.01'); }
}
?>