<?php

namespace Test\Classes;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class UsedOnceProperty extends Analyzer {
    /* 2 methods */

    public function testClasses_UsedOnceProperty01()  { $this->generic_test('Classes/UsedOnceProperty.01'); }
    public function testClasses_UsedOnceProperty02()  { $this->generic_test('Classes/UsedOnceProperty.02'); }
}
?>