<?php

namespace Test\Extensions;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Extev extends Analyzer {
    /* 1 methods */

    public function testExtensions_Extev01()  { $this->generic_test('Extensions/Extev.01'); }
}
?>