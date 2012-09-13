<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tournament extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
		$this->load->helper('url');

        $this->load->library('facebook', array(
            'appId' => $this->config->item('facebook_application_id'),
            'secret' => $this->config->item('facebook_secret_key'),
            'cookie' => true
        ));
    }

	public function index()
	{
		$data['id'] = $this->session->userdata('facebook_uid');
		$data['token'] = $this->session->userdata('facebook_uid');
		$data['tour_id'] = 'First';

		$this->load->view('tournament', $data);
	}
	
	public function push() 
	{

	$ret_obj = $this->facebook->api('/me/matchcrowd:arrange', 'post', array('tournament' => current_url()));
    echo $ret_obj['id'];

		$data['id'] = $this->session->userdata('facebook_uid');
		$data['token'] = $this->session->userdata('facebook_uid');
		$data['tour_id'] = 'First';

		$this->load->view('tournament', $data);
    
    }
}
