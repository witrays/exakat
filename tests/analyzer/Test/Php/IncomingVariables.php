<?php

namespace Test\Php;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class IncomingVariables extends Analyzer {
    /* 1 methods */

    public function testPhp_IncomingVariables01()  { $this->generic_test('Php/IncomingVariables.01'); }
}
?>