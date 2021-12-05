<?php
class Message extends CI_Controller {

    public function index()
    {
        $this->load->library('session');
		if ($this->session->userdata('username') == NULL) {
			$this->load->view('Login');
        } else {
	    $data['username'] = $this->session->userdata('username');
            $this->load->view('Post',$data);
        }
    }

	public function doPost() {
        $this->load->library('session');
        $this->load->helper('url');
		$sessionName = $this->session->userdata('username');
		if ($sessionName == NULL) {
		$data['username'] = $sessionName;
		$this->load->view('Login',$data);
		} else {
			$this->load->model('Messages_model');
			$messageString = $this->input->post('newPost', TRUE);
			$this->Messages_model->insertMessages($sessionName,$messageString);

			redirect('http://raptor.kent.ac.uk/proj/comp5390/microblog/ossm2/index.php/user/view/'.$sessionName,'refresh');
		}
	}
}
