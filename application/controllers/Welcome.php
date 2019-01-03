<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
            
         
		$this->load->view('header');       

        $this->load->view('ui');
        
        $this->load->view('footer');       

               
	}
	public function a()
        {
        $a= $this->input->post('a');
       $b=$this->input->post('b');   
       $c= $this->input->post('c');    
      
       $d=$this->input->post('d');
        $e=$this->input->post('e');        
       $f=$this->input->post('f');
        
        $g=$this->input->post('g');

        $h=$this->input->post('h');
        
        $i=$this->input->post('i');

        $p=$this->input->post('i');

        $pin=$this->input->post('pin');

       
        $this->load->model('Dbmodel');

        $this->Dbmodel->uf($a,$b,$c,$d,$e,$f,$g,$h,$pin);
        $this->session->set_flashdata('status','Data Uploaded Successfull ');
		$this->session->set_userdata('username',$a );
		$this->session->set_userdata('usersurname',$b );
        $this->session->set_userdata('emailsess',$c );
        $userdata=  $this->Dbmodel->getuserdetails();
        $data['userdata']=$userdata;
         foreach($userdata as $user){ 
            if($user->a == $a && $user->b == $b && $user->c == $c  ){
                $id = $user->iduf;
                $this->session->set_userdata('userid',$id );
            }
        }
      
		redirect(base_url() . 'Managementcontrol/getproducts');
        }



}
