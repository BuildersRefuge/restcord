<?php

/*
 * Copyright 2017 Aaron Scherer
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE
 *
 * @package     restcord/restcord
 * @copyright   Aaron Scherer 2017
 * @license     MIT
 */

namespace RestCord\Model\Invite;

/**
 * Invite Model
 */
class Invite {

	/**
	 * approximate count of total members
	 *
	 * @var int|null
	 */
	public $approximate_member_count;

	/**
	 * approximate count of online members
	 *
	 * @var int|null
	 */
	public $approximate_presence_count;

	/**
	 * the channel this invite is for
	 *
	 * @var array
	 */
	public $channel;

	/**
	 * the invite code (unique ID)
	 *
	 * @var string
	 */
	public $code;

	/**
	 * the guild this invite is for
	 *
	 * @var array
	 */
	public $guild;

	/**
	 * @param array $content
	 */
	public function __construct(array $content = null) {
		if (null === $content) {
		    return;
		}
		                    
		foreach ($content as $key => $value) {
		    $key = lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $key))));
		    if (property_exists($this, $key)) {
		        $this->{$key} = $value;
		    }
		}
	}
}