<?php

namespace Test\Php;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class FlexibleHeredoc extends Analyzer {
    /* 1 methods */

    public function testPhp_FlexibleHeredoc01()  { $this->generic_test('Php/FlexibleHeredoc.01'); }
}
?>