<?php

namespace Claremontdesign\Nar;

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
class Nar extends \Claremontdesign\Narbase\Narbase
{

	/**
	 * Return the configuration file
	 */
	public function config()
	{
		return __DIR__ . '/../config/config.php';
	}
}
