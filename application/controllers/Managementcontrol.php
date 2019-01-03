<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Managementcontrol  extends CI_Controller {
        // function __construct() {
        //         $this->load->helper('url');
        //     }

        public function insertcart() {

                $userid=$this->input->post('userid'); 
                $username= $this->input->post('username');
                $usermail= $this->input->post('usermail');   
                $phonenum= $this->input->post('phonenum');   
                $pincode= $this->input->post('pincode');   
                $productid= $this->input->post('productid');
                 $productname=$this->input->post('productname');   
                $price= $this->input->post('price');     
                $productimg=$this->input->post('productimg');
                $description=$this->input->post('description');        
                 $fromdata=$this->input->post('fromdata');
                $time = strtotime($fromdata);
                $fromdata = date('Y-m-d',$time);
                $todata=$this->input->post('todata');
                $time = strtotime($todata);
                $todata = date('Y-m-d',$time);
                $date1=date_create($fromdata);
                $date2=date_create($todata);
                $diff=date_diff($date1,$date2);
                $days =  $diff->format("%R%a days") + 1;
                $totalprice = $price * $days;
                $this->load->model('Dbmodel');
//                SELECT `id`, `userid`, `username`, `usermail`, `productid`, `produtname`, `productimg`, `productprice`, `productstratdate`, `productenddate`, `description`, `days`, `pincode`, `totalprice`, `phonenum` FROM `cartdetails` WHERE 1
                $this->Dbmodel->insertdatatocart($userid,$username,$usermail,$productid,$productname,$price,$productimg,$description,$fromdata,$todata,$days,$pincode,$totalprice,$phonenum);
//                $this->session->set_flashdata('status','Data Uploaded Successfull ');
                // redirect(base_url('Managementcontrol/getthisproducts?id=<?php echo $projItem->productid; 
                 $this->load->view('product',$data);
                redirect(base_url().'Managementcontrol/showcart?id='.$userid);

        }
        public function walletpay() {

          $userid=$this->input->post('userid'); 
          $username= $this->input->post('username');
          $usermail= $this->input->post('usermail');               
          $Amountnow= $this->input->post('amountnow');
           $date=$this->input->post('date');   
          $BankName= $this->input->post('BankName');     
          // $productimg=$this->input->post('productimg');
          // $description=$this->input->post('description');  
          $utilized = 0;
          $transactionid = 123  ;
          $this->load->model('Dbmodel');
          $this->Dbmodel->insertpayment($userid,$username,$usermail,$Amountnow,$date,$BankName,$utilized,$transactionid);
          $this->session->set_flashdata('status','Data Uploaded Successfull ');
          // redirect(base_url('Managementcontrol/getthisproducts?id=<?php echo $projItem->productid; 
          // $this->load->view('product',$data);
          redirect(base_url().'Managementcontrol/showcart?id='.$userid);

  }
  
  public function Finalbooking()
        {
          $userid=$this->input->post('userid'); 
          $username= $this->input->post('username');
          $usermail= $this->input->post('usermail');               
          $productid= $this->input->post('$productidall');
           $produtname=$this->input->post('$productnameall');  
          $productprice= $this->input->post('productprice');
          $balval= $this->input->post('balval');     
          $finalbal=$this->input->post('finalbal');
           $dateone=$this->input->post('$productstartall');
            $datelast=$this->input->post('$productlastall');
            print_r($datelast);
             $vendoridall=$this->input->post('vendoridall');
            $vendornameall=$this->input->post('vendornameall');
            $pincode = $this->input->post('pincode');
             $priceall = $this->input->post('priceall');
             $days = $this->input->post('days');

            $this->load->model('Dbmodel');
          $this->Dbmodel->getproducttouser($userid,$username,$usermail,$productid,$produtname,$productprice,$balval,$finalbal,$dateone,$datelast,$vendoridall,$vendornameall,$pincode,$priceall,$days);

//            redirect(base_url() . 'Managementcontrol/userproduct?id='.$userid);
            $this->load->view(base_url() . 'Managementcontrol/userproduct?id='.$userid);
        
       }
        
        public function showcart()
        {
          $this->load->view('header');
                $this->load->model('Dbmodel');
                $usercart=  $this->Dbmodel->getusercartinfo(); 
                 $userproductcheck=  $this->Dbmodel->getuserproducts();
                $data['usercart']=$usercart;
                 $data['userproductcheck']=$userproductcheck;
               
         $this->load->view('showingcart',$data);

         $this->load->view('footer');   
       }
       public function buyproduct()
      {
        $this->load->view('header'); 
        $this->load->model('Dbmodel');  
        $sliderdata=  $this->Dbmodel->getusercartinfo();
        $userdata=  $this->Dbmodel->getuserdetails();
        $userwallet=  $this->Dbmodel->getwalletinfo();
         $userproduct=  $this->Dbmodel->getuserproducts();
         $vendordetails = $this->Dbmodel->getvendordetails();
          $userid = $_SESSION['userid'];  
         
        $getbalance=  $this->Dbmodel->getbalance($userid);
        $getspend=  $this->Dbmodel->getspend($userid);
         
        $data['vendordetails']=$vendordetails;
        $data['userdata']=$userdata;
        $data['userproduct']=$userproduct;
        $data['sliderlist']=$sliderdata;
        $data['userwallet']=$userwallet;
         $data['getbalance']=$getbalance;
          $data['getspend']=$getspend;
       
          $this->load->view('buyproduct',$data);

          $this->load->view('footer');   
               
               
      }

        public function b()
        {
                $a= $this->input->post('a');
                $b=$this->input->post('b');   
                $c= $this->input->post('c');    
               
                $d=$this->input->post('d');
                 $e=$this->input->post('e');        
              
        $this->load->model('Dbmodel');

      
        $this->Dbmodel->uf1($a,$b,$c,$d,$e);
        $this->session->set_flashdata('status','Data Uploaded Successfull');
        redirect(base_url() . 'Managementcontrol/ui1');

        }
        public function userproduct(){
             $this->load->view('header');
          $this->load->model('Dbmodel');
          $usercart=  $this->Dbmodel->getuserproducts();
          $data['usercart']=$usercart;
          $this->load->view('userproducts',$data);

        }

        
        public function Profile()
        {
             $this->load->view('profile');
       }
        


        public function productupload()
        {
             $this->load->view('productupload');
       }
       
       
      
       public function designdo_uploader()
        {
            
          $this->load->helper(array('form', 'url')); 
              
          $config['upload_path']   = './fileupload/'; 
      
         $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
                $config['max_size']             = 500000;
         $this->load->library('upload',$config);
          $divison= $this->input->post('divison');
          $product= $this->input->post('product');
           $price= $this->input->post('price');
        $offerprice=$this->input->post('offerprice');
        $quantity=$this->input->post('quantity');
        $measure=$this->input->post('measure');
        $desc=$this->input->post('desc');
        $filename=$this->input->post('userfile');
        echo $filename;
        
    
         $error = array('error' => $this->upload->display_errors()); 
                         
         if ( ! $this->upload->do_upload('userfile')) {
           
             var_dump($error);
            $this->load->view('productupload',$error); 
         }
         
        
      
         else { 
            $data = array('upload_data' => $this->upload->data()); 
            $upload_data=  $this->upload->data();
           
            $imgpath="fileupload/".$upload_data['file_name'];
           
             $this->load->model('Dbmodel');
            $this->Dbmodel->insertdesignData($divison,$product,$price,$offerprice,$quantity,$measure,$imgpath,$desc);
            // $data['uploadimginfo']=$upload_data;
            // $data['fileinfo']=$fileData;
        $this->session->set_flashdata('status','Uploaded Successfully');
        $this->load->view('productupload');
         
        }
      }



      public function getproducts()
      {
        $this->load->view('header');
                   $this->load->model('Dbmodel');
                 $sliderdata=  $this->Dbmodel->getproducts();
                 $data['sliderlist']=$sliderdata;
                
          $this->load->view('productsall',$data);

          $this->load->view('footer');   
               
      }
      public function getthisproducts()
      {
        $this->load->view('header');
                   $this->load->model('Dbmodel');
                 $sliderdata=  $this->Dbmodel->getproducts();
                 $userdata=  $this->Dbmodel->getuserdetails();
                 $data['userdata']=$userdata;
                 $data['sliderlist']=$sliderdata;
                
          $this->load->view('product',$data);
          $this->load->view('footer');   
               
      } 

      
      
      public function sproduct()
      {
        $this->load->view('header'); 
                
          $this->load->view('sproducts');

          $this->load->view('footer');   
               
      }
      public function payment()
      {
        $this->load->view('header'); 
        $this->load->model('Dbmodel');
        $sliderdata=  $this->Dbmodel->getusercartinfo();
        $data['sliderlist']=$sliderdata;
                
          $this->load->view('payment',$data);

          $this->load->view('footer');   
               
      }


      public function userLogout()
      {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('usersurname');
         $this->session->unset_userdata('Salesemailsessname');
          $this->session->unset_userdata('Designername');
           $this->session->unset_userdata('Collectionname');
           $this->session->unset_userdata('Procurementhomesname');
           $this->session->unset_userdata('Managername');
            $this->session->unset_userdata('Productionnamename');  
        $this->session->unset_userdata('Collectionshome');
        $this->session->unset_userdata('Production');
        $this->session->unset_userdata('Procurementhomes');
        $this->session->unset_userdata('Manager');
        $this->session->set_flashdata('userlogin','Successfully Logged out ');
          redirect(base_url() );  
      }


     
public function getvegtables()
     {
      $this->load->view('header'); 
                  $this->load->model('Dbmodel');
                $sliderdata=  $this->Dbmodel->getvegtables();
                       $data['sliderlist']=$sliderdata;
               
         $this->load->view('productsall',$data);

        
              
     }


         
     public function DailyProducts()
     {
      $this->load->view('header'); 
                  $this->load->model('Dbmodel');
                $sliderdata=  $this->Dbmodel->DailyProducts();
                       $data['sliderlist']=$sliderdata;
               
         $this->load->view('productsall',$data);

        
              
     }
      public function vendorregister()
     {     
         $this->load->view('vendor');  
              
     }
      public function vregister()
          {
      $name=$this->input->post('name');   
         $mail= $this->input->post('mail');            
         $dat=$this->input->post('dat');
         $time = strtotime($dat);
          $dat = date('Y-m-d',$time);  

         $address=$this->input->post('address');

          $num=$this->input->post('num');        
         $aphone=$this->input->post('aphone');
          
          $pincode=$this->input->post('mat');
          $product=$this->input->post('product');
          
          
          $this->load->model('Dbmodel');
           $this->Dbmodel->vregister($name,$mail,$dat,$address,$num,$aphone,$pincode,$product);
          redirect(base_url());
    
 
}

}