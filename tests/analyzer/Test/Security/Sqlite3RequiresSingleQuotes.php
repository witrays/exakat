<?php

namespace Test\Security;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class Sqlite3RequiresSingleQuotes extends Analyzer {
    /* 1 methods */

    public function testSecurity_Sqlite3RequiresSingleQuotes01()  { $this->generic_test('Security/Sqlite3RequiresSingleQuotes.01'); }
}
?>