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
 * Register attribute
 */
$GLOBALS['PCT_CUSTOMELEMENTS']['ATTRIBUTES']['simpleColumn'] = array
(
	'label'		=> &$GLOBALS['TL_LANG']['PCT_CUSTOMELEMENTS']['ATTRIBUTES']['simpleColumn'],
	'path' 		=> 'system/modules/pct_customelements_attribute_simplecolumn',
	'class'		=> 'PCT\CustomElements\Attributes\SimpleColumn',
	'icon'		=> 'fa fa-database',
);