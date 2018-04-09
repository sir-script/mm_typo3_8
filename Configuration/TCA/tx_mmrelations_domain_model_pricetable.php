<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

return [
    'ctrl' => [
        'title' => 'Pricetable',
        'label' => 'name',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
    ],
    'types' => [
	    '0' => [
        	'showitem' => '
        		name,seasons
        	',
        ],
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, name',
	],
    'columns' => [
        
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => [
                    [ 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages', -1 ],
                    [ 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value', 0 ]
                ],
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' =>[ 
                    [ '', 0 ],
                ],
                'foreign_table' => 'tx_mmrelations_domain_model_season',
                'foreign_table_where' => 'AND tx_mmrelations_domain_model_season.pid=###CURRENT_PID### AND tx_mmrelations_domain_model_season.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'name' => [
            'exclude' => 0,
            'label' => 'Name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
		
        'seasons' => [
			'exclude' => 0,
			'label' => 'Seasons',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectMultipleSideBySide',
				'foreign_table' => 'tx_mmrelations_domain_model_season',
				'MM' => 'tx_mmrelations_pricetable_season_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 1,
			],
		],
    ],
];
?>