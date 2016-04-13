<?php
/**
* @package		EasyDiscuss
* @copyright	Copyright (C) 2010 Stack Ideas Private Limited. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* EasyDiscuss is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/
defined('_JEXEC') or die('Restricted access');

ED::import('admin:/tables/table');

class DiscussMailQueue extends EasyDiscussTable
{
	/*
	 * The id of the mail queue
	 * @var int
	 */
	public $id			= null;

	/*
	* sender email
	* @var string
	*/
	public $mailfrom	= null;

	/*
	* sender name (optional)
	* @var string
	*/
	public $fromname	= null;

	/*
	* recipient email
	* @var string
	*/
	public $recipient	= null;

	/*
	* email subject
	* @var string
	*/
	public $subject		= null;

	/*
	* email body
	* @var string
	*/
	public $body		= null;

	/*
	* Created datetime of the tag
	* @var datetime
	*/
	public $created		= null;

	/*
	* send as html or plaintext
	* @var boolean
	*/
	public $ashtml		= null;


	/**
	 * Constructor for this class.
	 *
	 * @return
	 * @param object $db
	 */
	public function __construct(& $db )
	{
		parent::__construct( '#__discuss_mailq' , 'id' , $db );
	}

	/**
	 * Retrieves the body of the email.
	 *
	 * @since	4.0
	 * @access	public
	 * @param	string
	 * @return
	 */
	public function getBody()
	{
		// if this object is not valid, do not futher process this item.
		if (!$this->id) {
			return false;
		}

		$body = $this->body;

		// If the body is not empty, we should just use this
		if (!empty($this->body)) {
			return $body;
		}

		return false;
	}
}
