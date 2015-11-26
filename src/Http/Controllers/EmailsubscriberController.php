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
use Claremontdesign\Narbase\Http\Controllers\SubscribeController as Controller;
use Claremontdesign\Nar\Traits\Viewname;

class EmailsubscriberController extends Controller
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

	/**
	 * Process submitted form
	 * @param  Request $request
	 * @return view
	 */
	public function postIndex()
	{
		$request = app('request');
		$mailingListTable = cd_config('database.tables.email_subscribers.table');
		$mailingListEmailColumn = cd_config('database.tables.email_subscribers.emailColumn');
		$validatorMessages = [
			'email.required' => 'Email Address is required.',
			'email.unique' => 'Email Address is already a subscriber.',
		];

		$this->validate($request, [
			'email' => 'required|unique:' . $mailingListTable . ',' . $mailingListEmailColumn,
				], $validatorMessages);

		$subscribe = [
			'email' => $request->email,
			'success' => true,
		];
		$data = ['email' => $request->email];
		cd_narbase()->emailSubscriberRepo()->create($data);

//		$inputs = app('request')->all();
//		$this->viewOptions = $inputs;
//		$this->viewName = $this->viewName('contact.partial.email');
//		$this->recipient = $inputs['email'];
//		$this->sender = cd_config('contact.support.email');
//		$this->senderName = cd_config('contact.support.name');
//		$this->subject = $inputs['subject'];

		cd_flash_msg('Email address saved!');
		return view($this->viewName('subscribe.index'), compact('subscribe'));
	}

}
