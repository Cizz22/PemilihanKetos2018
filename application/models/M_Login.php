<?php
class M_Login extends CI_Model {
	function Login($table,$data) {
		return $this->db->get_where($table,$data);
}
}