<?php

namespace Test\Extensions;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Extgearman extends Analyzer {
    /* 1 methods */

    public function testExtensions_Extgearman01()  { $this->generic_test('Extensions/Extgearman.01'); }
}
?>