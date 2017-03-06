<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2017 Heimrich & Hannot GmbH
 *
 * @author  Rico Kaltofen <r.kaltofen@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

$arrDca = &$GLOBALS['TL_DCA']['tl_module'];

$arrDca['palettes']['outdooractive_flexview'] =
    '{title_legend},name,headline,type;{config_legend},outdooractiveProjectKey,outdooractiveApiKey;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$arrDca['palettes']['outdooractive_guideline_label'] =
    '{title_legend},name,headline,type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


/**
 * Fields
 */
$arrFields = [
    'outdooractiveProjectKey' => [
        'label'     => &$GLOBALS['TL_LANG']['tl_module']['outdooractiveProjectKey'],
        'inputType' => 'text',
        'default'   => 'api-dev-oa',
        'exclude'   => true,
        'eval'      => ['tl_class' => 'w50'],
        'sql'       => "varchar(32) NOT NULL default ''",
    ],
    'outdooractiveApiKey'     => [
        'label'     => &$GLOBALS['TL_LANG']['tl_module']['outdooractiveApiKey'],
        'inputType' => 'text',
        'default'   => 'yourtest-outdoora-ctiveapi',
        'exclude'   => true,
        'eval'      => ['tl_class' => 'w50'],
        'sql'       => "varchar(32) NOT NULL default ''",
    ],
];

$arrDca['fields'] = array_merge($arrDca['fields'], $arrFields);