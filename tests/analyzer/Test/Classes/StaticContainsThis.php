<?php

namespace Test\Classes;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class StaticContainsThis extends Analyzer {
    /* 1 methods */

    public function testClasses_StaticContainsThis01()  { $this->generic_test('Classes_StaticContainsThis.01'); }
}
?>