<?php

namespace Test\Classes;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class CantExtendFinal extends Analyzer {
    /* 1 methods */

    public function testClasses_CantExtendFinal01()  { $this->generic_test('Classes/CantExtendFinal.01'); }
}
?>