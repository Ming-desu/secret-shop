<?php

return (new PhpCsFixer\Config())
    ->setRules([
        '@PhpCsFixer' => true,
        'concat_space' => [
            'spacing' => 'one'
        ]
    ])
    ->setIndent("\t")
    ->setLineEnding("\n")
;