<?php
class Messages_model extends CI_Model {

	public function getMessagesByPoster($name) {
		$this->load->database();
		$query = "select user_username,text,posted_at from Messages where user_username = '" . $name ."' ORDER BY posted_at ASC";

		$result = $this->db->query($query);

		return $result;
	}

	public function searchMessages($strings) {
                $this->load->database();
                $query = "select user_username,text,posted_at from Messages where text LIKE '%" . $strings ."%' ORDER BY posted_at ASC";

                $result = $this->db->query($query);

                return $result;

	}

	public function insertMessages($poster,$string) {
		$this->load->database();
		$data = array(
			'user_username' => $poster,
			'text' => $string,
			'posted_at' => @date('Y-m-d H:i:s')  
		);
		$this->db->insert('Messages', $data);
	}

	public function getFollowedMessages($name) {
		$this->load->database();

		$query = "select user_username,text,posted_at from Messages INNER JOIN User_Follows ON Messages.user_username = User_Follows.followed_username where User_Follows.follower_username = '" . $name . "' ORDER BY posted_at DESC";
		$Following = $this->db->query($query);

		$data = array();


		foreach ($Following->result_array() as $message) {
			array_push($data,"<div class='line'> <a href='https://raptor.kent.ac.uk/proj/comp5390/microblog/ossm2/index.php/user/view/" . $message['user_username'] . "' class='name'>".$message['user_username']. "</a> | ".$message['text']." | ".date("d-m-Y h:i A",strtotime($message['posted_at']))."</div>");


		}
		return $data;
	}


}
