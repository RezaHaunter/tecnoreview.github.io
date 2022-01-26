<?php 
class Auth extends CI_Model 
{

	public function __construct()
	{
        parent::__construct();
	}

	function register($email,$password,$username)
	{
		$data_user = array(
			'email'=>$email,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
			'username'=>$username
		);
		$this->db->insert('users',$data_user);
	}

	function login_user($email,$password)
	{
        $query = $this->db->get_where('users',array('email'=>$email));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('email',$email);
				$this->session->set_userdata('username',$data_user->username);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('login');
		}
    }
}
?>