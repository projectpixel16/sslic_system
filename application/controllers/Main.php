<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        date_default_timezone_set("Asia/Manila");
        $this->load->model('super_model');
        $this->load->database();
 
       
        function arrayToObject($array){
            if(!is_array($array)) { return $array; }
            $object = new stdClass();
            if (is_array($array) && count($array) > 0) {
                foreach ($array as $name=>$value) {
                    $name = strtolower(trim($name));
                    if (!empty($name)) { $object->$name = arrayToObject($value); }
                }
                return $object;
            } 
            else {
                return false;
            }
        }
    } 

    public function login()
    {
        $this->load->view('template/header_admin');
        $this->load->view('template/navbar_admin');
        $this->load->view('main/login');
        $this->load->view('template/footer_admin');
    }

    public function index()
    {
        $this->load->view('main/dashboard');
    }

    public function app_form()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('main/app_form');
        $this->load->view('template/footer');
    }

    public function app_upload()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('main/app_upload');
        $this->load->view('template/footer');
    }

   

    
}