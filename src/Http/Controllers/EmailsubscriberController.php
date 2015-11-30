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
use Claremontdesign\Cdbase\Traits\Messenger;

class EmailsubscriberController extends Controller
{

	use Viewname,
	 Messenger;

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
		cd_flash_msg('Email address saved!');

		$couponToEmail = cd_config('database.tables.coupons.email');

		if(!empty($couponToEmail))
		{
			$code = $this->_getCouponCode();
			if(!empty($code))
			{
				$this->viewOptions = ['code' => $code];
				$this->viewName = $this->viewName('subscribe.partial.email');
				$this->sender = cd_config('contact.support.email');
				$this->senderName = cd_config('contact.support.name');
				$this->recipient = $request->email;
				$this->recipientName = $request->email;
				$this->subject = cd_config('site.title');
				$sent = $this->send();
				if($sent)
				{
					cd_flash_msg('A coupon code has been successfully sent to your email address!');
				}
				else
				{
					cd_flash_errormsg('There was an error sending an email to you. Kindly try again!');
				}
			} else {
				cd_flash_msg('We cannot find any available coupon code at this time. Kindly contact Customer Support.');
			}
		}

		return view($this->viewName('subscribe.index'), compact('subscribe'));
	}

	/**
	 * Return a CouponCode for today
	 */
	protected function _getCouponCode()
	{
		$couponToDay = cd_config('database.tables.coupons.today');
		if($couponToDay)
		{
			$file = __DIR__ . '/../../../config/couponCodes.php';
			if(file_exists($file))
			{
				$couponCodes = require $file;
				$today = date('n/d/Y');
				if(array_key_exists($today, $couponCodes))
				{
					return $couponCodes[$today];
				}
			}
		}
		return null;
	}

}
