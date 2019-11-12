<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Getenv Modifier',
    'description' => 'Adds the new TypoScript modifier := getenv() for TYPO3 versions below 9.3',
    'category' => 'misc',
    'author' => 'Felix Althaus',
    'author_email' => 'felix.althaus@undkonsorten.com',
    'state' => 'beta',
    'uploadfolder' => '',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '0.0.2',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.0 - 8.99.99',
            'php' => '^5.3 || ^7.0',
        ),
    ),
    'autoload' => array(
        'psr-4' => array(
            'Undkonsorten\\GetenvModifier\\' => 'Classes/'
        )
    ),
);
