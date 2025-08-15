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
    }
?>