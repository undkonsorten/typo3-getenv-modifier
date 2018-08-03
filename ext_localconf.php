<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
    $typo3Version = \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version);
    if ($typo3Version >= 9003000) {
        // Log deprecation for TYPO3 versions >= 9.3
        \TYPO3\CMS\Core\Utility\GeneralUtility::deprecationLog('Extension getenv_modifier is not needed for TYPO3 version >= 9.3 and can be safely removed.');
    } else {
        // register modifier otherwise
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tsparser.php']['preParseFunc'][\Undkonsorten\GetenvModifier\TypoScript\Parser\GetEnvValueModifier::MODIFIER_KEY] =
            'Undkonsorten\GetenvModifier\TypoScript\Parser\GetEnvValueModifier->evaluate';
    }
});
