<?php

namespace Test\Psr;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Psr6Usage extends Analyzer {
    /* 1 methods */

    public function testPsr_Psr6Usage01()  { $this->generic_test('Psr/Psr6Usage.01'); }
}
?>