<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'DavidVaupel.' . $_EXTKEY,
    'Turnierliste',
    array(
        'Turnier' => 'list, show, new, create, edit, update, delete',
    ),
    array(
        'Turnier' => 'list, show, new, create, edit, update, delete',
    )
);