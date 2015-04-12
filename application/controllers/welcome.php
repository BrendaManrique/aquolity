<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function addResult()
	{
		// $this->load->library('form_validation');
		// $this->form_validation->set_rules('newresult','Ruke','required');
		// $this->form_validation->set_rules('newpassword','Password');

		// if($this->form_validation-> run()==FALSE)
		// {
		// 	//Errores
		// 	// $this->load->view('index');
		// }
		// else{
			//Todo está bien
			$newresult = $this->input->post('newresult');
			$newpassword = $this->input->post('newpassword');
		// }
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */