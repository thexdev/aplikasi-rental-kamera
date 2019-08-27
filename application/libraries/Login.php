<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login {

	private $CI;

	public function __construct()
	{
		$this->CI = get_instance();
	}

	public function cek()
	{
		if (! $this->CI->session->userdata('login'))
        {
            redirect(site_url(), 'refresh');
        }
	}
}