<?php

/*
 * This file is part of the TYPO3 CMS Extension "Routing Example"
 * Extension author: Michael Schams - https://schams.net
 *
 * @package    TYPO3
 * @subpackage routingexample
 * @author     Michael Schams <schams.net>
 * @link       https://schams.net
 */

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'SchamsNet.Routingexample',
    'Routingexample',
    array(
        'Rest' => 'userlist, userdetails'
    ),
    array(
        'Rest' => 'userlist, userdetails'
    )
);

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['routing']['globalRoutes'][] = 'EXT:' . $_EXTKEY . '/Configuration/Routes.yaml';

$extensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY);
$typoScript = $extensionPath . 'Configuration/TypoScript/setup.txt';

if (is_readable($typoScript)) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        file_get_contents($typoScript)
    );
}
