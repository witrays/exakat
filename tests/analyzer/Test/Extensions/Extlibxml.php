<?php

namespace Test\Extensions;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Extlibxml extends Analyzer {
    /* 1 methods */

    public function testExtensions_Extlibxml01()  { $this->generic_test('Extensions_Extlibxml.01'); }
}
?>