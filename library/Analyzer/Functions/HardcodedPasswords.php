<?php

namespace Analyzer\Functions;

use Analyzer;

class HardcodedPasswords extends Analyzer\Analyzer {
    public function analyze() {
        $passwords = array('mysql_connect' => 3,
                           'mysqli_connect' => 3,
                           'ftp_login' => 3,
                           'mssql_connect' => 3,
                           'oci_connect' => 2);
        
        $positions = array();
        foreach($passwords as $function => $position) {
            if (isset($positions[$position - 1])) {
                $positions[$position - 1][] = '\\'.$function;
            } else {
                $positions[$position - 1] = array('\\'.$function);
            }
        }

        foreach($positions as $position => $function) {
            $this->atomIs('Functioncall')
                 ->hasNoIn('METHOD')
                 ->fullnspath($function)
                 ->outIs('ARGUMENTS')
                 ->outIs('ARGUMENT')
                 ->hasOrder($position)
                 ->atomIs('String')
                 ->back('first');
            $this->prepareQuery();
        }
    }
}

?>