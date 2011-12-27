<?php defined('BASEPATH') OR exit('No direct script access allowed');

//Core admin controller.
class Admin_Controller {
    var $CI;

	public function __construct($params='')
	{
        $this->CI = get_instance();
		if ( ! self::_check_access())
		{
			//display access error and exit
			$msg = array('error' => '<p>You are not allowed to access this page.</p>');
			set_global_messages($msg, 'error');
			exit;
		}

	}

	private function _check_access()
	{
		//@todo::check if the user can access
        //Check access rights
        $this->CI->cf_login_lib->check_login(array('1'));

		return TRUE;
	}

}