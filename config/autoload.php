<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2017 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'HeimrichHannot',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'HeimrichHannot\OutdoorActive\ModuleGuidelineLabel' => 'system/modules/outdooractive/modules/ModuleGuidelineLabel.php',
	'HeimrichHannot\OutdoorActive\ModuleFlexView'       => 'system/modules/outdooractive/modules/ModuleFlexView.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_outdooractive_guideline_label' => 'system/modules/outdooractive/templates/modules',
	'mod_outdooractive_flexview'        => 'system/modules/outdooractive/templates/modules',
));
