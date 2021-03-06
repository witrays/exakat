<?php

namespace Test\Structures;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class EmptyWithExpression extends Analyzer {
    /* 3 methods */

    public function testStructures_EmptyWithExpression01()  { $this->generic_test('Structures_EmptyWithExpression.01'); }
    public function testStructures_EmptyWithExpression02()  { $this->generic_test('Structures_EmptyWithExpression.02'); }
    public function testStructures_EmptyWithExpression03()  { $this->generic_test('Structures/EmptyWithExpression.03'); }
}
?>