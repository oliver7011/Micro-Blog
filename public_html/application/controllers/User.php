<?php
class User extends CI_Controller {




	public function login()
	{
		$this->load->view('Login');
	}


	public function view($name)
	{
	$this->load->library('session');
	$sessionName = $this->session->userdata('username');
	$this->load->model('Messages_model');
	$this->load->model('Users_model');
	$datas = $this->Messages_model->getMessagesByPoster($name);
	$toSend = "";
	foreach ($datas->result_array() as $row)
	{
		$toSend .= "<p class='line'><p2 class='name'>" . $row['user_username'];
		$toSend .=  ' | </p2>';
		$toSend .=  $row['text'] ." | ". date("d-m-Y h:i A",strtotime($row['posted_at']))  . "</p>";
	}
	$isFollowing = $this->Users_model->isFollowing($sessionName,$name);
	if ($isFollowing == false && $sessionName != $name) {
		$toSend .=  "<form action='http://raptor.kent.ac.uk/proj/comp5390/microblog/ossm2/index.php/user/follow/'" . $name . '><input type="submit" value="Follow" /></form>';

	}
	$data['output'] = $toSend;
	$data['username'] = $sessionName;
	$data['feedURL'] = "https://raptor.kent.ac.uk/proj/comp5390/microblog/ossm2/index.php/user/view/" . $sessionName;
	$data['viewURL'] = "https://raptor.kent.ac.uk/proj/comp5390/microblog/ossm2/index.php/user/view/" . $sessionName;
	$this->load->view('ViewMessages',$data);
	}

	public function doLogin() {
		$this->load->model('Users_model');
		$this->load->library('session');

		$username = $this->input->post('uname', True);
		$password = $this->input->post('pword', True);

		$result = $this->Users_model->checkLogin($username,$password);

		if ($result == TRUE) {
			$this->session->set_userdata('username', $username);
			$this->view($username);

		} else {
			$this->load->view('Login');
			echo "Incorrect Login";
		}

	}

	public function logout() {
		$this->load->library('session');
		$this->session->unset_userdata('username');
		$this->load->view('Login');
	}

	public function feed($name) {
		$this->load->model('Messages_model');
                $this->load->library('session');
		$sessionName = $this->session->userdata('username');
		$feed = $this->Messages_model->getFollowedMessages($name);
		$stringb = "";
		foreach ($feed as $row)
		{
		$stringb .= $row;
		}

		$data['output'] = $stringb;
		$data['username'] = $sessionName;
		$data['feedURL'] = "https://raptor.kent.ac.uk/proj/comp5390/microblog/ossm2/index.php/user/feed/" . $name;
		$data['myMessagesURL'] = "https://raptor.kent.ac.uk/proj/comp5390/microblog/ossm2/index.php/user/view/" . $name;
		$this->load->view('ViewMessages',$data);


	}

	public function follow($name) {
		$this->load->library('session');
		$sessionName = $this->session->userdata('username');
		$this->load->model('Users_model');
		$this->Users_model->follow($sessionName,$name);
		$this->load->view('Login/'.$name);
	}

}
