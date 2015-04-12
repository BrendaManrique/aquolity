<?php 

class MapController extends CI_Controller {

	// function index()
	// {
	// 	$this->addResult();
	// }
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
			// echo $newresult;
			$this->Result_model->addResult($newresult, $newpassword);
		// }

		
	}
}