<?php

namespace Test\Structures;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class MissingParenthesis extends Analyzer {
    /* 1 methods */

    public function testStructures_MissingParenthesis01()  { $this->generic_test('Structures/MissingParenthesis.01'); }
}
?>