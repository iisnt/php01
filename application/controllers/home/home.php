<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_controller{

    function __construct(){
        parent::__construct();
    }

    function index(){
        $data['style']=pure_style();
        $this->load->view('home/index.html',$data);
    }
    
}