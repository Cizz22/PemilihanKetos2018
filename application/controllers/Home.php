<?php
class Home extends CI_Controller {
	function __construct () {
		parent::__construct ();
		$this->load->model ('M_Login');
	}
	function index () {
		$this->load->view ('PILKETOS 2018 Fix/index');
	}
    function Login(){
        $user=$this->input->post('user');
        $pass=$this->input->post('pass');
        
        $data0=array(
        'NIS'=>$user,
        'Password'=>$pass
         );
        $data1=array(
        'NIS'=>$user,
        'Password'=>$pass,
        'Status'=>0
        );


    
$cek0=$this->M_Login->Login("peserta",$data0)->num_rows();
$cek1=$this->M_Login->Login("peserta",$data1)->num_rows();
            

    
    if($cek0>0){
			if ($cek1>0){ //cek kesudahan
            $this->session->set_userdata($data1);
            redirect(site_url('Voting'));
            }else{
                redirect(site_url('Sudah'));
            }
}else{
        redirect(site_url('Salah'));
    }
}
    function log_out () { //session destroy untuk logout
		$this->session->sess_destroy();
		redirect(site_url('Home'));
	}
}