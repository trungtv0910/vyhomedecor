<style>
    th,
    td {
        text-align: left;
    }

    tr>td:nth-child(2)>input {
        padding: 5px;
        width: 350px;
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
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="table align-items-center table-flush">

                        <tbody>
                            <tr>
                                <td width="170"> Tên khách hàng</td>
                                <td width="800">
                                    <input type="text" id="name" name='name' placeholder="Nhập họ và tên">
                                    <span id="message_name"></span>
                                </td>
                            </tr>
                            <tr>
                                <td> <i class="ni ni-circle-08"></i> Tài khoản</td>
                                <td>
                                    <input type="text" id="username" name="username" placeholder="Nhập tài khoản">
                                    <span id="message_username"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Mật khẩu</td>
                                <td><input type="password" id="password" name="password" placeholder="Nhập mật khẩu">
                                    <span id="message_password"></span>
                                </td>

                            </tr>
                            <tr>
                                <td>Nhập lại mật khẩu</td>
                                <td><input type="password" id="re_password" name="password2" placeholder="Nhập lại mật khẩu">
                                    <span id="message_password_re"></span>
                                </td>
                            </tr>
                            <tr>
                                <td> <i class="ni ni-circle-08"></i> Ảnh đại diện</td>
                                <td>
                                    <input type="file" name="image">
                                </td>
                            </tr>
                            <tr>
                                <td><i class="ni ni-email-83"></i> Email</td>
                                <td><input type="email" id="email" name="email" placeholder="Nhập email@gmail.com">
                                    <span id="message_email"></span>
                                </td>
                            </tr>

                            <tr>
                                <td> Số điện thoại</td>
                                <td><input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại">
                                    <span id="message_phone"></span>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="ni ni-square-pin"></i> Địa chỉ Giao hàng</td>
                                <td> <input type="text" name="address" placeholder="Nhập địa chỉ"> </td>
                            </tr>
                            <tr>
                                <td> Vai Trò</td>
                                <td>
                                    <select name="role" id="">
                                        <option>-----Chọn quyền truy cập-----</option>
                                        <option value="0">Thành Viên</option>
                                        <option value="1">Quản Trị Viên</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="btn btn-success" id="addCust" type="submit" name="add" value="Tạo Thành Viên">

                                </td>

                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>

        </div>
    </div>
</div>