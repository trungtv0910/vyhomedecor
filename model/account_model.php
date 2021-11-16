<?php
include_once 'pdo.php';
function init()
{
    session_start();
    // session_destroy();
    // session_unset();
}


 function checkLogin($username,$password)
{
 
    if(empty($username)|| empty($password))
    {
        return 0;
      
    }else{
        $query= "SELECT * FROM tbl_customer Where username='".$username."' AND password='".$password."'  ";
        $result = pdo_query_one($query);
        if($result == True){
            
            $_SESSION['login'] = array('login'=>True,'custId'=>$result['custId'],'username'=>$result['username'],'password'=>$result['password'],'custName'=>$result['custName'],'role'=>$result['role'],'phone'=>$result['phone'],'email'=>$result['email'],'address'=>$result['address'],'image'=>$result['image'],'status'=>$result['status']);
            
            return 1;
        }else{
           return 0;
        }
    }
}
function checkLogout(){
   return session_destroy();
    // echo '<script>alert("xin"); </script>';
}



?>