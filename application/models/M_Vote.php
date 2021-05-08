<?php
class M_Vote extends CI_Model{
    function hasil ($table,$data) {
		$this->db->where('NIS',$this->session->userdata('NIS'));
		$this->db->update ($table,$data);
	}
	function sudah ($table,$data2) {
		$this->db->where('NIS', $this->session->userdata('NIS'));
		$this->db->update($table,$data2);
	}
	function cek_keamanan ($table,$where1){
		return $this->db->get_where ($table,$where1);
	}
}