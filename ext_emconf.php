<?php

/**
 * Extension Manager/Repository config file for ext "pa23".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'pa23',
    'description' => 'Pilates Art 2023',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-14.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'PilatesArt\\Pa23\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Javier Velazquez',
    'author_email' => 'jvelazqu@yahoo.com',
    'author_company' => 'Pilates Art',
    'version' => '1.0.0',
];
