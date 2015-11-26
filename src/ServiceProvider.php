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
 * @since Oct 6, 2015 1:53:24 PM
 * @file ServiceProvider.php
 * @project Claremontdesign
 * @package Nhrbase
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

	public function register()
	{
		// Register this service
		$this->app->singleton('nar', function($app){
			return new Nar;
		});
		app('cdbase')->addPackage(\Claremontdesign\Nar\Nar::class);
	}

	public function boot()
	{
		// Define the path for the view files
		$this->loadViewsFrom(__DIR__ . '/../resources/views', cd_nar_tag());

		// Loading the routes file
		require __DIR__ . '/Http/routes.php';
	}

}
