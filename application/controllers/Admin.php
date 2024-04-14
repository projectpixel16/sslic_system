<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

    public function login_process(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $count=$this->super_model->login_user($username,$password);
        if($count>0){   
            $password1 =md5($this->input->post('password'));
            $fetch=$this->super_model->select_custom_where("users", "username = '$username' AND (password = '$password' OR password = '$password1') AND usertype='1'");
            foreach($fetch AS $d){
                $userid = $d->user_id;
                $username = $d->username;
                $contact_no = $d->contact_no;
                $fullname = $d->fullname;
            }
            $newdata = array(
               'user_id'=> $userid,
               'username'=> $username,
               'fullname'=> $fullname,
               'contact_no'=> $contact_no,
               'logged_in'=> TRUE
            );
            $this->session->set_userdata($newdata);
            echo 'success';
        }
        else{
            echo 'error';
        }
    }

    public function user_logout(){
        $this->session->sess_destroy();
        $this->load->view('template/header');
        $this->load->view('admin/login');
        $this->load->view('template/footer');
    }

    public function login()
    {
        $this->load->view('template/header_login');
        $this->load->view('template/navbar_admin');
        $this->load->view('admin/login');
        $this->load->view('template/footer_admin');
    }

    public function admin_loaners()
    {
        $this->load->view('template/header_admin');
        $this->load->view('template/navbar_admin2');
        $data['loaners']=$this->super_model->select_all_order_by("users","fullname","ASC");
        $this->load->view('admin/admin_loaners',$data);
        $this->load->view('template/footer_admin');
    }

    public function admin_dashboard()
    {
        $this->load->view('template/header_admin');
        $this->load->view('template/navbar_admin2');
        $data['pending']=$this->super_model->select_custom_where("personal_data","status='Pending' ORDER BY fullname ASC");
        $this->load->view('admin/admin_dashboard',$data);
        $this->load->view('template/footer_admin');
    }

    public function save_user(){
        $replace = [
            ' ' => '',
            '-' => '',
            '(' => '',
            ')' => '',
        ];
        $contact_no=str_replace(array_keys($replace), $replace, $this->input->post('contact_no'));
        $users = array(
            'username'=>$this->input->post('username'),
            'fullname'=>$this->input->post('fullname'),
            'password'=>'12345',
            'address'=>$this->input->post('address'),
            'contact_no'=>$contact_no,
            'email'=>$this->input->post('email'),
            'usertype'=>$this->input->post('usertype'),
        );
        $this->super_model->insert_into("users", $users);
    }

    public function edit_user_modal(){  
        $this->load->view('template/header_admin');
        $data['id']=$this->input->post('id');
        $id=$this->input->post('id');
        $data['users'] = $this->super_model->select_row_where('users', 'user_id', $id);
        $this->load->view('admin/edit_user_modal',$data);
    }

    public function update_user(){
        $replace = [
            ' ' => '',
            '-' => '',
            '(' => '',
            ')' => '',
        ];
        $contact_no=str_replace(array_keys($replace), $replace, $this->input->post('contact_no'));
        $data = array(
            'username'=>$this->input->post('username'),
            'fullname'=>$this->input->post('fullname'),
            'address'=>$this->input->post('address'),
            'contact_no'=>$contact_no,
            'email'=>$this->input->post('email'),
            'usertype'=>$this->input->post('usertype')
        );
        $userid = $this->input->post('userid');
        $this->super_model->update_where('users', $data, 'user_id', $userid);
    }

    public function approve_application(){
        $data = array(
            'status'=>'Approved'
        );
        $personal_id = $this->input->post('personal_id');
        $this->super_model->update_where('personal_data', $data, 'personal_id', $personal_id);
    }

    public function decline_application(){
        $data = array(
            'status'=>'Declined'
        );
        $personal_id = $this->input->post('personal_id');
        $this->super_model->update_where('personal_data', $data, 'personal_id', $personal_id);
    }

    public function admin_approved()
    {
        $this->load->view('template/header_admin');
        $this->load->view('template/navbar_admin2');
        $data['approved']=$this->super_model->select_custom_where("personal_data","status='Approved' ORDER BY fullname ASC");
        $this->load->view('admin/admin_approved',$data);
        $this->load->view('template/footer_admin');
    }

    public function send_data(){
        $data = array(
            'send_sms'=>'1'
        );
        $personal_id = $this->input->post('personal_id');
        $this->super_model->update_where('personal_data', $data, 'personal_id', $personal_id);
    }

    public function send_data1(){
        $message = [
            "secret" => "32617ce678355a77575b624f68c1e9f3f8912aa4", // your API secret from (Tools -> API Keys) page
            "mode" => "devices",
            "device" => "3004b3a3-743a-9831-8613-140476213168",
            "sim" => 1,
            "priority" => 1,
            "phone" => "+639850765914",
            "message" => "Trial Modes!"
        ];
        $cURL = curl_init("https://sms.uncgateway.com/api/send/sms");
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURL, CURLOPT_POSTFIELDS, $message);
        $response = curl_exec($cURL);
        curl_close($cURL);
        $result = json_decode($response, true);
        print_r($result);
    }

    public function admin_declined()
    {
        $this->load->view('template/header_admin');
        $this->load->view('template/navbar_admin2');
        $data['declined']=$this->super_model->select_custom_where("personal_data","status='Declined' ORDER BY fullname ASC");
        $this->load->view('admin/admin_declined',$data);
        $this->load->view('template/footer_admin');
    }

    
}