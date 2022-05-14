<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$rules = [
    '@PSR2'                   => true,
    'align_multiline_comment' => true,
    'array_indentation'       => true,
    'phpdoc_align'            => ['align' => 'vertical'],
    'array_syntax'            => ['syntax' => 'short'],
    'binary_operator_spaces'  => [
        'operators' => [
            '='  => 'align_single_space_minimal',
            '=>' => 'align_single_space_minimal',
        ],
    ],
    'blank_line_after_namespace'   => true,
    'blank_line_after_opening_tag' => false,
    'blank_line_before_statement'  => [
        'statements' => ['return'],
    ],
    'braces' => [
        'allow_single_line_closure'                   => false,
        'position_after_anonymous_constructs'         => 'same',
        'position_after_control_structures'           => 'same',
        'position_after_functions_and_oop_constructs' => 'next',
    ],
    'no_unused_imports'           => true,
    'method_chaining_indentation' => true,
    'combine_consecutive_issets'  => false,
    'combine_consecutive_unsets'  => false,
    'combine_nested_dirname'      => false,
    'comment_to_phpdoc'           => false,
    'compact_nullable_typehint'   => false,
    'cast_spaces'                 => ['space' => 'single'],
    'concat_space'                => ['spacing' => 'one'],
    'constant_case'               => [
        'case' => 'lower',
    ],
    'date_time_immutable'     => false,
    'declare_equal_normalize' => [
        'space' => 'single',
    ],
    'declare_strict_types'                 => false,
    'dir_constant'                         => false,
    'doctrine_annotation_array_assignment' => false,
    'doctrine_annotation_braces'           => false,
    'doctrine_annotation_indentation'      => [
        'ignored_tags'       => [],
        'indent_mixed_lines' => true,
    ],
    'doctrine_annotation_spaces' => [
        'after_argument_assignments'     => false,
        'after_array_assignments_colon'  => false,
        'after_array_assignments_equals' => false,
    ],
    'elseif'                                      => true,
    'encoding'                                    => true,
    'indentation_type'                            => true,
    'no_useless_else'                             => true,
    'no_useless_return'                           => true,
    'ordered_imports'                             => true,
    'single_quote'                                => true,
    'ternary_operator_spaces'                     => true,
    'no_extra_blank_lines'                        => true,
    'no_multiline_whitespace_around_double_arrow' => true,
    'multiline_whitespace_before_semicolons'      => true,
    'no_singleline_whitespace_before_semicolons'  => true,
    'no_spaces_around_offset'                     => true,
    'ternary_to_null_coalescing'                  => true,
    'whitespace_after_comma_in_array'             => true,
    'trim_array_spaces'                           => true,
    'unary_operator_spaces'                       => true,
    'no_whitespace_in_blank_line'                 => true,
    'no_trailing_comma_in_singleline_array'       => true,
    'trailing_comma_in_multiline'                 => true,
    'function_declaration'                        => true,
    'not_operator_with_successor_space'           => false,
    'not_operator_with_space'                     => false,
];

$finder = new Finder();

$finder->in([
    __DIR__ . '/app',
    __DIR__ . '/config',
    __DIR__ . '/database',
    __DIR__ . '/routes',
    __DIR__ . '/tests',
]);

$config = new Config();

$config->setIndent('    ');

$config
    ->setRiskyAllowed(false)
    ->setRules($rules)
    ->setFinder($finder);

return $config;
