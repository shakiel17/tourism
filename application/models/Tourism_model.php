 <?php   
    date_default_timezone_set('Asia/Manila');
    class Tourism_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }
        public function authenticate($username,$password){
            $result=$this->db->query("SELECT u.username,c.companyname,c.company_id FROM users u INNER JOIN company c ON c.company_id=u.company_id WHERE u.username ='$username' AND u.`password` ='$password'");
            if($result->num_rows() > 0){
                return $result->row_array();
            }else{
                return false;
            }
        }
        public function admin_authenticate($username,$password){
            $result=$this->db->query("SELECT * FROM admin WHERE username ='$username' AND `password` ='$password'");
            if($result->num_rows() > 0){
                return $result->row_array();
            }else{
                return false;
            }
        }
        public function getSettings(){
            $result=$this->db->query("SELECT * FROM settings");
            if($result->num_rows()>0){
                return $result->row_array();
            }else{
                return false;
            }
        }
        public function save_about_us(){
            $description=$this->input->post('description');
            $name=$this->input->post('website_name');
            $contactno=$this->input->post('contactno');
            $address=$this->input->post('address');
            $email=$this->input->post('email');
            $location=$this->input->post('location');
            $check=$this->db->query("SELECT * FROM settings");
            if($check->num_rows()>0){
                if($location==""){
                    $result=$this->db->query("UPDATE settings SET about_us='$description',website_name='$name',contactno='$contactno',`address`='$address',email='$email'");
                }else{
                    $result=$this->db->query("UPDATE settings SET about_us='$description',website_name='$name',contactno='$contactno',`address`='$address',email='$email',`location`='$location'");
                }
            }else{
                $result=$this->db->query("INSERT INTO settings(website_name,contactno,`address`,email,`location`,about_us) VALUES('$name','$contactno','$address','$email','$location','$description')");
            }
            if($result){
                return true;
            }else{
                return false;
            }
        }
        public function getAllGallery(){
            $result=$this->db->query("SELECT * FROM gallery");
            return $result->result_array();
        }
        public function save_home_image(){
            $id=$this->input->post('id');
            $description=$this->input->post('description');
            $is_featured=$this->input->post('is_featured');
            $is_background=$this->input->post('is_background');
            if($_FILES["file"]["name"] != ""){
                $fileName=basename($_FILES["file"]["name"]);
                $fileType=pathinfo($fileName, PATHINFO_EXTENSION);
                $allowTypes = array('jpg','png','jpeg','gif');
                if(in_array($fileType,$allowTypes)){
                    $image = $_FILES["file"]["tmp_name"];
                    $imgContent=addslashes(file_get_contents($image));
                    if($id==""){
                        $result=$this->db->query("INSERT INTO gallery(`description`,`image`,is_featured,is_background) VALUES('$description','$imgContent','$is_featured','$is_background')");
                    }else{
                        $result=$this->db->query("UPDATE gallery SET `description`='$description',`image`='$imgContent',is_feactured='$is_featured',is_background='$is_background' WHERE id='$id'");
                    }
                }else{
                    return false;
                }
            }else{
                if($id==""){
                    $result=$this->db->query("INSERT INTO gallery(`description`,is_featured,is_background) VALUES('$description','$is_featured','$is_background')");
                }else{
                    $result=$this->db->query("UPDATE gallery SET `description`='$description',is_featured='$is_featured',is_background='$is_background' WHERE id='$id'");
                }
            }
            if($result){
                return true;
            }else{
                return false;
            }
        }
        public function getAllHomeImages(){
            $result=$this->db->query("SELECT * FROM gallery");
            return $result->result_array();
        }
        public function getAllStablishment($status){
            $result=$this->db->query("SELECT * FROM company WHERE `status`='$status'");
            return $result->result_array();
        }
        public function registration(){
            $company_id=date('YmdHis');
            $companyname=$this->input->post('companyname');
            $description=$this->input->post('description');
            $address=$this->input->post('address');
            $contactno=$this->input->post('contactno');
            $email=$this->input->post('email');
            $facebook=$this->input->post('facebook');
            $loc=$this->input->post('loc');
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $date=date('Y-m-d');
            $time=date('H:i:s');
            $check=$this->db->query("SELECT * FROM company WHERE companyname='$companyname' AND `status`='Approved'");
            if($check->num_rows()>0){
                return false;
            }else{
                $check=$this->db->query("SELECT * FROM users WHERE username='$username' AND company_id <> '$company_id'");
                if($check->num_rows()>0){
                    return false;
                }else{
                    $result=$this->db->query("INSERT INTO company(company_id,companyname,`description`,`address`,contactno,email,facebook,`location`) VALUES('$company_id','$companyname','$description','$address','$contactno','$email','$facebook','$loc')");
                }                
            }
            if($result){
                $this->db->query("INSERT INTO users(username,`password`,company_id) VALUES('$username','$password','$company_id')");
                return true;
            }else{
                return false;
            }            
        }
        public function update_application($id,$status){
            $result=$this->db->query("UPDATE company SET `status`='$status' WHERE company_id='$id'");
            if($result){
                return true;
            }else{
                return false;
            }
        }
        public function getAllStablishmentGallery(){
            $result=$this->db->query("SELECT cg.images,c.* FROM company_gallery cg INNER JOIN company c ON c.company_id=cg.company_id WHERE c.status='Approved' GROUP BY company_id");
            return $result->result_array();
        }        
        public function getStablishmentGallery($id){
            $result=$this->db->query("SELECT cg.images,c.*,cg.id as img_id FROM company_gallery cg INNER JOIN company c ON c.company_id=cg.company_id WHERE c.status='Approved' AND c.company_id='$id'");
            return $result->result_array();
        } 
        public function getStablishmentGalleryFeatured($id){
            $result=$this->db->query("SELECT cg.images,c.* FROM company_gallery cg LEFT JOIN company c ON c.company_id=cg.company_id WHERE c.status='Approved' AND c.company_id='$id' AND is_main='1'");
            if($result->num_rows() > 0){
                return $result->row_array();
            }else{
                return false;
            }
        }      
        public function save_gallery(){
            $id=$this->session->company_id;   
            $is_featured=$this->input->post('is_featured');
            if($_FILES["file"]["name"] != ""){
                $fileName=basename($_FILES["file"]["name"]);
                $fileType=pathinfo($fileName, PATHINFO_EXTENSION);
                $allowTypes = array('jpg','png','jpeg','gif');
                if(in_array($fileType,$allowTypes)){
                    $image = $_FILES["file"]["tmp_name"];
                    $imgContent=addslashes(file_get_contents($image));                    
                    $result=$this->db->query("INSERT INTO company_gallery(company_id,`images`,is_main) VALUES('$id','$imgContent','$is_featured')");                    
                }else{
                    return false;
                }
            }
            if($result){
                return true;
            }else{
                return false;
            }
        }
        public function delete_gallery($id){
            $result=$this->db->query("DELETE FROM company_gallery WHERE id='$id'");
            if($result){
                return true;
            }else{
                return false;
            }
        }
        public function getStablishmentProfile($id){
            $result=$this->db->query("SELECT * FROM company WHERE company_id='$id'");
            return $result->row_array();        
        }

        public function update_company_profile(){
            $company_id=$this->session->company_id;
            $companyname=$this->input->post('companyname');
            $description=$this->input->post('description');
            $address=$this->input->post('address');
            $contactno=$this->input->post('contactno');
            $email=$this->input->post('email');
            $facebook=$this->input->post('facebook');
            $location=$this->input->post('location');
            $loc=$this->input->post('loc');     
            
            $result=$this->db->query("UPDATE company SET companyname='$companyname',`description`='$description',`address`='$address',contactno='$contactno',email='$email',facebook='$facebook',`location`='$location' WHERE company_id='$company_id'");
            if($result){                
                return true;
            }else{
                return false;
            }            
        }

    }
?>