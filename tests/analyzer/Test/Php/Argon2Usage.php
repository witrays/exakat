<?php

namespace Test\Php;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Argon2Usage extends Analyzer {
    /* 1 methods */

    public function testPhp_Argon2Usage01()  { $this->generic_test('Php/Argon2Usage.01'); }
}
?>