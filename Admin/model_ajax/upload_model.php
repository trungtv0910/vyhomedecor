<?php
include_once '../../model/global.php';
if (isset($_POST) && !empty($_FILES['file'])) {
    $duoi = explode('.', $_FILES['file']['name']); // tách chuỗi khi gặp dấu .
    $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
    $time=time();
    // Kiểm tra xem có phải file ảnh không
    if ($duoi === 'jpg' || $duoi === 'png' || $duoi === 'gif'||$duoi === 'jpeg' ) {
        // tiến hành upload
        if (move_uploaded_file($_FILES['file']['tmp_name'], '../../uploads/'.$time.$_FILES['file']['name'])) {
            // Nếu thành công
            // die('Upload thành công file: ' . $_FILES['file']['name']); //in ra thông báo + tên file
            die("<img width='100%' src='".  BASE_URL ."uploads/".$time.$_FILES['file']['name']."' >
            <input type='hidden' name='image' value='".$time.$_FILES['file']['name']."'>
            
            ");
        } else { // nếu không thành công
            die('Có lỗi!'); // in ra thông báo
        }
    } else { // nếu không phải file ảnh
        die('Chỉ được upload ảnh'); // in ra thông báo
    }
} else {
    die('Lock'); // nếu không phải post method
}