<?php

namespace Test\Type;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class CharString extends Analyzer {
    /* 1 methods */

    public function testType_CharString01()  { $this->generic_test('Type_CharString.01'); }
}
?>