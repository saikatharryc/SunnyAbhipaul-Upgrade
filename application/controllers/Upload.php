<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Upload extends CI_Controller
{
	
	public function __construct()
	
	{
			parent::__construct();
			$this ->load->model(Upload_model);
			$config['upload_path'] =realpath(APPPATH.'../uploads');
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] ='2048000';
			$this->load->library('upload',$config);
			}
				

		}