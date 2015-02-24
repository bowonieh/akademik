<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checknilai extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper(array('text','form','url','math'));
        
        
        
    }

    function test1(){
    	$a = 79.95;
    	//echo konversi4($a);
    	echo (1/15*$a)-2.66;
    	echo "</p>";
    	echo (2.67+2.66)*15;
    	
    }
    
}