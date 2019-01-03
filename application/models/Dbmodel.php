<?php

class Dbmodel  extends CI_Model{

     public function  uf($a,$b,$c,$d,$e,$f,$g,$h,$pin)
     {
       

             $sql="insert into uf(`a`,`b`,`c`,`d`,`e`,`f`,`g`,`h`,`i`)VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$pin')";
                $this->db->query($sql);

    }
public function insertdatatocart($userid,$username,$usermail,$productid,$productname,$price,$productimg,$description,$fromdata,$todata,$days,$pincode,$totalprice,$phonenum)

     {
       
        $sql="INSERT INTO `cartdetails`(`userid`, `username`, `usermail`, `productid`, `produtname`, `productimg`, `productprice`, `productstratdate`, `productenddate`, `description`, `days`, `pincode`, `totalprice`, `phonenum`) VALUES ('$userid','$username','$usermail','$productid','$productname','$productimg','$price','$fromdata','$todata','$description','$days','$pincode','$totalprice','$phonenum')";
           $this->db->query($sql);
    }
    public function insertpayment($userid,$username,$usermail,$Amountnow,$date,$BankName,$utilized,$transactionid)
     {
       
        $sql="INSERT INTO `wallet`(`userid`, `username`,`usermail`, `depositdate`, `amount`, `utilized`, `balance`, `transactionid`) VALUES ('$userid','$username','$usermail','$date','$Amountnow','$BankName','$utilized','$transactionid')";
           $this->db->query($sql);
    }

    public function insertdesignData($divison,$product,$price,$offerprice,$quantity,$measure,$imgpath,$desc)
             
    {
  
    $sql="insert into product(`division`,`productname`,`price`,`offerprice`,`quantity`,`units`,`productimg`,`description`)VALUES ('$divison','$product','$price','$offerprice','$quantity','$measure','$imgpath','$desc')";
             
             $this->db->query($sql);
  
   
    }
    public function getproducttouser($userid,$username,$usermail,$productid,$produtname,$productprice,$balval,$finalbal,$dateone,$datelast,$vendoridall,$vendornameall,$pincode,$priceall,$days)
     {
        
//        print_r($productid);
        $productidex = explode(",",$productid);
        $produtnameex = explode(",",$produtname);
        $dateoneex = explode(",",$dateone);
        $datelastex = explode(",",$datelast);
        $vendoridallex = explode(",",$vendoridall);
       
        $vendornameallex = explode(",",$vendornameall);
        $pincodeex = explode(",",$pincode);
        $priceallex = explode(",",$priceall);
        $days = explode(",",$days);
         print_r($dateoneex);
           print_r($datelastex); 
           print_r($vendoridallex);
           
          print_r($vendornameallex);
           print_r($pincodeex);
            print_r($priceallex);
             print_r($days);
        
        $num =  count($productidex);
//        echo "hello";
//        echo $num;
        for($i=0;$i<$num;$i++){  
        $productida = $productidex[$i];
         $produtnamea = $produtnameex[$i];
         $dateonea = $dateoneex[$i];
         $datelasta = $datelastex[$i];
         $vendoridalla = $vendoridallex[$i];
         $vendornamealla = $vendornameallex[$i];
         $pincodea = $pincodeex[$i];
         $pricealla = $priceallex[$i];
          $daysa = $days[$i];
        
            echo $productida;
          echo $produtnamea;
           echo $dateonea;
          echo $datelasta;
          echo $vendoridalla;
          echo $vendornamealla;
           
          echo $pricealla;
          echo $daysa ;

            $sql="INSERT INTO `bookedproducts`(`userid`, `username`, `usermail`, `productid`, `productname`, `productprice`, `balval`, `finalbal`, `dateone`, `datelast`, `vendorid`, `vendorname`, `pincode`, `faltnumber`, `Transactionid`,`date`, `price`) VALUES ('$userid','$username','$usermail','$productida','$produtnamea','$productprice','$balval','$finalbal','$dateonea','$datelasta','$vendoridalla','$vendornamealla','$pincode','0','0','$daysa','$pricealla')";
           $this->db->query($sql);
    }
     }
    
//    public function insertmaterialreq($iduser,$name,$mail,$number, $sno,$material,$quantity,$date)
//    {
//        $arr = explode(",",$date);
//        $install = explode(",",$sno);
//        $amo = explode(",",$quantity);
//        $de = explode(",",$material);
//        $num =  count($arr) -1;
//       
//        for($i=0;$i<=$num;$i++){       
//            $sno = $install[$i];
//            $date = $arr[$i];   
//            $quantity = $amo[$i];
//            $material = $de[$i];
//           
//          $sql="insert into materialrequired(`iduser`,`name`,`mail`,`phone`,`sno`,`material`,`Quantity`,`date`)VALUES ('$iduser','$name','$mail','$number','$sno','$material','$quantity','$date')";
//          $this->db->query($sql);
//        }
//}
   public function  vregister($name,$mail,$dat,$address,$num,$aphone,$pincode,$product)
    {
            $sql="insert into vendor(`vendorname`,`vendormail`,`data`,`address`,`pnum`,`pnum2`,`pincode`,`product`)VALUES ('$name','$mail','$dat','$address','$num','$aphone','$pincode','$product')";
               $this->db->query($sql);
    }
   

        public function getproducts()
            
    {
         $query=$this->db->get('product');
		return $query->result();
                
    }
    public function getvendordetails(){
        $query = $this->db->get('vendor');
        return $query->result();
    }

    public function getuserproducts()
            
    {
         $query=$this->db->get('bookedproducts');
		return $query->result();
                
    }

    
    public function getusercartinfo()
            
    {
         $query=$this->db->get('cartdetails');
		return $query->result();
                
    }

  
    public function getuserdetails()
            
    {
         $query=$this->db->get('uf');
		return $query->result();
                
    }
    public function getwalletinfo()
            
    {
         $query=$this->db->get('wallet');
		return $query->result();
                
    
}
public function getvegtables()
            
{
            $code ='$vegatables';
            $this->db->where('division',$code);
            $query=$this->db->get('product');
            return $query->result();
            
}
public function getbalance($userid){
    
    $sql="SELECT sum(amount) as so from wallet WHERE userid = '$userid'";  
          return $this->db->query($sql)->result();
}
public function getspend($userid){
    
    $sql="SELECT sum(productprice) as val from bookedproducts WHERE userid = '$userid'";  
          return $this->db->query($sql)->result();
}


public function DailyProducts()
            
{
      $code ='Daily Products';
            $this->db->where('division',$code);
            $query=$this->db->get('product');
            return $query->result();
            
}
}
     
//SELECT SUM(amount) FROM `wallet` WHERE userid = 12 
//SELECT SUM(productprice) FROM `bookedproducts` WHERE userid = 12 
//public function code($name,$email){
//        $this->db->where('name',$name);
//        $this->db->where('mail',$email);
//        $query = $this->db->get('code');
//        return $query->result();
//    }
// SELECT * FROM lokesh.followupform where idfollowupform = (select max(idfollowupform) from lokesh.followupform);

// SELECT * FROM lokesh.followupform where idfollowupform = (select max(idfollowupform) from lokesh.followupform group by iduser);
//SELECT * FROM lokesh.dueform where dat > current_date();
//SELECT * FROM lokesh.dueform where dat > current_date();
//SELECT * FROM lokesh.confromchecknow where dat < current_date();  overdue
//SELECT * FROM lokesh.confromchecknow where dat > current_date();  duelist
// SELECT * FROM lokesh.dueform where amount = 500 and  id in (select max(id) from lokesh.dueform group by iduser);
// for due table update 
// select max(id) from lokesh.dueform where iduser = 16 group by intnum;
// 
// select sum(Quantity) as Quantity, material from materialrequired where iduser = 1 group by material; for procurement
// 
// SELECT sum(Quantity) as Quantity, material from materialrequired where iduser = 1 group by material; for for seeproduct 
// data due data
// SELECT * FROM lokesh.dueform where iduser = 16 group by intnum;
// 
// 
// SELECT sum(paidamount) as Quantity, phone from payduecol where iduser = 10 group by iduser;
// 
// for balance in paycol
// SELECT sum(releas) as Quantity, material from procurement where iduser = '$id' group by material; "maeterial required

// select max(id),name,mail,dat,newcomment from lokesh.dueform group by intnum; slect updated col due
//SELECT * FROM lokesh.dueform where iduser = (select max(id) from lokesh.dueform group by intnum);


// SELECT * FROM lokesh.followupform where idfollowupform in (select max(idfollowupform) from lokesh.followupform group by iduser);