<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detilmapel extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper(array('url','text','form'));
        
        
        
    }
    
 function index(){   
     
     
    }
    
}