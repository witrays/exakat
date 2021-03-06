<?php

namespace Test\Classes;

use Test\Analyzer;

include_once './Test/Analyzer.php';

class ImplementedMethodsArePublic extends Analyzer {
    /* 4 methods */

    public function testClasses_ImplementedMethodsArePublic01()  { $this->generic_test('Classes/ImplementedMethodsArePublic.01'); }
    public function testClasses_ImplementedMethodsArePublic02()  { $this->generic_test('Classes/ImplementedMethodsArePublic.02'); }
    public function testClasses_ImplementedMethodsArePublic03()  { $this->generic_test('Classes/ImplementedMethodsArePublic.03'); }
    public function testClasses_ImplementedMethodsArePublic04()  { $this->generic_test('Classes/ImplementedMethodsArePublic.04'); }
}
?>