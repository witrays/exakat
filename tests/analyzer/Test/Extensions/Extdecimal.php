<?php

namespace Test\Extensions;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Extdecimal extends Analyzer {
    /* 1 methods */

    public function testExtensions_Extdecimal01()  { $this->generic_test('Extensions/Extdecimal.01'); }
}
?>