<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fcsc/Configuration/TSconfig/pageTSconfig.txt">');

$TYPO3_CONF_VARS[FE][contentRenderingTemplates][] = 'fcsc/Configuration/TypoScript/';
$TYPO3_CONF_VARS[FE][activateContentAdapter] = 0;