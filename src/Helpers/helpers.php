<?php

/**
 * Dx
 *
 * @link http://dennesabing.com
 * @author Dennes B Abing <dennes.b.abing@gmail.com>
 * @license proprietary
 * @copyright Copyright (c) 2015 ClaremontDesign/MadLabs-Dx
 * @version 0.0.0.1
 * @since Oct 6, 2015 2:02:23 PM
 * @file helpers.php
 * @project Claremontdesign
 * @package Nhr
 */
if(!function_exists('cd_nar'))
{

	function cd_nar()
	{
		return app('nhr');
	}

}
if(!function_exists('cd_nar_tag'))
{

	/**
	 * Return this packge tag
	 * @return string
	 */
	function cd_nar_tag()
	{
		return 'nar';
	}

}
if(!function_exists('cd_nar_template'))
{

	/**
	 * Return this packge template
	 * @return string
	 */
	function cd_nar_template()
	{
		return cd_nar_tag() . '::templates.' . cd_template() . '.template';
	}

}
if(!function_exists('cd_nar_view_name'))
{

	/**
	 * Return this package view name
	 * view(cd_nar_view_name('view-name')) = nhr::view-name
	 * @param string $view The View Name
	 * @return string
	 */
	function cd_nar_view_name($view)
	{
		return cd_nar_tag() . '::templates.' . cd_template() . '.' . $view;
	}

}
if(!function_exists('cd_nar_asset'))
{

	/**
	 * Return the public path to an asset.
	 * 	path to return is relative to package template folder.
	 * 	If you want to return an asset relative to the public folder,
	 * 	use larvel's asset() instead
	 * @param string $asset The asset
	 * @return string
	 */
	function cd_nar_asset($asset = null)
	{
		$pathToAssets = env('NAR_ASSETSPATH', false);
		if(!empty($pathToAssets))
		{
			return fixDoubleSlash($pathToAssets . '/' . $asset);
		}
		return asset('assets') . '/' . fixDoubleSlash(cd_nar_tag() . '/templates/' . cd_template() . '/' . $asset);
	}

}

