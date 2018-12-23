<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main_libary {

        public function getSetting()
        {
        	$setting = array(
        		'isShowWelcome' => 1,
        		'version' => '0.1'
        	);
        	return $setting;
        }
}