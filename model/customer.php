<?php
include_once 'pdo.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function loadAll_customer(){
    $sql="SELECT * FROM tbl_customer order by custId DESC";
    $listcustomer=pdo_query($sql);
    return $listcustomer;
}



function loadOne_customer($custId)
{
   $sql="SELECT * FROM tbl_customer where custId= $custId";
   $res =pdo_query_one($sql);
   return $res;
}

function update_customer($data){
    $custId=$data['custId'];
    $custName =$data['custName'];
    $phone =$data['phone'];
    $address =$data['address'];
    $status =$data['status'];
    $role =$data['role'];
    $sql="UPDATE tbl_customer SET custName='$custName', phone='$phone' ,address='$address' ,role =$role ,status =$status where custId = $custId";
    $res = pdo_execute($sql);
    return $res; 
}

function add_customer($email, $custName, $username, $password){
    $sql="insert into tbl_customer(email, custName, username, password,status,role) values ('$email', '$custName', '$username', '$password','1','0')";
    pdo_execute($sql);
}

function delete_customer($custId){
    $sql="DELETE FROM tbl_customer where custId=$custId";
    pdo_execute($sql);
}
function edit_customer($custId, $username, $password, $custName, $phone, $email, $address) {
    $sql="UPDATE tbl_customer SET username = '$username', password =  '$password',  custName = '$custName', phone = '$phone', email = '$email', address = '$address' where custId = $custId";
    $res = pdo_execute($sql);
    return $res; 
}

function update_info_customer($custId, $custName, $phone, $email, $address) {
    $sql="UPDATE tbl_customer SET   custName = '$custName', phone = '$phone', email = '$email', address = '$address' where custId = $custId";
    $res = pdo_execute($sql);
    return $res; 
}


function update_password($custId, $password) {
    $sql="UPDATE tbl_customer SET password = '$password' where custId = $custId";
    $res = pdo_execute($sql);
    return $res; 
}

function checkEmail_customer($email){
    $sql="SELECT * FROM tbl_customer where email = '$email'";
    $res = pdo_query_one($sql);
    return $res;
}
function sendEmail($email,$password,$username){
    include 'model/library.php'; // include the library file
    require 'vendor/autoload.php';
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->CharSet = "UTF-8";
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = SMTP_UNAME;                 // SMTP username
        $mail->Password = SMTP_PWORD;                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = SMTP_PORT;                                    // TCP port to connect to
        //Recipients
        $mail->setFrom(SMTP_UNAME, "VyHomeDecor");
        $mail->addAddress($email, 'T??n ng?????i nh???n');     // Add a recipient | name is option
        $mail->addReplyTo(SMTP_UNAME, 'T??n ng?????i tr??? l???i');
//                    $mail->addCC('CCemail@gmail.com');
//                    $mail->addBCC('BCCemail@gmail.com');
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "L???y l???i m???t kh???u";
        $mail->Body = "VyhomeDecor Xin ch??o qu?? kh??ch:
        Y??u c???u l???y l???i m???t kh???u c???a b???n ???? ???????c ch???p nh???n.
        M???t kh???u c???a b???n l??:$password C???m ??n qu?? kh??ch.";
        $mail->AltBody = "M???t kh???u c???a b???n l??:0123213"; //None HTML
        $result = $mail->send();
    
        if (!$result) {
            $error = "C?? l???i x???y ra trong qu?? tr??nh g???i mail";
            return 0;
        }
        return 1;
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}



















?>
