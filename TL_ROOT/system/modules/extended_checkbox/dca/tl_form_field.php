<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Christian Barkowsky 2011
 * @author     Christian Barkowsky <http://www.christianbarkowsky.de>
 * @package    Extended Checkbox
 * @license    EULA
 * @filesource
 */


/**
 * Load tl_content
 */
$this->loadDataContainer('tl_content');


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['checkbox_extended'] = '{type_legend},type,name,label;{options_legend},checkbox_extended_value;{evp_link_legend},checkbox_extended_url,checkbox_extended_target,checkbox_extended_singleSRC,checkbox_extended_title,checkbox_extended_embed;{fconfig_legend:hide},mandatory;{template_legend:hide},checkbox_extended_tpl;{expert_legend:hide},class;{submit_legend:hide},addSubmit';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_form_field']['fields']['checkbox_extended_value'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['checkbox_extended_value'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength'=>32, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['checkbox_extended_url'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['checkbox_extended_url'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false, 'rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50 wizard'),
	'wizard' => array
	(
		array('tl_content', 'pagePicker')
	)
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['checkbox_extended_target'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['checkbox_extended_target'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['checkbox_extended_singleSRC'] = array
(
	'label'                   =>&$GLOBALS['TL_LANG']['tl_form_field']['checkbox_extended_singleSRC'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'mandatory'=>false, 'tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['checkbox_extended_title'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['checkbox_extended_title'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['checkbox_extended_embed'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['checkbox_extended_embed'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['checkbox_extended_tpl'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['checkbox_extended_tpl'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => $this->getTemplateGroup('form_widget')
);