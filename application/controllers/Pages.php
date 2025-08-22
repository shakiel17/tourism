<?php
    ini_set('max_execution_time', 0);
    ini_set('memory_limit','2048M');
    date_default_timezone_set('Asia/Manila');
    class Pages extends CI_Controller{
        //======================================User Module=======================================================
        public function index(){
            $page = "index";
            if(!file_exists(APPPATH.'views/pages/user/'.$page.".php")){
                show_404();
            }
            $data['detail'] = $this->Tourism_model->getSettings();
            $data['home'] = 'active';
            $data['about'] = '';
            $this->load->view('templates/header');
            $this->load->view('templates/navbar',$data);            
            $this->load->view('pages/user/'.$page,$data);            
            $this->load->view('templates/footer',$data);        
        }
        public function about(){
            $page = "about";
            if(!file_exists(APPPATH.'views/pages/user/'.$page.".php")){
                show_404();
            }
            $data['detail'] = $this->Tourism_model->getSettings();
            $data['home'] = '';
            $data['about'] = 'active';
            $this->load->view('templates/header');
            $this->load->view('templates/navbar',$data);            
            $this->load->view('pages/user/'.$page,$data);            
            $this->load->view('templates/footer',$data);        
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
        public function manage_about_us(){
            $page = "about_us";
            if(!file_exists(APPPATH.'views/pages/admin/'.$page.".php")){
                show_404();
            }             
            if($this->session->admin_login){

            }else{
                $this->session->set_flashdata('error','You are not logged in!');
                redirect(base_url('admin'));
            }            
            $data['title'] = "Manage About Us"; 
            $data['about'] = $this->Tourism_model->getSettings();
            $this->load->view('templates/admin/header');            
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/navbar');
            $this->load->view('pages/admin/'.$page,$data);
            $this->load->view('templates/admin/modal');
            $this->load->view('templates/admin/footer');
        }
        public function save_about_us(){
            $save=$this->Tourism_model->save_about_us();
            if($save){
                $this->session->set_flashdata('success','About us details successfully updated!');
            }else{
                $this->session->set_flashdata('failed','Unbale to update about us details!');
            }
            redirect(base_url('manage_about_us'));
        }
        public function manage_home_image(){
            $page = "home_image";
            if(!file_exists(APPPATH.'views/pages/admin/'.$page.".php")){
                show_404();
            }             
            if($this->session->admin_login){

            }else{
                $this->session->set_flashdata('error','You are not logged in!');
                redirect(base_url('admin'));
            }            
            $data['title'] = "Manage Images"; 
            $data['gallery'] = $this->Tourism_model->getAllGallery();
            $this->load->view('templates/admin/header');            
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/navbar');
            $this->load->view('pages/admin/'.$page,$data);
            $this->load->view('templates/admin/modal');
            $this->load->view('templates/admin/footer');
        }
        public function save_home_image(){
            $save=$this->Tourism_model->save_home_image();
            if($save){
                $this->session->set_flashdata('success','Image details successfully updated!');
            }else{
                $this->session->set_flashdata('failed','Unbale to update iamge details!');
            }
            redirect(base_url('manage_home_image'));
        }
        //======================================Admin Module====================================================
    }
?>
