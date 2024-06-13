{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Web đặt lịch </title>--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"--}}
{{--        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">--}}
{{--    <style>--}}
{{--        * {--}}
{{--            padding: 0;--}}
{{--            margin: 0;--}}
{{--            box-sizing: border-box;--}}
{{--            font-family: "Poppins", sans-serif;--}}
{{--            cursor: pointer;--}}
{{--        }--}}

{{--        #wrapper {--}}
{{--            /* Kích thước màn hình là 1280 x 720 */--}}
{{--            width: 100%;--}}
{{--            height: 100vh;--}}
{{--        }--}}

{{--        #header {--}}
{{--            width: 100%;--}}
{{--            padding: 0px 30px;--}}
{{--            margin-top: 33px;--}}
{{--            display: flex;--}}
{{--            justify-content: space-between;--}}
{{--            align-items: center;--}}
{{--        }--}}

{{--        #menu {--}}
{{--            list-style: none;--}}
{{--            display: flex;--}}
{{--        }--}}

{{--        #menu .item {--}}
{{--            margin: 0px 25px;--}}
{{--        }--}}

{{--        #menu .item a {--}}
{{--            margin-left: 200px;--}}
{{--            color: #626a67;--}}
{{--            text-decoration: none;--}}
{{--        }--}}

{{--        #actions {--}}
{{--            display: flex;--}}
{{--        }--}}

{{--        #actions .item {--}}
{{--            margin-left: 22px;--}}
{{--        }--}}

{{--        #banner {--}}
{{--            width: 100%;--}}
{{--            background-image: url("images/banner2.jpg");--}}
{{--            height: 463px;--}}
{{--            margin-top: 40px;--}}
{{--            display: flex;--}}
{{--            padding: 0px 133px;--}}
{{--            position: relative;--}}
{{--        }--}}

{{--        saleof #banner .box-left,--}}
{{--        #banner .box-right {--}}
{{--            width: 50%;--}}
{{--        }--}}

{{--        #banner .box-left h2 {--}}
{{--            font-size: 48px;--}}
{{--            margin-top: 75px;--}}
{{--            color: #fff;--}}
{{--        }--}}

{{--        #banner .box-left p {--}}
{{--            color: #d0d0d0;--}}
{{--        }--}}

{{--        #banner .box-left button {--}}
{{--            width: 100%;--}}
{{--            height: 40px;--}}
{{--            margin-top: 41px;--}}
{{--            background: #1d1a1a;--}}
{{--            border: none;--}}
{{--            outline: none;--}}
{{--            color: #fff;--}}
{{--            font-weight: bold;--}}
{{--            border-radius: 20px;--}}
{{--            transition: 0.4s;--}}
{{--        }--}}

{{--        #banner .box-left button:hover {--}}
{{--            background: orange;--}}
{{--        }--}}

{{--        #banner .box-right {--}}
{{--            padding-left: 200px;--}}
{{--            display: flex;--}}
{{--            justify-content: center;--}}
{{--            align-items: center;--}}
{{--        }--}}

{{--        #banner .box-right img {--}}
{{--            margin: 0px 10px;--}}
{{--            animation: animation 3s infinite linear;--}}
{{--        }--}}

{{--        #banner .box-right img:nth-child(1) {--}}
{{--            animation-delay: 0.5s;--}}
{{--        }--}}

{{--        #banner .box-right img:nth-child(2) {--}}
{{--            animation-delay: 1s;--}}
{{--        }--}}

{{--        @keyframes animation {--}}
{{--            0% {--}}
{{--                transform: translateY(0px);--}}
{{--            }--}}

{{--            50% {--}}
{{--                transform: translateY(-10px);--}}
{{--            }--}}

{{--            100% {--}}
{{--                transform: translateY(0px);--}}
{{--            }--}}
{{--        }--}}

{{--        .to-bottom {--}}
{{--            position: absolute;--}}
{{--            bottom: -40px;--}}
{{--            left: 50%;--}}
{{--            transform: translateX(-50%);--}}
{{--        }--}}

{{--        #wp-products {--}}
{{--            display: flex;--}}
{{--            padding-top: 116px;--}}
{{--            padding-bottom: 78px;--}}
{{--            padding-left: 134px;--}}
{{--            padding-right: 134px;--}}
{{--        }--}}

{{--        #wp-products h2 {--}}
{{--            text-align: center;--}}
{{--            margin-bottom: 76px;--}}
{{--            font-size: 32px;--}}
{{--            color: #626a67;--}}
{{--        }--}}

{{--        .aside {--}}
{{--            width: 300px;--}}
{{--            background-color: burlywood;--}}
{{--            border-radius: 30px;--}}
{{--        }--}}

{{--        #list-products {--}}
{{--            margin-left: 100px;--}}
{{--            display: flex;--}}
{{--            list-style: none;--}}
{{--            justify-content: space-around;--}}
{{--            align-items: center;--}}
{{--            flex-wrap: wrap;--}}
{{--        }--}}

{{--        #list-products .item {--}}
{{--            width: 290px;--}}
{{--            height: 300px;--}}
{{--            background: #362f2f;--}}
{{--            border-radius: 10px;--}}
{{--            margin-bottom: 50px;--}}
{{--        }--}}

{{--        #list-products .item img {--}}
{{--            display: block;--}}
{{--            margin: 0px auto;--}}
{{--            margin-top: 100px;--}}

{{--        }--}}

{{--        #list-products .item .stars {--}}
{{--            display: flex;--}}
{{--            margin: 0px auto;--}}
{{--            width: 50%;--}}
{{--        }--}}

{{--        #list-products .item .name {--}}
{{--            text-align: center;--}}
{{--            color: #fff;--}}
{{--            font-weight: bold;--}}
{{--            margin-top: 21px;--}}
{{--        }--}}

{{--        #list-products .item .desc {--}}
{{--            text-align: center;--}}
{{--            color: #626a67;--}}
{{--        }--}}

{{--        #list-products.price {--}}
{{--            text-align: center;--}}
{{--            color: #f42424;--}}
{{--            font-weight: bold;--}}
{{--            margin-top: 20px;--}}
{{--        }--}}

{{--        .list-page {--}}
{{--            width: 50%;--}}
{{--            margin: 0px auto;--}}
{{--        }--}}

{{--        .list-page {--}}
{{--            display: flex;--}}
{{--            list-style: none;--}}
{{--            justify-content: center;--}}
{{--            align-items: center;--}}
{{--        }--}}

{{--        .list-page .item {--}}
{{--            margin: 0px 15px;--}}
{{--            width: 37px;--}}
{{--            height: 37px;--}}
{{--            background: #362f2f;--}}
{{--            border-radius: 50%;--}}
{{--            display: flex;--}}
{{--            justify-content: center;--}}
{{--            align-items: center;--}}
{{--        }--}}

{{--        .list-page .item a {--}}
{{--            color: #fff;--}}
{{--            text-decoration: none;--}}
{{--        }--}}

{{--        #comment {--}}
{{--            width: 1012px;--}}
{{--            height: 478px;--}}
{{--            margin: 0px auto;--}}
{{--            margin-top: 184px;--}}
{{--            margin-bottom: 50px;--}}
{{--        }--}}

{{--        #comment h2 {--}}
{{--            text-align: center;--}}
{{--            margin-bottom: 50px;--}}
{{--            font-size: 32px;--}}
{{--            color: #626a67;--}}
{{--        }--}}

{{--        #comment-body {--}}
{{--            display: flex;--}}
{{--            justify-content: center;--}}
{{--            align-items: center;--}}
{{--            width: 1000px;--}}
{{--            height: 400px;--}}
{{--            list-style: none;--}}
{{--            overflow: hidden;--}}
{{--        }--}}

{{--        #list-comment {--}}
{{--            width: 100%;--}}
{{--            height: 100%;--}}
{{--            list-style: none;--}}
{{--            transition: 0.5s;--}}
{{--        }--}}

{{--        #list-comment .item {--}}
{{--            width: 100%;--}}
{{--            height: 100%;--}}
{{--            background: #362f2f;--}}
{{--            border-radius: 20px;--}}
{{--            padding-top: 50px;--}}
{{--        }--}}

{{--        #list-comment .item .avatar {--}}
{{--            text-align: center;--}}
{{--            margin-top: 13px;--}}
{{--        }--}}

{{--        #list-comment .item .stars {--}}
{{--            display: flex;--}}
{{--            margin: 0px auto;--}}
{{--            width: 50%;--}}
{{--            margin-top: 32px;--}}
{{--            justify-content: center;--}}
{{--            align-items: center;--}}
{{--        }--}}

{{--        #list-comment .item .name {--}}
{{--            text-align: center;--}}
{{--            font-weight: bold;--}}
{{--            color: #fff;--}}
{{--        }--}}

{{--        #list-comment .item .text {--}}
{{--            padding: 20px 50px;--}}
{{--            color: #fff;--}}
{{--        }--}}

{{--        #footer {--}}
{{--            width: 100%;--}}
{{--            background: rgb(0, 0, 0, 0.79);--}}
{{--            height: 322px;--}}
{{--            margin-top: 338px;--}}
{{--            padding: 0px 63px;--}}
{{--            padding-top: 57px;--}}
{{--            display: flex;--}}
{{--            justify-content: space-around;--}}
{{--        }--}}

{{--        #footer .box {--}}
{{--            width: 250px;--}}
{{--            color: #fff;--}}
{{--        }--}}

{{--        #footer .box .quick-menu {--}}
{{--            margin-top: 40px;--}}
{{--        }--}}

{{--        #footer .box .quick-menu .item {--}}
{{--            margin-bottom: 12px;--}}
{{--        }--}}

{{--        #footer .box .quick-menu,--}}
{{--        .item a {--}}
{{--            color: #fff;--}}
{{--            text-decoration: none;--}}
{{--        }--}}

{{--        #footer .box form input {--}}
{{--            width: 294px;--}}
{{--            height: 42px;--}}
{{--            background: transparent;--}}
{{--            padding-left: 20px;--}}
{{--            color: #fff;--}}
{{--            margin-top: 30px;--}}
{{--        }--}}

{{--        #footer .box form button {--}}
{{--            background: #362f2f;--}}
{{--            box-shadow: 5px 5px 4px rgba(0, 0, 0.25);--}}
{{--            width: 163px;--}}
{{--            height: 38px;--}}
{{--            margin-top: 29px;--}}
{{--            color: #fff;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}


{{--<body>--}}
{{--    <div id="wrapper">--}}
{{--        <div scope="row"></div>--}}
{{--        <div id="banner">--}}
{{--        </div>--}}
{{--        <div id="wp-products">--}}
{{--            <aside class="aside">--}}
{{--                <h4 style="margin-left: 20px">Danh mục</h4>--}}
{{--                @foreach ($categories as $i => $iteam)--}}
{{--                    <a href="" class="nav-link nav-link active">--}}
{{--                        <p>--}}
{{--                            {{ $iteam->category_name }}--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                @endforeach--}}
{{--            </aside>--}}
{{--            <ul id="list-products" style="text-align: center">--}}
{{--                @foreach ($rooms as $iteam)--}}
{{--                    <div class="card" style="width: 18rem; margin-top:30px">--}}
{{--                        <img src="{{ asset($iteam->images) }}" style="width:150px; height:100px; margin-left:80px"--}}
{{--                            class="card-img-top" alt="...">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Card title</h5>--}}
{{--                            <p class="card-text">{{ $iteam->description }}</p>--}}
{{--                            <p class="card-text">{{ $iteam->cate_id }}</p>--}}
{{--                            <p class="price">{{ number_format($iteam->price, 0, ',', '.') }} VND/1 DAY</p>--}}
{{--                            <a href="#" class="btn btn-primary">Đặt phòng ngay</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--                {{ $rooms->links() }}--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <div id="comment">--}}
{{--            <h2>NHẬN XÉT CỦA KHÁCH HÀNG</h2>--}}
{{--            <div id="comment-body">--}}
{{--                <div class="prev">--}}
{{--                    <a href="#">--}}
{{--                        <img src="assets/prev.png" alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <ul id="list-comment">--}}
{{--                    <li class="item">--}}
{{--                        <div class="avatar">--}}
{{--                            <img src="assets/avatar_1.png" alt="">--}}

{{--                        </div>--}}
{{--                        <div class="stars">--}}
{{--                            <span>--}}
{{--                                <img src="assets/star.png" alt="">--}}
{{--                            </span>--}}
{{--                            <span>--}}
{{--                                <img src="assets/star.png" alt="">--}}
{{--                            </span>--}}
{{--                            <span>--}}
{{--                                <img src="assets/star.png" alt="">--}}
{{--                            </span>--}}
{{--                            <span>--}}
{{--                                <img src="assets/star.png" alt="">--}}
{{--                            </span>--}}
{{--                            <span>--}}
{{--                                <img src="assets/star.png" alt="">--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                        <div class="name">Đinh Hữu Thành</div>--}}

{{--                        <div class="text">--}}
{{--                            <p>Lorem Ipsum is simply dummy text of the printing and--}}
{{--                                typesetting industry. Lorem Ipsum has been the industry's--}}
{{--                                standard dummy text ever since the 1500s, when an unknown--}}
{{--                                printer took a galley of type and scrambled it to make a type--}}
{{--                                specimen book.</p>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="item">--}}
{{--                        <div class="avatar">--}}
{{--                            <img src="assets/avatar_1.png" alt="">--}}

{{--                        </div>--}}
{{--                        <div class="stars">--}}
{{--                            <span>--}}
{{--                                <img src="assets/star.png" alt="">--}}
{{--                            </span>--}}
{{--                            <span>--}}
{{--                                <img src="assets/star.png" alt="">--}}
{{--                            </span>--}}
{{--                            <span>--}}
{{--                                <img src="assets/star.png" alt="">--}}
{{--                            </span>--}}
{{--                            <span>--}}
{{--                                <img src="assets/star.png" alt="">--}}
{{--                            </span>--}}
{{--                            <span>--}}
{{--                                <img src="assets/star.png" alt="">--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                        <div class="name">Trần Ngọc Sơn</div>--}}

{{--                        <div class="text">--}}
{{--                            <p>Lorem Ipsum is simply dummy text of the printing and--}}
{{--                                typesetting industry. Lorem Ipsum has been the industry's--}}
{{--                                standard dummy text ever since the 1500s, when an unknown--}}
{{--                                printer took a galley of type and scrambled it to make a type--}}
{{--                                specimen book.</p>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="item">--}}
{{--                        <div class="avatar">--}}
{{--                            <img src="assets/avatar_1.png" alt="">--}}

{{--                        </div>--}}
{{--                        <div class="stars">--}}
{{--                            <span>--}}
{{--                                <img src="assets/star.png" alt="">--}}
{{--                            </span>--}}
{{--                            <span>--}}
{{--                                <img src="assets/star.png" alt="">--}}
{{--                            </span>--}}
{{--                            <span>--}}
{{--                                <img src="assets/star.png" alt="">--}}
{{--                            </span>--}}
{{--                            <span>--}}
{{--                                <img src="assets/star.png" alt="">--}}
{{--                            </span>--}}
{{--                            <span>--}}
{{--                                <img src="assets/star.png" alt="">--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                        <div class="name">Nguyễn Trần Vi</div>--}}

{{--                        <div class="text">--}}
{{--                            <p>Lorem Ipsum is simply dummy text of the printing and--}}
{{--                                typesetting industry. Lorem Ipsum has been the industry's--}}
{{--                                standard dummy text ever since the 1500s, when an unknown--}}
{{--                                printer took a galley of type and scrambled it to make a type--}}
{{--                                specimen book.</p>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="next">--}}
{{--                    <a href="#">--}}
{{--                        <img src="assets/next.png" alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div id="footer">--}}
{{--            <div class="box">--}}
{{--                <div class="logo">--}}
{{--                    <img src="assets/logo.png" alt="">--}}
{{--                </div>--}}
{{--                <p>Cung cấp sản phẩm với chất lượng an toàn cho quý khách</p>--}}
{{--            </div>--}}
{{--            <div class="box">--}}
{{--                <h3>NỘI DUNG</h3>--}}
{{--                <ul class="quick-menu">--}}
{{--                    <div class="item">--}}
{{--                        <a href="">Trang chủ</a>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <a href="">Sản phẩm</a>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <a href="">Blog</a>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <a href="">Liên hệ</a>--}}
{{--                    </div>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="box">--}}
{{--                <h3>LIÊN HỆ</h3>--}}
{{--                <form action="">--}}
{{--                    <input type="text" placeholder="Địa chỉ email">--}}
{{--                    <button>Nhận tin</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- <script src="script.js"></script> -->--}}
{{--</body>--}}
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"--}}
{{--    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">--}}
{{--</script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"--}}
{{--    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">--}}
{{--</script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"--}}
{{--    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">--}}
{{--</script>--}}

{{--</html> --}}
