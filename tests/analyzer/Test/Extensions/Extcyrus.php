<?php

namespace Test\Extensions;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Extcyrus extends Analyzer {
    /* 1 methods */

    public function testExtensions_Extcyrus01()  { $this->generic_test('Extensions_Extcyrus.01'); }
}
?>