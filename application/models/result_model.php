<?php 
class Result_model extends Model{
	function Result_model()
	{
		parent::Model();
	}
	funtion addResult($newresult,$newpassword)
	{
		$sha1_password = sha1($newpassword);
		$query_str="Insert INTO tbl_result(name_result,password) VALUES (?,?)";
		$this->db->query($query_str, array($newresult, $sha1_password));
	}
} ?>