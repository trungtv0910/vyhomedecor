<?php
include_once 'pdo.php';
include_once 'customer.php';
include_once 'account_model.php';
init();
$custId = $_POST['custId'];
$custName = $_POST['custName'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
update_info_customer($custId, $custName, $phone, $email, $address);
$_SESSION['login']['custName'] = $custName;
$_SESSION['login']['phone'] = $phone;
$_SESSION['login']['email'] = $email;
$_SESSION['login']['address'] = $address;
?>

<label for="enter-name" class="model-label"><i class="fas fa-user"></i> Họ và Tên</label>
<input type="text" name="custName" class="model-input" id="enter-name" value="<?= $_SESSION['login']['custName'] ?>">
<label for="enter-phone" class="model-label"><i class="fas fa-phone"></i> Số điện thoại</label>
<input type="text" name="phone" class="model-input" id="enter-phone" value="<?= $_SESSION['login']['phone'] ?>">
<label for="enter-email" class="model-label"><i class="fas fa-envelope"></i> Email</label>
<input type="text" name="email" class="model-input" id="enter-email" value="<?= $_SESSION['login']['email'] ?>">
<label for="enter-address" class="model-label"><i class="fas fa-address-card"></i> Địa chỉ</label>
<input type="text" name="address" class="model-input" id="enter-address" value="<?= $_SESSION['login']['address'] ?>">
<input type="hidden" id="custId" name="custId" value="<?= $account['custId'] ?>">
<input type="submit" name="edit-customer" id="info" class="model-btn model-btn-login" value="Cập nhật">


