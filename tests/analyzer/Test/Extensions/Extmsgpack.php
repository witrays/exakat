<?php

namespace Test\Extensions;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Extmsgpack extends Analyzer {
    /* 1 methods */

    public function testExtensions_Extmsgpack01()  { $this->generic_test('Extensions/Extmsgpack.01'); }
}
?>