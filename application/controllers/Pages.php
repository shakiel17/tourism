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
            $data['carousel'] = $this->Tourism_model->getAllHomeImages();
            $data['gallery'] = $this->Tourism_model->getAllStablishment('Approved');
            $data['company_gallery'] = $this->Tourism_model->getAllStablishmentGallery();
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
            $data['carousel'] = $this->Tourism_model->getAllHomeImages();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar',$data);            
            $this->load->view('pages/user/'.$page,$data);            
            $this->load->view('templates/footer',$data);        
        }
        public function company($id){
            $page = "company";
            if(!file_exists(APPPATH.'views/pages/user/'.$page.".php")){
                show_404();
            }
            $data['detail'] = $this->Tourism_model->getSettings();
            $data['home'] = '';
            $data['about'] = '';            
            $data['background'] = $this->Tourism_model->getStablishmentGalleryFeatured($id);
            $data['gallery'] = $this->Tourism_model->getStablishmentGallery($id);
            $this->load->view('templates/header');
            $this->load->view('templates/navbar',$data);            
            $this->load->view('pages/user/'.$page,$data);            
            $this->load->view('templates/footer',$data);        
        }
        //======================================User Module=======================================================
        //======================================Company Module====================================================
        public function register(){
            $page = "register";
            if(!file_exists(APPPATH.'views/pages/user/'.$page.".php")){
                show_404();
            }
            $this->load->view('pages/user/'.$page);             
        }
        public function registration(){
            $register=$this->Tourism_model->registration();
            echo "<script>";
            if($register){
                echo "alert('Registration details successfully submitted! Thank you for your interest. Please wait for the administrator to approve or decline your application.');";
            }else{
                echo "alert('Unable to submit registration!');";
            }
                echo "window.location='".base_url('register')."';";
            echo "</script>";
        }
        public function login(){
            $page = "login";
            if(!file_exists(APPPATH.'views/pages/company/'.$page.".php")){
                show_404();
            }
            $this->load->view('pages/company/'.$page);             
        }
        public function authenticate(){
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $authenticate=$this->Tourism_model->authenticate($username,$password);
            if($authenticate){
                $user_data = array(
                    'username' => $username,
                    'company_id' => $authenticate['company_id'],
                    'fullname' => $authenticate['companyname'],
                    'user_login' => true
                );
                $this->session->set_userdata($user_data);
                redirect(base_url('main'));
            }else{
                $this->session->set_flashdata('error','Invalid username or password!');
                redirect(base_url('login'));
            }
        }
        public function main(){
            $page = "main";
            if(!file_exists(APPPATH.'views/pages/company/'.$page.".php")){
                show_404();
            }             
            if($this->session->user_login){

            }else{
                $this->session->set_flashdata('error','You are not logged in!');
                redirect(base_url('login'));
            }            
            $data['title'] = "Dashboard";            
            $this->load->view('templates/company/header');            
            $this->load->view('templates/company/sidebar');
            $this->load->view('templates/company/navbar');
            $this->load->view('pages/company/'.$page,$data);
            $this->load->view('templates/company/modal');
            $this->load->view('templates/company/footer');
        }
        public function logout(){
            $data=array('username','fullname','user_login');
            $this->session->unset_userdata($data);
            redirect(base_url('login'));
        }
        public function company_gallery(){
            $page = "gallery";
            if(!file_exists(APPPATH.'views/pages/company/'.$page.".php")){
                show_404();
            }             
            if($this->session->user_login){

            }else{
                $this->session->set_flashdata('error','You are not logged in!');
                redirect(base_url('login'));
            }            
            $data['title'] = "My Gallery";            
            $data['items'] = $this->Tourism_model->getStablishmentGallery($this->session->company_id);
            $this->load->view('templates/company/header');            
            $this->load->view('templates/company/sidebar');
            $this->load->view('templates/company/navbar');
            $this->load->view('pages/company/'.$page,$data);
            $this->load->view('templates/company/modal');
            $this->load->view('templates/company/footer');
        }
        public function save_gallery(){
            $save=$this->Tourism_model->save_gallery();
            if($save){
                $this->session->set_flashdata('success','Image details successfully saved!');
            }else{
                $this->session->set_flashdata('failed','Unbale to save image details!');
            }
            redirect(base_url('company_gallery'));
        }
        public function delete_gallery($id){
            $save=$this->Tourism_model->delete_gallery($id);
            if($save){
                $this->session->set_flashdata('success','Image details successfully deleted!');
            }else{
                $this->session->set_flashdata('failed','Unbale to delete image details!');
            }
            redirect(base_url('company_gallery'));
        }
        public function company_profile(){
            $page = "profile";
            if(!file_exists(APPPATH.'views/pages/company/'.$page.".php")){
                show_404();
            }             
            if($this->session->user_login){

            }else{
                $this->session->set_flashdata('error','You are not logged in!');
                redirect(base_url('login'));
            }            
            $data['title'] = "My Profile";            
            $data['item'] = $this->Tourism_model->getStablishmentProfile($this->session->company_id);
            $this->load->view('templates/company/header');            
            $this->load->view('templates/company/sidebar');
            $this->load->view('templates/company/navbar');
            $this->load->view('pages/company/'.$page,$data);
            $this->load->view('templates/company/modal');
            $this->load->view('templates/company/footer');
        }
        public function update_company_profile(){
            $save=$this->Tourism_model->update_company_profile();
            if($save){
                $this->session->set_flashdata('success','Profile successfully updated!');
            }else{
                $this->session->set_flashdata('failed','Unbale to update profile!');
            }
            redirect(base_url('company_profile'));
        }
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
                $this->session->set_flashdata('failed','Unbale to update image details!');
            }
            redirect(base_url('manage_home_image'));
        }
        public function stablishment(){
            $page = "stablishment";
            if(!file_exists(APPPATH.'views/pages/admin/'.$page.".php")){
                show_404();
            }             
            if($this->session->admin_login){

            }else{
                $this->session->set_flashdata('error','You are not logged in!');
                redirect(base_url('admin'));
            }            
            $data['title'] = "Stablishment List"; 
            $data['items'] = $this->Tourism_model->getAllStablishment('Approved');
            $this->load->view('templates/admin/header');            
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/navbar');
            $this->load->view('pages/admin/'.$page,$data);
            $this->load->view('templates/admin/modal');
            $this->load->view('templates/admin/footer');
        }
        public function manage_company_registration(){
            $page = "company_registration";
            if(!file_exists(APPPATH.'views/pages/admin/'.$page.".php")){
                show_404();
            }             
            if($this->session->admin_login){

            }else{
                $this->session->set_flashdata('error','You are not logged in!');
                redirect(base_url('admin'));
            }            
            $data['title'] = "Stablishment Application"; 
            $data['items'] = $this->Tourism_model->getAllStablishment('pending');
            $this->load->view('templates/admin/header');            
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/navbar');
            $this->load->view('pages/admin/'.$page,$data);
            $this->load->view('templates/admin/modal');
            $this->load->view('templates/admin/footer');
        }
        public function update_application($id,$status){
            $save=$this->Tourism_model->update_application($id,$status);
            if($save){
                $this->session->set_flashdata('success','Application status successfully updated!');
            }else{
                $this->session->set_flashdata('failed','Unbale to update application status!');
            }
            redirect(base_url('manage_company_registration'));
        }
        //======================================Admin Module====================================================
    }
?>
