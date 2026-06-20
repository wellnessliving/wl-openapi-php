<?php
// PHP-CS-Fixer configuration for all PHP sources:
// generator scripts and generated SDK output for every channel.
$generatedDirs = array_values(array_filter(
    [__DIR__ . '/stable/src', __DIR__ . '/dev/src', __DIR__ . '/src'],
    'is_dir'
));

$finder = PhpCsFixer\Finder::create()
    ->in(array_merge([__DIR__ . '/scripts'], $generatedDirs));

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        'class_attributes_separation' => ['elements' => ['const' => 'one']],
    ])
    ->setFinder($finder);