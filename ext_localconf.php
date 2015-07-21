<?php

defined('TYPO3_MODE') or die ('Access denied.');

/**
 * @param string $packageKey
 * @param string $vendorName
 */
$boot = function ($packageKey, $vendorName) {

};

$boot('layout', 'TYPO3');
unset($boot);
