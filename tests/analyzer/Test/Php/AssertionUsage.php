<?php

namespace Test\Php;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class AssertionUsage extends Analyzer {
    /* 1 methods */

    public function testPhp_AssertionUsage01()  { $this->generic_test('Php/AssertionUsage.01'); }
}
?>