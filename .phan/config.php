<?php

return [
    'backward_compatibility_checks' => true,
    'directory_list' => [
        'src',
        'vendor',
    ],
    'exclude_analysis_directory_list' => [
        'vendor',
    ],
    'whitelist_issue_types' => [
        'PhanCompatiblePHP7',
        'PhanDeprecatedFunctionInternal',
        'PhanUndeclaredFunction',
    ],
];
