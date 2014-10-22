<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $_EXTKEY,
    'Turnierliste',
    'Tennisturnier'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Tennis Turnier');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_tennisturnier_domain_model_turnier', 'EXT:tennis_turnier/Resources/Private/Language/locallang_csh_tx_tennisturnier_domain_model_turnier.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_tennisturnier_domain_model_turnier');
$GLOBALS['TCA']['tx_tennisturnier_domain_model_turnier'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:tennis_turnier/Resources/Private/Language/locallang_db.xlf:tx_tennisturnier_domain_model_turnier',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,datum,ort,spieler,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Turnier.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_tennisturnier_domain_model_turnier.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_tennisturnier_domain_model_spieler', 'EXT:tennis_turnier/Resources/Private/Language/locallang_csh_tx_tennisturnier_domain_model_spieler.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_tennisturnier_domain_model_spieler');
$GLOBALS['TCA']['tx_tennisturnier_domain_model_spieler'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:tennis_turnier/Resources/Private/Language/locallang_db.xlf:tx_tennisturnier_domain_model_spieler',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,staerke,spielmodus,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Spieler.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_tennisturnier_domain_model_spieler.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_tennisturnier_domain_model_spielmodus', 'EXT:tennis_turnier/Resources/Private/Language/locallang_csh_tx_tennisturnier_domain_model_spielmodus.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_tennisturnier_domain_model_spielmodus');
$GLOBALS['TCA']['tx_tennisturnier_domain_model_spielmodus'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:tennis_turnier/Resources/Private/Language/locallang_db.xlf:tx_tennisturnier_domain_model_spielmodus',
		'label' => 'einzel',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'einzel,doppel,mixed,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Spielmodus.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_tennisturnier_domain_model_spielmodus.gif'
	),
);
