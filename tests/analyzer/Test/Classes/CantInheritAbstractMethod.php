<?php

namespace Test\Classes;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class CantInheritAbstractMethod extends Analyzer {
    /* 1 methods */

    public function testClasses_CantInheritAbstractMethod01()  { $this->generic_test('Classes/CantInheritAbstractMethod.01'); }
}
?>