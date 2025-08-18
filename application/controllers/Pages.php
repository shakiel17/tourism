<?php
    ini_set('max_execution_time', 0);
    ini_set('memory_limit','2048M');
    date_default_timezone_set('Asia/Manila');
    class Pages extends CI_Controller{
        //======================================User Module=======================================================
        public function index(){
            $page = "index";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }
            if($this->session->user_login){
                redirect(base_url()."main");
            }
            $this->load->view('pages/'.$page);            
        }
        public function authenticate(){
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $authenticate=$this->Payroll_model->authenticate($username,$password);
            if($authenticate){
                $user_data = array(
                    'username' => $username,
                    'fullname' => $authenticate['fullname'],
                    'user_login' => true,
                    'is_admin' => $authenticate['is_admin'],
                    'branch' => $authenticate['branch']
                );
                $this->session->set_userdata($user_data);
                redirect(base_url()."main");
            }else{
                $this->session->set_flashdata('error','Invalid username or password!');
                redirect(base_url());
            }
        }
        public function logout(){
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('fullname');
            $this->session->unset_userdata('user_login');
            $this->session->unset_userdata('is_admin');
            redirect(base_url());
        }
        public function main(){
            $page = "main";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }             
            if($this->session->user_login){

            }else{
                $this->session->set_flashdata('error','You are not logged in!');
                redirect(base_url());
            }
            $date=date('Y-m-d');
            $prev_date=date('Y-m-d',strtotime('-1 day',strtotime($date)));
            $data['title'] = "Dashboard";
            $data['tdc'] = $this->Payroll_model->getAllCustomerByDate("TDC",$date);
            $data['pdc'] = $this->Payroll_model->getAllCustomerByDate("PDC",$date);
            $data['previous_tdc'] = $this->Payroll_model->getAllCustomerByDate("TDC",$prev_date);
            $data['previous_pdc'] = $this->Payroll_model->getAllCustomerByDate("PDC",$prev_date);
            $data['employee'] = $this->Payroll_model->getAllEmployee();
            $data['trainee'] = $this->Payroll_model->getAllTraineeByDate($date);
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');
        }
        //======================================User Module=======================================================
        //======================================Company Module====================================================

        //======================================Company Module====================================================

        //======================================Admin Module====================================================
        public function admin(){
            $page = "index";
            if(!file_exists(APPPATH.'views/pages/admin/'.$page.".php")){
                show_404();
            }
            if($this->session->admin_login){
                redirect(base_url()."admin_main");
            }
            $this->load->view('templates/admin/header'); 
            $this->load->view('pages/admin/'.$page);  
            $this->load->view('templates/admin/footer');          
        }
        public function admin_authenticate(){
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $authenticate=$this->Tourism_model->admin_authenticate($username,$password);
            if($authenticate){
                $user_data = array(
                    'username' => $username,
                    'fullname' => $authenticate['fullname'],
                    'admin_login' => true
                );
                $this->session->set_userdata($user_data);
                redirect(base_url('admin_main'));
            }else{
                $this->session->set_flashdata('error','Invalid username or password!');
                redirect(base_url('admin'));
            }
        }
        public function admin_main(){
            $page = "main";
            if(!file_exists(APPPATH.'views/pages/admin/'.$page.".php")){
                show_404();
            }             
            if($this->session->admin_login){

            }else{
                $this->session->set_flashdata('error','You are not logged in!');
                redirect(base_url('admin'));
            }            
            $data['title'] = "Dashboard";            
            $this->load->view('templates/admin/header');            
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/navbar');
            $this->load->view('pages/admin/'.$page,$data);
            $this->load->view('templates/admin/modal');
            $this->load->view('templates/admin/footer');
        }
        public function adminlogout(){
            $data=array('username','fullname','admin_login');
            $this->session->unset_userdata($data);
            redirect(base_url('admin'));
        }
        //======================================Admin Module====================================================
    }
?>
