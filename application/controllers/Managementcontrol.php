<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Managementcontrol extends CI_Controller {

    // function __construct() {
    //         $this->load->helper('url');
    //     }

    public function insertcart() {

        $userid = $this->input->post('userid');
        $username = $this->input->post('username');
        $usermail = $this->input->post('usermail');
        $phonenum = $this->input->post('phonenum');
        $pincode = $this->input->post('pincode');
        $productid = $this->input->post('productid');
        $productname = $this->input->post('productname');
        $price = $this->input->post('price');
        $productimg = $this->input->post('productimg');
        $description = $this->input->post('description');
        $fromdata = $this->input->post('fromdata');
        $time = strtotime($fromdata);
        $fromdata = date('Y-m-d', $time);
        $todata = $this->input->post('todata');
        $time = strtotime($todata);
        $todata = date('Y-m-d', $time);
        $date1 = date_create($fromdata);
        $date2 = date_create($todata);
        $diff = date_diff($date1, $date2);
        $days = $diff->format("%R%a days") + 1;
        $totalprice = $price * $days;
        $this->load->model('Dbmodel');
//         SELECT `id`, `userid`, `username`, `usermail`, `productid`, `produtname`, `productimg`, `productprice`, `productstratdate`, `productenddate`, `description`, `days`, `pincode`, `totalprice`, `phonenum` FROM `cartdetails` WHERE 1
        $this->Dbmodel->insertdatatocart($userid, $username, $usermail, $productid, $productname, $price, $productimg, $description, $fromdata, $todata, $days, $pincode, $totalprice, $phonenum);
//                $this->session->set_flashdata('status','Data Uploaded Successfull ');
        // redirect(base_url('Managementcontrol/getthisproducts?id=<?php echo $projItem->productid; 
        $this->load->view('product', $data);
        redirect(base_url() . 'Managementcontrol/showcart?id=' . $userid);
    }
    public function getthisproducts() {
//        $emploeeuserid = $_SESSION['emploeeuserid']; 
        $userid = $_SESSION['userid'];
        if(empty($userid)){
            echo "empty";
            redirect(base_url() );
//            $this->load->view('product', $data);
           
        } else {
        $this->load->view('header');
        $this->load->model('Dbmodel');
        $sliderdata = $this->Dbmodel->getproducts();
        $userdata = $this->Dbmodel->getuserdetails();
        $data['userdata'] = $userdata;
        $data['sliderlist'] = $sliderdata;
        $this->load->view('product', $data);
        $this->load->view('footer');
        }
        
    }
    
    public function bookproductone() {
//        $emploeeuserid = $_SESSION['emploeeuserid']; 
        $userid = $_SESSION['userid'];
        if(empty($userid)){
            echo "empty";
            redirect(base_url() );
//            $this->load->view('product');
            
        } else {
        $userid = $_SESSION['userid'];
        $id = intval($_GET['id']);
        $username = $_SESSION['username'];
        $usersurname = $_SESSION['usersurname'];
        $usermail = $_SESSION['emailsess'];
        $this->load->model('Dbmodel');
        $sliderdata = $this->Dbmodel->getproductsbyid($id);
        $userdata = $this->Dbmodel->getuserdetails($userid);
        $data['userdata'] = $userdata;
        $data['sliderlist'] = $sliderdata;
        foreach($userdata as $user){
            if($user->a == $username && $user->b == $usersurname && $user->c == $usermail  ){
                $phonenum = $user->g;
                $pincode = $user->i;
            }
        }
        foreach($sliderdata as $projItem){
            if($projItem->productid == $id ){
                $productid = $projItem->productid;
                $productname = $projItem->productname;
                $price = $projItem->price;
                $productimg = $projItem->productimg;
                $description = $projItem->description; 
            }
        }
       
        $fromdata = date("Y-m-d");
//        $todata =  date('Y-m-d', strtotime(' +1 day'));
        $todata =  date("Y-m-d");
//        $date1 = date_create($fromdata);
//        $date2 = date_create($todata);
//        $diff = date_diff($date1, $date2);
        $days = 1 ;
        $totalprice = $price * $days;
        echo $phonenum;
         echo $description;
        echo $fromdata;
        echo $todata;
        echo $days;
        echo "<br/>";
        $this->load->model('Dbmodel');
        $this->Dbmodel->insertdatatocart($userid, $username, $usermail, $productid, $productname, $price, $productimg, $description, $fromdata, $todata, $days, $pincode, $totalprice, $phonenum);
//       $this->session->set_flashdata('status','Data Uploaded Successfull ');
        // redirect(base_url('Managementcontrol/getthisproducts?id=<?php echo $projItem->productid; 
//        $this->load->view('product');
        redirect(base_url() . 'Managementcontrol/showcart?id=' . $userid);
    }                                                                                                                                                                                                           
    }
    public function walletpay() {

        $userid = $this->input->post('userid');
        $username = $this->input->post('username');
        $usermail = $this->input->post('usermail');
        $Amountnow = $this->input->post('amountnow');
        $date = $this->input->post('date');
        $BankName = $this->input->post('BankName');
        // $productimg=$this->input->post('productimg');
        // $description=$this->input->post('description');  
        $utilized = 0;
        $transactionid = 123;
        $this->load->model('Dbmodel');
        $this->Dbmodel->insertpayment($userid, $username, $usermail, $Amountnow, $date, $BankName, $utilized, $transactionid);
        $this->session->set_flashdata('status', 'Data Uploaded Successfull ');
        // redirect(base_url('Managementcontrol/getthisproducts?id=<?php echo $projItem->productid; 
        // $this->load->view('product',$data);
        redirect(base_url() . 'Managementcontrol/showcart?id=' . $userid);
    }

    public function Finalbooking() {
        $userid = $this->input->post('userid');
        $transidall = $this->input->post('transidall');

        $username = $this->input->post('username');
        $usermail = $this->input->post('usermail');
        $phonenum = $this->input->post('phonenum');
        $productid = $this->input->post('$productidall');
        $produtname = $this->input->post('$productnameall');
        $productprice = $this->input->post('productprice');
        $balval = $this->input->post('balval');
        $finalbal = $this->input->post('finalbal');
        $dateone = $this->input->post('$productstartall');
        $datelast = $this->input->post('$productlastall');
        print_r($datelast);
        $vendoridall = $this->input->post('vendoridall');
        $vendornameall = $this->input->post('vendornameall');
        $pincode = $this->input->post('pincode');
        $priceall = $this->input->post('priceall');
        $cartid = $this->input->post('$cartidall');
        $days = $this->input->post('days');
        $productimgall = $this->input->post('productimgall');
        $this->load->model('Dbmodel');
        $this->Dbmodel->getproducttouser($userid, $username, $usermail, $productid, $produtname, $productprice, $balval, $finalbal, $dateone, $datelast, $vendoridall, $vendornameall, $pincode, $priceall, $days, $cartid, $productimgall, $transidall, $phonenum);

        redirect(base_url() . 'Managementcontrol/userproduct?id=' . $userid);
//            $this->load->view(base_url() . 'Managementcontrol/userproduct?id='.$userid);
    }

    public function showcart() {
        $this->load->view('header');
        $this->load->model('Dbmodel');
        $usercart = $this->Dbmodel->getusercartinfo();
        $userproductcheck = $this->Dbmodel->getuserproducts();
        $data['usercart'] = $usercart;
        $data['userproductcheck'] = $userproductcheck;

        $this->load->view('showingcart', $data);

        $this->load->view('footer');
    }

    public function buyproduct() {
        $this->load->view('header');
        $this->load->model('Dbmodel');
        $sliderdata = $this->Dbmodel->getusercartinfo();
        $userdata = $this->Dbmodel->getuserdetails();
        $userwallet = $this->Dbmodel->getwalletinfo();
        $userproduct = $this->Dbmodel->getuserproducts();
        $vendordetails = $this->Dbmodel->getvendordetails();
        $userid = $_SESSION['userid'];

        $getbalance = $this->Dbmodel->getbalance($userid);
        $getspend = $this->Dbmodel->getspend($userid);

        $data['vendordetails'] = $vendordetails;
        $data['userdata'] = $userdata;
        $data['userproduct'] = $userproduct;
        $data['sliderlist'] = $sliderdata;
        $data['userwallet'] = $userwallet;
        $data['getbalance'] = $getbalance;
        $data['getspend'] = $getspend;

        $this->load->view('buyproduct', $data);

        $this->load->view('footer');
    }

    public function b() {
        $a = $this->input->post('a');
        $b = $this->input->post('b');
        $c = $this->input->post('c');

        $d = $this->input->post('d');
        $e = $this->input->post('e');

        $this->load->model('Dbmodel');


        $this->Dbmodel->uf1($a, $b, $c, $d, $e);
        $this->session->set_flashdata('status', 'Data Uploaded Successfull');
        redirect(base_url() . 'Managementcontrol/ui1');
    }

    public function userproduct() {
        $this->load->view('header');
        $this->load->model('Dbmodel');
        $usercart = $this->Dbmodel->getuserproducts();
        $calpro = $this->Dbmodel->getcalcelledproduct();
        $data['canpro'] = $calpro;
        $data['order'] = $usercart;


        $this->load->view('userproducts', $data);
    }

    public function productupload() {
        $this->load->view('productupload');
    }

    public function designdo_uploader() {

        $this->load->helper(array('form', 'url'));

        $config['upload_path'] = './fileupload/';

        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size'] = 500000;
        $this->load->library('upload', $config);
        $divison = $this->input->post('divison');
        $product = $this->input->post('product');
        $price = $this->input->post('price');
        $offerprice = $this->input->post('offerprice');
        $quantity = $this->input->post('quantity');
        $measure = $this->input->post('measure');
        $desc = $this->input->post('desc');
        $filename = $this->input->post('userfile');
        echo $filename;


        $error = array('error' => $this->upload->display_errors());

        if (!$this->upload->do_upload('userfile')) {

            var_dump($error);
            $this->load->view('productupload', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $upload_data = $this->upload->data();

            $imgpath = "fileupload/" . $upload_data['file_name'];

            $this->load->model('Dbmodel');
            $this->Dbmodel->insertdesignData($divison, $product, $price, $offerprice, $quantity, $measure, $imgpath, $desc);
            // $data['uploadimginfo']=$upload_data;
            // $data['fileinfo']=$fileData;
            $this->session->set_flashdata('status', 'Uploaded Successfully');
            $this->load->view('productupload');
        }
    }

    public function getproducts() {
        
        $this->load->view('header');
        $this->load->model('Dbmodel');
        $sliderdata = $this->Dbmodel->getproducts();
        $data['sliderlist'] = $sliderdata;

        $this->load->view('productsall', $data);

        $this->load->view('footer');
    }

    

    public function sproduct() {
        $this->load->view('header');

        $this->load->view('sproducts');

        $this->load->view('footer');
    }

    public function payment() {
        $this->load->view('header');
        $this->load->model('Dbmodel');
        $sliderdata = $this->Dbmodel->getusercartinfo();
        $data['sliderlist'] = $sliderdata;

        $this->load->view('payment', $data);

        $this->load->view('footer');
    }

    public function userLogout() {
        $this->session->unset_userdata('userid');
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
        $this->session->set_flashdata('userlogin', 'Successfully Logged out ');
        redirect(base_url());
    }

    public function getvegtables() {
        $this->load->view('header');
        $this->load->model('Dbmodel');
        $sliderdata = $this->Dbmodel->getvegtables();
        $data['sliderlist'] = $sliderdata;

        $this->load->view('productsall', $data);
    }

    public function DailyProducts() {
        $this->load->view('header');
        $this->load->model('Dbmodel');
        $sliderdata = $this->Dbmodel->DailyProducts();
        $data['sliderlist'] = $sliderdata;

        $this->load->view('productsall', $data);
    }

    public function vendorregister() {
        $this->load->view('vendor');
    }

    public function vregister() {
        $name = $this->input->post('name');
        $mail = $this->input->post('mail');
        $pass = $this->input->post('pass');
        $conpass = $this->input->post('conpass');
        $dat = $this->input->post('dat');
        $time = strtotime($dat);
        $dat = date('Y-m-d', $time);

        $address = $this->input->post('address');

        $num = $this->input->post('num');
        $aphone = $this->input->post('aphone');

        $pincode = $this->input->post('mat');
        $product = $this->input->post('product');


        $this->load->model('Dbmodel');
        $this->Dbmodel->vregister($name, $mail, $dat, $address, $num, $aphone, $pincode, $product, $pass, $conpass);
        $this->session->set_userdata('vendorname', $name);
        $userdata = $this->Dbmodel->getvendordetails();
        $data['userdata'] = $userdata;
        foreach ($userdata as $user) {
            if ($user->vendorname == $name && $user->vendormail == $mail) {
                $id = $user->vendorid;
                $this->session->set_userdata('vendorid', $id);
            }
        }
        redirect(base_url());
    }

    public function Profile() {
        $this->load->view('header');
        $this->load->model('Dbmodel');
        $usercart = $this->Dbmodel->getuserdetails();
        $cal = $this->Dbmodel->getcalcelledproduct();
        $booked = $this->Dbmodel->getuserproducts();
        $data['usercart'] = $usercart;
        $data['cal'] = $cal;
        $data['booked'] = $booked;
        $this->load->view('profile', $data);
    }

    public function productinfo() {
        $this->load->view('header');
        $this->load->model('Dbmodel');
        $usercart = $this->Dbmodel->getuserproducts();
        $calpro = $this->Dbmodel->getcalcelledproduct();

        $data['canpro'] = $calpro;

        $data['order'] = $usercart;

        $this->load->view('productinfo', $data);
    }

    public function delproduct() {
        $bookedid = $this->input->post('bookedid');
        $userid = $this->input->post('userid');
        $dateone = $this->input->post('dateone');
        $vendorid = $this->input->post('vendorid');
        $datelast = $this->input->post('datelast');
        $Transactionid = $this->input->post('Transactionid');
        $date = $this->input->post('alldate');
        $productname = $this->input->post('productname');
        $qua = $this->input->post('qua');
      echo $productname;
      echo $qua;
  
//          $pincode=$this->input->post('mat');
//          $product=$this->input->post('product');
        $this->load->model('Dbmodel');
        $this->Dbmodel->calcelledproduct($bookedid, $userid, $dateone, $datelast, $Transactionid, $date, $vendorid,$productname,$qua);

//           $this->load->view('productinfo',$data);
        http://localhost/code/Managementcontrol/userproduct?id=35
        redirect(base_url() . 'Managementcontrol/userproduct?id=' . $userid);
    }

    public function getjson() {
        $this->load->view('header');
        $this->load->view('getjson');
    }

    public function Vendorlogin() {
        $this->load->view('header');
        $this->load->view('Vendorlogin');
    }

    public function completedproduct() {
        $this->load->view('header');
        $this->load->model('Dbmodel');
        $usercart = $this->Dbmodel->getuserproducts();
        $data['order'] = $usercart;
        $this->load->view('completedproduct', $data);
    }

    public function Vendorhome() {
        $this->load->view('header');
        $this->load->model('Dbmodel');
        $usercart = $this->Dbmodel->getuserproducts();
        $calpro = $this->Dbmodel->getcalcelledproduct();
        $pro = $this->Dbmodel->getsubmitproject();

        $data['canpro'] = $calpro;
        $data['pro'] = $pro;
        $data['order'] = $usercart;

        $this->load->view('Vendorhome', $data);
    }

    public function submitproductdata() {
        $userid = $this->input->post('userid');
        $username = $this->input->post('username');
        $usermail = $this->input->post('usermail');
        $phonenum = $this->input->post('phonenum');
        $productprice = $this->input->post('productprice');
        $productname = $this->input->post('productname');
        $pincode = $this->input->post('pincode');
        $idbookedproducts = $this->input->post('idbookedproducts');
        $check = $this->input->post('check');
        $vendorid = $this->input->post('vendorid');
        
        $this->load->model('Dbmodel');
        $dat = date("Y-m-d");
        $this->Dbmodel->submitproduct($userid, $username, $usermail, $phonenum, $productprice, $productname, $pincode, $idbookedproducts, $check, $dat);
       
           $this->load->view('productinfo',$data);
        http://localhost/code/Managementcontrol/userproduct?id=35
        redirect(base_url() . 'Managementcontrol/Vendorhome?id=' . $vendorid);
    }

    public function inserincontrolller() {
        $id = intval($_GET['id']);
        $vendoridnow = $_SESSION['vendorid'];
        $this->load->model('Dbmodel');
        $managerData = $this->Dbmodel->submitproductbyid($id);
        foreach ($managerData as $user) {
            $userid = $user->userid;
            $username = $user->username;
            $usermail = $user->usermail;
            $phonenum = $user->phonenum;
            $productprice = $user->price;
            $productname = $user->productname;
            $pincode = $user->pincode;
            $idbookedproducts = $user->idbookedproducts;
            $vendorid = $user->vendorid;
            $check = "yes";
            $vendorid = $user->vendorid;
        }

      
         $dat = date("Y-m-d");
      
         $this->load->model('Dbmodel');
       
        $this->Dbmodel->submitproduct($userid, $username, $usermail, $phonenum, $productprice, $productname, $pincode, $idbookedproducts, $check, $dat,$vendorid);
       
        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465 ,
            'smtp_user' => 'lokesh.aapto@gmail.com',
            'smtp_pass' => 'worknowsee123*%@',
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );
        $this->load->library('email'); 
        $this->email->initialize($config);
          $this->email->set_mailtype("html");
          $this->email->set_newline("\r\n");
          //Email content
           $mail = "lokeshreddy160@gmail.com";
          $message="We will get back to you soon" ;
          $this->email->to($to_email);
          $this->email->from('lokesh.aapto@gmail.com','Thnaks for ENQUIRY');
          $this->email->subject('THIS IS EMAIL FROM Ecommerce ');
          $this->email->message($message);
          $this->email->send();
          
        //  $to_email = $this->input->post($mail); 
          if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 

        
        redirect(base_url() . 'Managementcontrol/Vendorhome?id=' . $vendoridnow);
//        $this->load->view('Vendorhome');
    }

    public function loginCheckManager() {

        $mail = $this->input->post('mail');
        $pass = $this->input->post('pass');
//        echo $mail;
//        echo $pass;
        $this->load->model('Dbmodel');
        $managerData = $this->Dbmodel->canManagerLogin($mail, $pass);
        if (empty($managerData)) {
            echo "inside not value";
            $this->session->set_flashdata('managerlogin', 'Please Login with Valid username and password ');
            redirect(base_url() . 'Managementcontrol/Vendorlogin');
//              $this->load->view('Vendorhome');
        } else {
            $output = $this->Dbmodel->getvendordetails();
            $data['viewdata'] = $output;
            foreach ($data['viewdata'] as $item) {
                echo "login success";
                if ($item->vendormail == $mail && $item->pass == $pass) {

                    $this->session->set_userdata('vendorid', $item->vendorid);
                    $this->session->set_userdata('vendorname', $item->vendorname);
                    redirect(base_url() . 'Managementcontrol/Vendorhome?id=' . $item->vendorid);

//                 $this->load->view('Vendorhome');
                }
            }
        }
    }

    public function userlogin() {
        $this->load->view('header');
        $this->load->view('loginpageuser');
    }

    public function admin() {
        $this->load->view('header');
        $this->load->view('alllogin');
    }

    public function userlogincheck() {
        $mail = $this->input->post('mail');
        $pass = $this->input->post('pass');
//    echo $mail;
//    echo $pass;
        $this->load->model('Dbmodel');
        $managerData = $this->Dbmodel->CanUserLogin($mail, $pass);
        if (empty($managerData)) {
//            echo "inside not value";
            $this->session->set_flashdata('managerlogin', 'Please Login with Valid username and password ');
            redirect(base_url() . 'Managementcontrol/userlogin');
//              $this->load->view('userlogin');
        } else {
            $output = $this->Dbmodel->getuserdetails();
            $data['viewdata'] = $output;
            foreach ($data['viewdata'] as $item) {
//                 echo "login success";                  
                if ($item->c == $mail && $item->e == $pass) {

                    $this->session->set_userdata('username', $item->a);
                    $this->session->set_userdata('usersurname', $item->b);
                    $this->session->set_userdata('emailsess', $item->c);
                    $this->session->set_userdata('userid', $item->iduf);
                    redirect(base_url() . 'Managementcontrol/getproducts');

//                 $this->load->view('Vendorhome');
                }
            }
        }
    }

   

    public function adminhome() {
        $this->load->view('header');
        $this->load->model('Dbmodel');
        $getvendordetails = $this->Dbmodel->getvendordetails();
        $data['viewdata'] = $getvendordetails;
        $this->load->view('adminhome', $data);
    }

    public function loginCheckEmployee() {
        $val = 'admin';
        $pass = $this->input->post('pass');
        $this->load->model('Dbmodel');
        $EmployeeData = $this->Dbmodel->managercode($val, $pass);
        if (empty($EmployeeData)) {
            echo "inside not value";
            $this->session->set_flashdata('managerlogin', 'Please Login with Valid username and password ');
            redirect(base_url());
        } else {
            $output = $this->Dbmodel->managercodelogin();
            $data['viewdata'] = $output;
            foreach ($data['viewdata'] as $item) {
                if ($item->name == $val && $item->code == $pass) {
                    redirect(base_url() . 'Managementcontrol/adminhome');
                }
            }
        }
    }

    public function getreportbydate() {
        $this->load->view('header');

        $this->load->view('getreportbydate');
    }
     public function report() {
        $this->load->view('header');
        $this->load->model('Dbmodel');
        $getsubmitproject = $this->Dbmodel->getsubmitproject();
        $data['viewdata'] = $getsubmitproject;
        $this->load->view('report', $data);
    }
    public function getreportbydates()
	{
		$this->load->view('header');
		$empid= $this->input->post('id');
		$fromdate=$this->input->post('fromdate');
		$time = strtotime($fromdate);
		$fromdate = date('Y-m-d',$time);
		$enddate=$this->input->post('enddate');
		$time = strtotime($enddate);
		$enddate = date('Y-m-d',$time);
//                echo $empid;
//                echo $fromdate;
//                echo $enddate;
		$this->load->model('Dbmodel');
		$rangereport =  $this->Dbmodel->getsubmitprojectfromdate($empid,$fromdate,$enddate);
               
		$data['output'] = $rangereport;
		$this->load->view('rangeouput',$data);
	}
        public function gotproduct(){
            $this->load->view('header');
            $this->load->model('Dbmodel');
             $getsubmitproject = $this->Dbmodel->getsubmitproject();
              $data['viewdata'] = $getsubmitproject;
            $this->load->view('gotproduct',$data);
        }
        public function getreportbydatesforuser()
	{
		$this->load->view('header');
		$empid= $this->input->post('id');
		$fromdate=$this->input->post('fromdate');
		$time = strtotime($fromdate);
		$fromdate = date('Y-m-d',$time);
		$enddate=$this->input->post('enddate');
		$time = strtotime($enddate);
		$enddate = date('Y-m-d',$time);
//                echo $empid;
//                echo $fromdate;
//                echo $enddate;
		$this->load->model('Dbmodel');
		$rangereport =  $this->Dbmodel->getsubmitprojectfromdateuser($empid,$fromdate,$enddate);
               
		$data['output'] = $rangereport;
		$this->load->view('rangeouput',$data);
	}
        public function TodayProducts(){
             $this->load->view('header'); 
        $this->load->model('Dbmodel');
        $usercart = $this->Dbmodel->getuserproducts();
        $calpro = $this->Dbmodel->getcalcelledproduct();
        $pro = $this->Dbmodel->getsubmitproject();

        $data['canpro'] = $calpro;
        $data['pro'] = $pro;
        $data['order'] = $usercart;
        $this->load->view('hello',$data);
        }
        public function TomorrowProducts(){
             $this->load->view('header');
        $this->load->model('Dbmodel');
        $usercart = $this->Dbmodel->getuserproducts();
        $calpro = $this->Dbmodel->getcalcelledproduct();
        $pro = $this->Dbmodel->getsubmitproject();

        $data['canpro'] = $calpro;
        $data['pro'] = $pro;
        $data['order'] = $usercart;
        $this->load->view('tomorrowproducts',$data);
        }
        public function inventorymangerhome() {
             $this->load->view('header');
             $this->load->model('Dbmodel');
             $usercart = $this->Dbmodel->getprodutsum();
            $calpro = $this->Dbmodel->getcancellprodsum();
              $data['usercart'] = $usercart;
             $data['pro'] = $calpro;
             $this->load->view('inventorymangerhome',$data);
        }
        

}
