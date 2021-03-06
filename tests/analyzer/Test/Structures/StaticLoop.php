<?php

namespace Test\Structures;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class StaticLoop extends Analyzer {
    /* 8 methods */

    public function testStructures_StaticLoop01()  { $this->generic_test('Structures_StaticLoop.01'); }
    public function testStructures_StaticLoop02()  { $this->generic_test('Structures_StaticLoop.02'); }
    public function testStructures_StaticLoop03()  { $this->generic_test('Structures_StaticLoop.03'); }
    public function testStructures_StaticLoop04()  { $this->generic_test('Structures_StaticLoop.04'); }
    public function testStructures_StaticLoop05()  { $this->generic_test('Structures/StaticLoop.05'); }
    public function testStructures_StaticLoop06()  { $this->generic_test('Structures/StaticLoop.06'); }
    public function testStructures_StaticLoop07()  { $this->generic_test('Structures/StaticLoop.07'); }
    public function testStructures_StaticLoop08()  { $this->generic_test('Structures/StaticLoop.08'); }
}
?>