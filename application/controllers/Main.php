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
        $this->load->view('template/header_login');
        $this->load->view('template/navbar');
        $this->load->view('main/login');
        $this->load->view('template/footer');
    }

    public function login_process(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $count=$this->super_model->login_user($username,$password);
        if($count>0){   
            $password1 =md5($this->input->post('password'));
            $fetch=$this->super_model->select_custom_where("users", "username = '$username' AND (password = '$password' OR password = '$password1')");
            foreach($fetch AS $d){
                $userid = $d->user_id;
                //$usertype = $d->usertype_id;
                $username = $d->username;
                $fullname = $d->fullname;
            }
            $newdata = array(
               'user_id'=> $userid,
               //'usertype'=> $usertype,
               'username'=> $username,
               'fullname'=> $fullname,
               'logged_in'=> TRUE
            );
            $this->session->set_userdata($newdata);
            echo 'success';
            //redirect(base_url().'main/app_form');
        }
        else{
            echo 'error';
            // $this->session->set_flashdata('error_msg', 'Username And Password Do not Exist!');
            // redirect(base_url().'main/login');
            //$this->load->view('template/header_login');
            //$this->load->view('main/login');
            // $this->load->view('template/footer');       
        }
    }

    public function user_logout(){
        $this->session->sess_destroy();
        $this->load->view('template/header');
        $this->load->view('main/login');
        $this->load->view('template/footer');
        // echo "<script>alert('You have successfully logged out.'); 
        // window.location ='".base_url()."main/index'; </script>";
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

    public function insert_application(){
        $dest= realpath(APPPATH . '../uploads/images/');
        $error_ext=0;
        $identifier=date('Ymdhis');
        if(!empty($_FILES['payslip']['name'])){
            $exc= basename($_FILES['payslip']['name']);
            $exc=explode('.',$exc);
            $ext1=$exc[1];
            if($ext1=='php' || ($ext1!='png' && $ext1 != 'jpg' && $ext1!='jpeg')){
                $error_ext++;
            }else {
                $filename1='current_payslip_'.$identifier.'.'.$ext1;
                move_uploaded_file($_FILES["payslip"]['tmp_name'], $dest.'/'.$filename1); 
            }
        }
        if(!empty($_FILES['promissory']['name'])){
            $exc= basename($_FILES['promissory']['name']);
            $exc=explode('.',$exc);
            $ext1=$exc[1];
            if($ext1=='php'  || ($ext1!='png' && $ext1 != 'jpg' && $ext1!='jpeg')){
                $error_ext++;
            }else {
                $filename2='promissory_'.$identifier.'.'.$ext1;
                move_uploaded_file($_FILES["promissory"]['tmp_name'], $dest.'/'.$filename2); 
            }
        }

        if(!empty($_FILES['first']['name'])){
            $exc= basename($_FILES['first']['name']);
            $exc=explode('.',$exc);
            $ext1=$exc[1];
            if($ext1=='php'  || ($ext1!='png' && $ext1 != 'jpg' && $ext1!='jpeg')){
                $error_ext++;
            }else {
                $filename3='ID1_'.$identifier.'.'.$ext1;
                move_uploaded_file($_FILES["first"]['tmp_name'], $dest.'/'.$filename3);
            }
        }

        if(!empty($_FILES['second']['name'])){
            $exc= basename($_FILES['second']['name']);
            $exc=explode('.',$exc);
            $ext1=$exc[1];
            if($ext1=='php'  || ($ext1!='png' && $ext1 != 'jpg' && $ext1!='jpeg')){
                $error_ext++;
            }else {
                $filename4='ID2_'.$identifier.'.'.$ext1;
                move_uploaded_file($_FILES["second"]['tmp_name'], $dest.'/'.$filename4);
            }
        }

        $personal_data = array(
            'fullname'=>$this->input->post('name'),
            'bday'=>$this->input->post('bday'),
            'payslip_img'=>$filename1,
            'promissory_img'=>$filename2,
            'first_id'=>$filename3,
            'second_id'=>$filename4
        );
        $this->super_model->insert_into("personal_data", $personal_data);
    }   

    public function app_upload()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('main/app_upload');
        $this->load->view('template/footer');
    }

   

    
}