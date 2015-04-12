<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		$this->load->library('session');
		$this->load->helper('url');
		
	}

	public function index()
	{
		// Show main web page

		 $this->load->view('test_index');
	}

	public function update()
	{
		// Update the database
		// $array=$_POST;
		$this->load->model('Test_model');
		//$data['message'] = ($this->Test_model->update($this->input->post('res_username'))) ? "Database updated" : "Update failed";
		$data = array(
		'res_username' => $this->input->post('res_username'),
	   'id_test' => $this->input->post('id_test'),
	   'res_lat' => $this->input->post('res_lat'),
	   'res_long' => $this->input->post('res_long'),
	   'res_description' => $this->input->post('res_description'));
		//var_dump($data);
		// Transfering Data To Model
	   // $data['message'] =($this->Test_model->update($data))? "Datos guardados" : "Sucedió una falla al guardar datos. Intente de nuevo por favor.";
		$success=$this->Test_model->update($data);
	   echo $success;
	}

	function position_item()
	{   
	    $geojson = array( 'type' => 'FeatureCollection', 'features' => array() );

	    $query=$this->db->query("SELECT * FROM tbl_result");
	    foreach($query->result_array() as $row)
	    {
	        $feature = array( 'type' => 'Feature', 
	          'geometry' => array(
	          'type' => 'Point',
	          'coordinates' => array( (float)$row['res_long'], (float)$row['res_lat'])),
	          'properties' => array(
	          'res_username' => $row['res_username'],
	          'description' => $row['res_description'],
	          'id_test' => $row['id_test'],               
	          'show_on_map'=>'true',
	          'color' => 'blue'//$row['color'],
	 			)
	        );
	        array_push($geojson['features'], $feature);
	    }
	    echo json_encode($geojson);
	}
}

