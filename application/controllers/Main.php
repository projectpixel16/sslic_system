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
        $filename1='';
        $filename2='';
        $filename3='';
        $filename4='';
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
            'age'=>$this->input->post('age'),
            'sex'=>$this->input->post('sex'),
            'spouse'=>$this->input->post('spouse'),
            'no_dependents'=>$this->input->post('dependents'),
            'no_studying'=>$this->input->post('studying'),
            'home_address'=>$this->input->post('home'),
            'tel_no'=>$this->input->post('tel_no'),
            'house_type'=>$this->input->post('house_type'),
            'tin'=>$this->input->post('tin'),
            'business_address'=>$this->input->post('business_address'),
            'bus_telno'=>$this->input->post('bus_telno'),
            'employer'=>$this->input->post('employer'),
            'position'=>$this->input->post('position'),
            'nature_business'=>$this->input->post('nature_business'),
            'length_service'=>$this->input->post('length_service'),
            'spouse_employment'=>$this->input->post('spouse_employment'),
            'spouse_position'=>$this->input->post('spouse_position'),
            'spouse_address'=>$this->input->post('spouse_address'),
            'spouse_telno'=>$this->input->post('spouse_telno'),
            'exp_food'=>$this->input->post('food'),
            'exp_water'=>$this->input->post('water'),
            'exp_education'=>$this->input->post('education'),
            'exp_others'=>$this->input->post('others'),
            'savings_account'=>$this->input->post('savings_account'),
            'checking_account'=>$this->input->post('checking_account'),
            'loan_amount'=>$this->input->post('loan_amount'),
            'loan_term'=>$this->input->post('loan_term'),
            'collateral_offered'=>$this->input->post('collateral_offered'),
            'user_id'=>$_SESSION['user_id'],
            'payslip_img'=>$filename1,
            'promissory_img'=>$filename2,
            'first_id'=>$filename3,
            'second_id'=>$filename4
        );
        $personal_id=$this->super_model->insert_return_id("personal_data", $personal_data);
        if($this->input->post('countSource')==''){
            $ctr =  1;
        } else{
            $ctr =  $this->input->post('countSource');
        }
        if($this->input->post('countCredit')==''){
            $ctr1 =  1;
        } else{
            $ctr1 =  $this->input->post('countCredit');
        }
        if($this->input->post('countPersonal')==''){
            $ctr2 =  1;
        } else{
            $ctr2 =  $this->input->post('countPersonal');
        }
        if($this->input->post('countOwned')==''){
            $ctr3 =  1;
        } else{
            $ctr3 =  $this->input->post('countOwned');
        }
        for($x=1; $x<=$ctr;$x++){
            if($this->input->post('nature_source'.$x)!=''){
                $source_income = array(
                    'personal_id'=>$personal_id,
                    'nature'=>$this->input->post('nature_source'.$x),
                    'amount'=>$this->input->post('source_amount'.$x)
                );
                $this->super_model->insert_into("source_income", $source_income);
            }
        }
        for($y=1; $y<=$ctr1;$y++){
            if($this->input->post('creditor'.$y)!=''){
                $credit_reference = array(
                    'personal_id'=>$personal_id,
                    'creditor'=>$this->input->post('creditor'.$y),
                    'address'=>$this->input->post('creditor_address'.$y),
                    'orig_amount'=>$this->input->post('original_amount'.$y),
                    'loan_balance'=>$this->input->post('loan_balance'.$y),
                    'collateral'=>$this->input->post('collateral'.$y),
                );
                $this->super_model->insert_into("credit_reference", $credit_reference);
            }
        }
        for($z=1; $z<=$ctr2;$z++){
            if($this->input->post('personal_name'.$z)!=''){
                $personal_reference = array(
                    'personal_id'=>$personal_id,
                    'name'=>$this->input->post('personal_name'.$z),
                    'address'=>$this->input->post('personal_address'.$z),
                    'employment'=>$this->input->post('personal_employment'.$z),
                    'relation'=>$this->input->post('personal_relation'.$z)
                );
                $this->super_model->insert_into("personal_reference", $personal_reference);
            }
        }
        for($a=1; $a<=$ctr3;$a++){
            if($this->input->post('kind'.$a)!=''){
                $personal_properties = array(
                    'personal_id'=>$personal_id,
                    'kind'=>$this->input->post('kind'.$a),
                    'location'=>$this->input->post('location'.$a),
                    'value'=>$this->input->post('value'.$a),
                    'encumbrance'=>$this->input->post('encumbrance'.$a)
                );
                $this->super_model->insert_into("personal_properties", $personal_properties);
            }
        }
    }   

    public function app_upload()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('main/app_upload');
        $this->load->view('template/footer');
    }

   

    
}