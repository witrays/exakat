<?php

namespace Test\Traits;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Php extends Analyzer {
    /* 1 methods */

    public function testTraits_Php01()  { $this->generic_test('Traits_Php.01'); }
}
?>