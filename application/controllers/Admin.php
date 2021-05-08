<?php
class Home extends CI_Controller {
	function __construct () {
		parent::__construct ();
		$this->load->model ('M_Login');
	}
	function index () {
		$this->load->dbutil();
        $sql="select * from peserta";
        $query= $this->db->query($sql);
        $config = array(
            'root' => 'root',
            'element' => 'element',
            'newline' => '\n',
            'tab' => '\t'
        );
        
        echo $this->dbutil->xml_from_result($query, $config);
	}  
    
}