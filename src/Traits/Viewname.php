<?php

namespace Claremontdesign\Nar\Traits;

/**
 * Dx
 *
 * @link http://dennesabing.com
 * @author Dennes B Abing <dennes.b.abing@gmail.com>
 * @license proprietary
 * @copyright Copyright (c) 2015 ClaremontDesign/MadLabs-Dx
 * @version 0.0.0.1
 * @since Oct 30, 2015 4:00:37 PM
 * @file Viewname.php
 * @project NHRLaravel
 * @package Expression package is undefined on line 14, column 15 in Templates/Scripting/EmptyPHP.php.
 */
trait Viewname
{

	/**
	 * REturn the View Name
	 * @param string $viewName The View Name
	 * @return string
	 */
	protected function viewName($viewName)
	{
		return cd_nar_tag() . '::templates.' . cd_template() . '.' . $viewName;
	}

}
