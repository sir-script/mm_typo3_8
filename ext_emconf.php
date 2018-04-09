<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'M M Relation Test',
    'description' => 'An extension to test db relationships',
    'category' => 'plugin',
    'author' => 'Michael Rainer',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
        	'typo3' => '8.7.0-8.9.99',
        ]
    ],
];