<?php
class Users_model extends CI_Model {

	public function checkLogin($username,$pass)
	{
		$this->load->database();
		$this->load->library('encryption');
		$encrypted_password = sha1($pass);

		$Uquery = "select username from Users where username = '" . $username ."'";
		$Pquery = "select password from Users where username = '" . $username ."'";
        $Uresult = $this->db->query($Uquery);
		$Presult = $this->db->query($Pquery);

		foreach ($Uresult->result_array() as $user) {
			
			if ($user['username'] == $username) {
				foreach ($Presult->result_array() as $pass) {
					
					if ($pass['password'] == $encrypted_password) {
						return true;
					}
				}

				

			}
		}

		return false;


	}

	public function isFollowing($follower,$followed) {
		$this->load->database();
		$query = "select followed_username from User_Follows where follower_username = '" . $follower . "'";	
		$result = $this->db->query($query);
		foreach ($result->result_array() as $followed) {
			if ($followed['followed_username'] == $follower) {
				return true;
			}
		}
		return false;
	}

	public function follow($follower,$followed) {
		$this->load->database();
		$data = array(
			'follower_username' => $follower,
			'followed_username' => $followed
		);	
		$this->db->insert('User_Follows', $data);
	}
}
