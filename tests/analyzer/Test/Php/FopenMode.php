<?php

namespace Test\Php;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class FopenMode extends Analyzer {
    /* 1 methods */

    public function testPhp_FopenMode01()  { $this->generic_test('Php/FopenMode.01'); }
}
?>