<?php

namespace Test\Traits;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class IsExtTrait extends Analyzer {
    /* 1 methods */

    public function testTraits_IsExtTrait01()  { $this->generic_test('Traits_IsExtTrait.01'); }
}
?>