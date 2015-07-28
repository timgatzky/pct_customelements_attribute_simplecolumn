<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @copyright	Tim Gatzky 2015
 * @author		Tim Gatzky <info@tim-gatzky.de>
 * @package		pct_customelements
 * @attribute	SimpleColumn
 * @link		http://contao.org
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'PCT\CustomElements',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'PCT\CustomElements\Attributes\SimpleColumn' => 'system/modules/pct_customelements_attribute_simplecolumn/PCT/CustomElements/Attributes/SimpleColumn/SimpleColumn.php',	
));