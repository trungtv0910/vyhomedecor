<style>
    th,
    td {
        text-align: left;
    }

    tr>td:nth-child(2)>input,
    select {
        padding: 5px;
        width: 350px;
    }

    .fa-green {
        color: green;
        box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
    }

    .fa-red {
        color: red;
        box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
    }
</style>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Sửa Tài Khoản khách hàng</h3>
                    </div>
                    <div class="col text-right">

                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <!-- Projects table -->
                <form action="index.php?act=customer&update" method="post" enctype="multipart/form-data">
                    <table class="table align-items-center table-flush">

                        <tbody>
                            <tr>
                              
                                <td width="170"> Tên khách hàng</td>
                                <td width="800">
                                    <input type="text" id="name" name='custName' value="<?= $oneCustomer['custName'] ?>">
                                    <input type="hidden" name='custId' value="<?= $oneCustomer['custId'] ?>">
                                    <span id="message_name"></span>
                                </td>
                            </tr>
                            <tr>
                                <td> <i class="ni ni-circle-08"></i> Tài khoản</td>
                                <td>
                                    <input type="text" id="username" value="<?= $oneCustomer['username'] ?>" disabled>
                                    <input type="hidden" id="username" name="username" value="<?= $oneCustomer['username'] ?>">
                                    <span id="message_username"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Mật khẩu</td>
                                <td><input type="password" id="password" value="<?= $oneCustomer['password'] ?>" disabled>
                                    <input type="hidden" id="password" name="password" value="<?= $oneCustomer['password'] ?>">
                                    <span id="message_password"></span>
                                </td>

                            </tr>

                            <!-- <tr>
                                <td> <i class="ni ni-circle-08"></i> Ảnh đại diện</td>
                                <td>
                                    <input type="file" name="image">
                                </td>
                            </tr> -->
                            <tr>
                                <td><i class="ni ni-email-83"></i> Email</td>
                                <td><input type="email" id="email" name="email" value="<?= $oneCustomer['email'] ?>" disabled>
                                    <span id="message_email"></span>
                                </td>
                            </tr>

                            <tr>
                                <td> Số điện thoại</td>
                                <td><input type="text" id="phone" name="phone" value="<?= $oneCustomer['phone'] ?>">
                                    <span id="message_phone"></span>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="ni ni-square-pin"></i> Địa chỉ Giao hàng</td>
                                <td> <input type="text" name="address" value="<?= $oneCustomer['address'] ?>"> </td>
                            </tr>
                            <tr>
                                <td> Trạng thái hoạt động <?php echo $oneCustomer['status'] == 0 ? " <i class='fas fa-circle fa-red'></i>" : " <i class='fas fa-circle fa-green'></i>"; ?> </td>
                                <td>
                                    <select name="status" id="">
                                        <option value="0" <?php echo $oneCustomer['status'] == 0 ? "selected" : "" ?>>Khoá </option>
                                        <option value="1" <?php echo $oneCustomer['status'] == 1 ? "selected" : "" ?>>Đang hoạt động </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td> Vai Trò</td>
                                <td>
                                    <select name="role" id="">

                                        <option value="0" <?php echo $oneCustomer['role'] == 0 ? "selected" : "" ?>>Thành Viên</option>
                                        <option value="1" <?php echo $oneCustomer['role'] == 1 ? "selected" : "" ?>>Quản Trị Viên</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="btn btn-success" id="updateCust" type="submit" name="updateCust" value="Cập nhập Thành Viên">

                                </td>

                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>

        </div>
    </div>
</div>