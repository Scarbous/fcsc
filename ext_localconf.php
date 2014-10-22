<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

#\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY, 'setup', '# Setting ' . $_EXTKEY . ' plugin TypoScript' . $addLine . '', 43);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fcsc/Configuration/TSconfig/pageTSconfig.txt">');

$TYPO3_CONF_VARS[FE][contentRenderingTemplates][] = 'fcsc/Configuration/TypoScript/';