<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2017 Heimrich & Hannot GmbH
 *
 * @author  Rico Kaltofen <r.kaltofen@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

namespace HeimrichHannot\OutdoorActive;


class ModuleFlexView extends \Module
{
    protected $strTemplate = "mod_outdooractive_flexview";

    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            $objTemplate           = new \BackendTemplate('be_wildcard');
            $objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD'][$this->type][0]) . ' ###';
            $objTemplate->title    = $this->headline;
            $objTemplate->id       = $this->id;
            $objTemplate->link     = $this->name;
            $objTemplate->href     = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

        if (!$this->outdooractiveProjectKey || !$this->outdooractiveApiKey)
        {
            return 'Please provide a valid outdooractive project & api key within your module configuration!';
        }

        return parent::generate();
    }

    /**
     * Compile the current element
     */
    protected function compile()
    {
        $GLOBALS['TL_JAVASCRIPT']['outdooractive_flexview_' . $this->outdooractiveProjectKey] = sprintf(
            '//www.outdooractive.com/alpportal/oa_head.js?proj=%s&amp;key=%s&amp;lang=%s&leaflet_gshim=1',
            $this->outdooractiveProjectKey,
            $this->outdooractiveApiKey,
            $GLOBALS['TL_LANGUAGE']
        );

        $this->Template->label = $GLOBALS['TL_LANG']['MSC']['outdooractiveGuidelineLabel'];
    }
}