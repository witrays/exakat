<?php

$expected     = array('f(\'a\' . \'b\', $c->d)',
                      'f(\'a\' . \'b\', \'c\' . D)',
                      '\'a3\' . \'b\' . \'c\' . \'d\'',
                      '\'a2\' . \'b\' . \'c\'',
                     );

$expected_not = array('\\\'a4\\\' . \\\'b\\\' . \\\'c\\\' . \\\'d\\\'',
                      '$a4->b(\'a\' . \'c\')',
                     );

?>