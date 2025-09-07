 <?php   
    date_default_timezone_set('Asia/Manila');
    class Tourism_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }
        public function authenticate($username,$password){
            $result=$this->db->query("SELECT * FROM users WHERE username ='$username' AND `password` ='$password'");
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
    }
?>