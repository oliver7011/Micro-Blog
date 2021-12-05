<?php
class Search extends CI_Controller {


	public function index()
	{
		$this->load->library('session');
		$name = $this->session->userdata('username');
		$data['username'] = $name;
		$this->load->view('Search',$data);


	}


        public function dosearch($strings)
        {
        	$this->load->library('session');
        	$name = $this->session->userdata('username');
		if ($strings == 'qstring')
		{
			$strings = $this->input->get('search', TRUE);
		}
		$this->load->model('Messages_model');
		$datas = $this->Messages_model->searchMessages($strings);
		$stringb = "";
		foreach ($datas->result_array() as $row)
                {
		$stringb .= "<div class='line'> <p2 class='name'>".$row['user_username']. "</p2> | ".$row['text']."</div>";

                }



		$data['output'] = $stringb;


		$data['username'] = $name;

		$this->load->view('ViewMessages',$data);
        }
}
