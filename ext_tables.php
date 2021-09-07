<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'AshokaTree.KaemmereiSlider',
            'Pi1',
            'Kaemmerei Slider'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('kaemmerei_slider', 'Configuration/TypoScript', 'Kaemmerei Slider');

    }
);
