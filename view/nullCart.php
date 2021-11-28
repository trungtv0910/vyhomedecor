<style>
    /* a{display: block;text-decoration: none;} */
    .cart {
       min-height: 600px;
        /* margin: 0 auto; */

    }

    .title {
        font-size: 1.8rem;
        font-weight: 500px;
        border: none;
    }

    .buy {
        width: 1005;
        text-align: center;
        /* background-color: #efefef; */
        border-radius: 5px;
        min-height: 350px;
        font-size: 1.6rem;
        padding-top: 40px;
    }

    .nextBuy {
        cursor: pointer;
        padding: 10px 20px;
        background-color: var(--primary-color);
        border: none;
        color: var(--white-color);
        border-radius: 2px;
        font-size: 1.4rem;
        transition: all 0.3s linear;
        outline: none;
        width: 200px;
        margin: 0px auto;

    }

    .nextBuy:hover {
        color: var(--white-color);
        background-color: var(--hover-color) !important;
    }

    .buy a {
        color: var(--white-color);
        text-decoration: none;
    }

    .nextBuy:hover a {
        color: var(--white-color);
    }

    .buy img {
        width: 20%;
    }
</style>
<div class="grid wide cart">
    <div class="">
        <div class="title">GIỎ HÀNG CỦA TÔI</div>
        <div class="buy">
            <img src="images/logo.png" alt=""><br>
            <span>Không có sản phẩm trong giỏ hàng</span><br><br>
            <a href="index.php">
                <div class="nextBuy">Tiếp Tục Mua Sắm</div>
            </a>
        </div>
    </div>
</div>