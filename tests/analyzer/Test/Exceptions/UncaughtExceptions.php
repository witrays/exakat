<?php

namespace Test\Exceptions;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class UncaughtExceptions extends Analyzer {
    /* 3 methods */

    public function testExceptions_UncaughtExceptions01()  { $this->generic_test('Exceptions/UncaughtExceptions.01'); }
    public function testExceptions_UncaughtExceptions02()  { $this->generic_test('Exceptions/UncaughtExceptions.02'); }
    public function testExceptions_UncaughtExceptions03()  { $this->generic_test('Exceptions/UncaughtExceptions.03'); }
}
?>