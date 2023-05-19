<?php
class User_model extends CI_Model
{
function create($formArray)
{
	$this->db->insert('students',$formArray);
}
}

?>
