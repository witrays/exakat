<?php

namespace Test\Extensions;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Extspl extends Analyzer {
    /* 1 methods */

    public function testExtensions_Extspl01()  { $this->generic_test('Extensions_Extspl.01'); }
}
?>