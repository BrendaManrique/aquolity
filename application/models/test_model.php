<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
		$this->load->database();
    }
	
	public function update($data) 
	{
		//var_dump("mis datos:".$data['res_username']);
		// if ($value == NULL ||count($value) < 1  || !ctype_alnum($value))
		// {
		// 	// $value was empty or contained non alpha-numeric characters
		// 	return FALSE;
		// }


		$value = array('res_username' => $data['res_username'], 
			'id_test' => $data['id_test'], 
			'res_lat' => $data['res_lat'], 
			'res_long' => $data['res_long'],
			'res_description' => $data['res_description'] );

		$this->db->insert('tbl_result',$value);
		//echo $this->db->last_query();
		
		if ($this->db->affected_rows() == 1)
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}
}