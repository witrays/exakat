<?php

namespace Test\Php;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class DateFormats extends Analyzer {
    /* 1 methods */

    public function testPhp_DateFormats01()  { $this->generic_test('Php/DateFormats.01'); }
}
?>