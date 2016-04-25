<?php
namespace App\View\Helper;

use Cake\View\Helper;

class vaHelper extends Helper{

private $url = 'http://localhost/va/';

	public function site_url($args){
		if($args==NULL){
			return $this->url;
		}else{
			return $this->url.$args;
		}
	}


	public function get_admin_session(){
		if(in_array('admin_account', $_SESSION)){
			return $_SESSION['admin_account'];	
		}
	}
	
}
