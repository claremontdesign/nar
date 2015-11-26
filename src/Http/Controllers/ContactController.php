<?php

namespace Claremontdesign\Nar\Http\Controllers;

/**
 * Dx
 *
 * @link http://dennesabing.com
 * @author Dennes B Abing <dennes.b.abing@gmail.com>
 * @license proprietary
 * @copyright Copyright (c) 2015 ClaremontDesign/MadLabs-Dx
 * @version 0.0.0.1
 * @since Oct 6, 2015 3:55:50 PM
 * @file Nhr.php
 * @project Claremontdesign
 * @package Nhr
 */
use Claremontdesign\Narbase\Http\Controllers\ContactController as Controller;
use Claremontdesign\Nar\Traits\Viewname;

class ContactController extends Controller
{

	use Viewname;

	/**
	 * REturn the view prefix
	 * @return string
	 */
	public function getViewPrefix()
	{
		return cd_nar_tag();
	}

}
