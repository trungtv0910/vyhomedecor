</div>
<footer class="footer">
    <div class="footer__info">
        <div class="grid wide">
            <div class="row">
                <div class="col l-2-4 m-4 c-6">
                    <ul class="footer__info-list">
                        <li class="footer__info-heading">LIÊN HỆ</li>
                        <li class="footer__info-item">
                            <i class="footer__info-item-icon fas fa-home"></i>
                            <span class="footer__info-item-about">137 Nguyễn Thị Thập, Hoà Minh, Liên Chiểu, Đà Nẵng</span>
                        </li>
                        <li class="footer__info-item">
                            <i class="footer__info-item-icon fas fa-phone"></i>
                            <span class="footer__info-item-about">+84 236 3710 999</span>
                        </li>
                        <li class="footer__info-item">
                            <i class="footer__info-item-icon fas fa-envelope"></i>
                            <span class="footer__info-item-about">caodangfpt.dn@fpt.edu.vn</span>
                        </li>
                    </ul>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <ul class="footer__info-list">
                        <li class="footer__info-heading">DỊCH VỤ</li>
                        <li class="footer__info-item">
                            <a href="" class="footer__info-item-link">Giá Cả & Tiền Tệ</a>
                        </li>
                        <li class="footer__info-item">
                            <a href="" class="footer__info-item-link">Thanh Toán An Toàn</a>
                        </li>
                        <li class="footer__info-item">
                            <a href="" class="footer__info-item-link">Thời Gian Và Chi Phí Giao Hàng</a>
                        </li>
                        <li class="footer__info-item">
                            <a href="" class="footer__info-item-link">Trả Hàng & Trao Đổi</a>
                        </li>
                        <li class="footer__info-item">
                            <a href="" class="footer__info-item-link">Câu Hỏi Thường Gặp</a>
                        </li>
                    </ul>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <ul class="footer__info-list">
                        <li class="footer__info-heading">TÀI KHOẢN</li>
                        <li class="footer__info-item">
                            <a href="" class="footer__info-item-link">Tài Khoản Của Tôi</a>
                        </li>
                        <li class="footer__info-item">
                            <a href="" class="footer__info-item-link">Yêu Thích</a>
                        </li>
                        <li class="footer__info-item">
                            <a href="" class="footer__info-item-link">Lịch Sử Đơn Hàng</a>
                        </li>
                        <li class="footer__info-item">
                            <a href="" class="footer__info-item-link">Đặc Biệt</a>
                        </li>
                        <li class="footer__info-item">
                            <a href="" class="footer__info-item-link">Phiếu Tặng Quà</a>
                        </li>
                    </ul>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <ul class="footer__info-list">
                        <li class="footer__info-heading">THÔNG TIN</li>
                        <li class="footer__info-item">
                            <a href="" class="footer__info-item-link">Tài Khoản Của Tôi</a>
                        </li>
                        <li class="footer__info-item">
                            <a href="" class="footer__info-item-link">Yêu Thích</a>
                        </li>
                        <li class="footer__info-item">
                            <a href="" class="footer__info-item-link">Lịch Sử Đơn Hàng</a>
                        </li>
                        <li class="footer__info-item">
                            <a href="" class="footer__info-item-link">Đặc Biệt</a>
                        </li>
                        <li class="footer__info-item">
                            <a href="" class="footer__info-item-link">Phiếu Tặng Quà</a>
                        </li>
                    </ul>
                </div>
                <div class="col l-2-4 m-8 c-12">
                    <ul class="footer__info-list">
                        <li class="footer__info-heading">BẢN TIN</li>
                        <li class="footer__info-item">
                            <span class="footer__info-item-about">Đăng kí email để nhận tin tức</span>
                        </li>
                        <form action="#" method="post">
                            <input type="email" class="footer__info-item-input" placeholder="Email của bạn" required>
                            <input type="submit" class="footer__info-item-btn" value="Đặt Hàng">
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="grid wide">
        <div class="footer-copyright">
            <p class="footer-copyright__text">Copyright © fpt polytechnic Đà Nẵng</p>
            <img src="./images/pay/pay.png" class="footer-copyright__img">
        </div>
    </div>
</footer>
</div>






<div class="model">
    <div class="model-overlay"></div>
    <div class="model-container">
        <!-- <form action="" method="post"> -->
        <div class="model-header">
            <a href="#" class="model-control active">Đăng nhập</a>
            <div class="model-control-right">
                <a href="#" class="model-control">Đăng ký</a>
                <a href="#" class="model-control forgot-pass">Quên mật khẩu ?</a>
            </div>
        </div>

        <div class="model-body">

            <div class="model-body-form active">
                <form action="index.php?act=login" method="post" id='form__login'>
                    <div class="form-group">
                        <label for="enter-user" class="model-label"><i class="fas fa-user"></i> Tên đăng nhâp</label>
                        <input type="text" name="username" class="model-input form-control" id="enter-user">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="enter-pass" class="model-label"><i class="fas fa-unlock-alt"></i> Mật khẩu</label>
                        <input type="password" name="password" class="model-input form-control" id="enter-pass">
                        <span class="form-message"></span>
                    </div>
                    <input type="submit" name="login" class="model-btn model-btn-login" value="Đăng nhập">
                </form>
            </div>
            <div class="model-body-form">
                <form action="index.php?act=register" method="post" id='form__register'>
                    <div class="form-group">
                        <label for="enter-email" class="model-label"><i class="fas fa-envelope"></i> Email</label>
                        <input type="text" name="email" class="model-input" id="enter-email">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="enter-name" class="model-label"><i class="fas fa-user"></i> Họ và Tên</label>
                        <input type="text" name="name" class="model-input" id="enter-name">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="enter-user" class="model-label"><i class="fas fa-user"></i> Tên đăng nhâp</label>
                        <input type="text" name="username" class="model-input" id="enter-user">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="enter-pass" class="model-label"><i class="fas fa-unlock-alt"></i> Mật khẩu</label>
                        <input type="password" name="password" class="model-input" id="enter-pass">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="enter-pass" class="model-label"><i class="fas fa-unlock-alt"></i> Nhập lại mật khẩu</label>
                        <input type="password" name="passwordCheck" class="model-input" id="enter-passCheck">
                        <span class="form-message"></span>
                    </div>
                    <input type="submit" name="register" class="model-btn model-btn-regester" value="Đăng ký">
                </form>
            </div>
            <div class="model-body-form">
                <form action="index.php?act=forget-pass" method="post" id="forget-pass">
                    <div class="form-group">
                        <label for="enter-email" class="model-label"><i class="fas fa-user"></i> Nhập địa chỉ email của bạn</label>
                        <input type="text" name="email" class="model-input" id="enter-email">
                        <span class="form-message"></span>
                    </div>
                    <input type="submit" name="forget-pass" class="model-btn model-btn-login" value="Gửi">
                </form>
            </div>

        </div>

        <!-- </form> -->
    </div>

</div>
<script src="./js/index.js"></script>
<script>

    document.addEventListener('DOMContentLoaded', function () {
        Validator({
            form: '#form__register',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isEmail('#enter-email'),
                Validator.isRequired('#enter-name', 'Vui lòng nhập tên đầy đủ của bạn'),
                Validator.minLength('#enter-pass', 6),
                Validator.isRequired('#enter-passCheck'),
                Validator.isConfirmed('#enter-passCheck', function () {
                    return document.querySelector('#form__register #enter-pass').value;
                }, 'Mật khẩu nhập lại không chính xác')
            ],
        });

        Validator({
            form: '#form__login',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#enter-user'),
                Validator.isRequired('#enter-pass'),
                Validator.minLength('#enter-pass', 6),
            ],
        });

        Validator({
            form: '#forget-pass',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isEmail('#enter-email'),
            ],
        });

        Validator({
            form: '#change-pass',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.minLength('#enter-pass', 6),
                Validator.isRequired('#enter-passCheck'),
                Validator.isConfirmed('#enter-passCheck', function () {
                    return document.querySelector('#form__register #enter-pass').value;
                }, 'Mật khẩu nhập lại không chính xác')
            ],
        });

        Validator({
            form: '#edit-customer',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#enter-name'),
                Validator.isPhone('#enter-phone'),
                Validator.isEmail('#enter-email'),
            ],
        });
        Validator({
            form: '#bill-confirm',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#fullname'),
                Validator.isPhone('#phone'),
                Validator.isEmail('#email'),
                Validator.isRequired('#address'),
            ],
        });
    });

</script>
<script src="./js/validator.js"></script>



</body>

</html>