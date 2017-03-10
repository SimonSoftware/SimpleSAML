<?php

/**
 * Exception indicating user aborting the authentication process.
 *
 * @package SimpleSAMLphp
 */
class UserAborted extends Error {

	/**
	 * Create the error
	 *
	 * @param Exception|NULL $cause  The exception that caused this error.
	 */
	public function __construct(Exception $cause = NULL) {
		parent::__construct('USERABORTED', $cause);
	}

}
