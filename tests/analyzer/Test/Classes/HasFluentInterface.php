<?php

namespace Test\Classes;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class HasFluentInterface extends Analyzer {
    /* 1 methods */

    public function testClasses_HasFluentInterface01()  { $this->generic_test('Classes_HasFluentInterface.01'); }
}
?>