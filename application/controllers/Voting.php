<?php
class Voting extends CI_Controller {
	function __construct () {
		parent::__construct ();
		$this->load->model ('M_Vote');
	}
	function index () {
		$this->load->view ('PILKETOS 2018 Fix/vote-page');
	}        
        function RERE() {
        $where1= array (
			'NIS'=>$this->session->userdata('NIS'),
			'Status'=>1
			);
		$cek1=$this->M_Vote->cek_keamanan("peserta",$where1)->num_rows(); //biar gak bolak-balik vote
		$data= array (
		'RERE'=>1
		);
		$data2= array (
		'NIS' => $this->session->userdata('NIS'),
		'Status'=>1
		);
		if ($cek1<=0) {
		$this->M_Vote->hasil("hasil",$data);
		$this->M_Vote->sudah("peserta",$data2);
            redirect (site_url('Habis'));
        }else{
            redirect (site_url('Home'));
        }
        }
   function ZHARFAN() {
        $where1= array (
			'NIS'=>$this->session->userdata('NIS'),
			'Status'=>1
			);
		$cek1=$this->M_Vote->cek_keamanan("peserta",$where1)->num_rows(); //biar gak bolak-balik vote
		$data= array (
		'ZHARFAN'=>1
		);
		$data2= array (
		'NIS' => $this->session->userdata('NIS'),
		'Status'=>1
		);
		if ($cek1<=0) {
		$this->M_Vote->hasil("hasil",$data);
		$this->M_Vote->sudah("peserta",$data2);
             redirect (site_url('Habis'));
        }
        
    else{
            redirect (site_url('Home'));
        }
   }
   function FARAH() {
        $where1= array (
			'NIS'=>$this->session->userdata('NIS'),
			'Status'=>1
			);
		$cek1=$this->M_Vote->cek_keamanan("peserta",$where1)->num_rows(); //biar gak bolak-balik vote
		$data= array (
		'FARAH'=>1
		);
		$data2= array (
		'NIS' => $this->session->userdata('NIS'),
		'Status'=>1
		);
		if ($cek1<=0) {
		$this->M_Vote->hasil("hasil",$data);
		$this->M_Vote->sudah("peserta",$data2);
             redirect (site_url('Habis'));
        }
       else{
            redirect (site_url('Home'));
        }
       
   }
    


        
        
    }
