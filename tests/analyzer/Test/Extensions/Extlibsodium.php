<?php

namespace Test\Extensions;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Extlibsodium extends Analyzer {
    /* 1 methods */

    public function testExtensions_Extlibsodium01()  { $this->generic_test('Extensions/Extlibsodium.01'); }
}
?>