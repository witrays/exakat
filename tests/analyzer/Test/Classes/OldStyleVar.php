<?php

namespace Test\Classes;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class OldStyleVar extends Analyzer {
    /* 1 methods */

    public function testClasses_OldStyleVar01()  { $this->generic_test('Classes_OldStyleVar.01'); }
}
?>