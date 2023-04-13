<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Sona Template" />
    <meta name="keywords" content="Sona, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sona | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('sona-master/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('sona-master/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('sona-master/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('sona-master/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('sona-master/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('sona-master/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('sona-master/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('sona-master/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('sona-master/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('sona-master/css/style.css') }}" type="text/css">
    <script>
        function addcart(x) {

        }
    </script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <img src="./img/flag.jpg" alt="" />
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Zi</a></li>
                        <li><a href="#">Fr</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="bk-btn">Booking Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./rooms.html">Rooms</a></li>
                <li><a href="./about-us.html">About Us</a></li>
                <li>
                    <a href="./pages.html">Pages</a>
                    <ul class="dropdown">
                        <li>
                            <a href="./room-details.html">Room Details</a>
                        </li>
                        <li>
                            <a href="./blog-details.html">Blog Details</a>
                        </li>
                        <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">News</a></li>
                <li>
                    <i class="fa-solid fa-cart-shopping"></i>Cart</a>
                </li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>

    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li>
                                <i class="fa fa-phone"></i>090909090
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                thanhdhph1888$@fpt.edu.vn
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="img/logo.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li><a href="http://127.0.0.1:8000/">Home</a></li>
                                    <li class="active">
                                        <a href="http://127.0.0.1:8000/">Rooms</a>
                                    </li>
                                    <li>
                                        <a href="http://127.0.0.1:8000/">About Us</a>
                                    </li>
                                    <li>
                                        <a href="http://127.0.0.1:8000/">Pages</a>
                                        {{-- <ul class="dropdown">
                                            <li>
                                                <a
                                                    href="http://127.0.0.1:8000/">Room
                                                    Details</a>
                                            </li>
                                            <li>
                                                <a href="./blog-details.html">Blog Details</a>
                                            </li>
                                            <li>
                                                <a href="#">Family Room</a>
                                            </li>
                                            <li>
                                                <a href="#">Premium Room</a>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    <li><a href="http://127.0.0.1:8000/">News</a></li>
                                    <li>
                                        <a href="http://127.0.0.1:8000/hoadon"><i
                                                class="fa-solid fa-cart-shopping"></i>Cart</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Chi tiết phòng</h2>
                        {{-- <div class="bt-option">
                            <a href="./home.html">Home</a>
                            <span>Rooms</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Room Details Section Begin -->
    {{-- chi tiết phòng --}}
    <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-details-item">
                        <img src="{{ asset($rooms->images) }}" style="width:800px; height:400px" alt="ảnh" />
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3>Premium King Room</h3>
                                <div class="rdt-right">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                    <a href="#">Booking Now</a>
                                </div>
                            </div>
                            <h2>{{ number_format($rooms->price, 0, ',', '.') }}<span>/Pernight</span></h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max persion 5</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>
                                            Wifi, Television, Bathroom,...
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Thuộc danh mục:</td>
                                        <td>{{ $rooms->categories->category_name }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="f-para">
                                {{ $rooms->mota }}
                            </p>
                        </div>
                    </div>
                </div>
                {{-- đặt lịch --}}
                <div class="col-lg-4">
                    <div class="room-booking">
                        <h3>Nhập thông tin đặt phòng</h3>
                        <p id="success-message" style="display:none"></p>
                        <form method="POST" action="{{ route('order.store') }}" onsubmit="addcart(event)">
                            @csrf
                            <div class="datecheck-">
                                <label for="date-out">Tên khách hàng</label>
                                <input type="text" name="name" />
                                <span id="error-message" style="color: red;"></span>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Email</label>
                                <input type="email" name="email" />
                                <span id="error-message" style="color: red;"></span>
                            </div>
                            <div class="check-date">
                                <label for="date-in">ảnh phòng</label>
                                <img src="{{ asset($rooms->images) }}" alt="">

                            </div>
                            <div class="check-date">
                                <label for="date-in">Ngày bắt đầu</label>
                                <input type="date" name="date-in" onchange="updatePrice()" />
                                <span id="error-message" style="color: red;"></span>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Ngày kết thúc</label>
                                <input type="date" name="date-out" onchange="updatePrice()" />
                                <span id="error-message" style="color: red;"></span>
                            </div>
                            <div class="check-date">
                                <label for="date-out">giá thuê</label>
                                <input type="text" name="price" id="price" onchange="updatePrice()"
                                    value={{ number_format($rooms->price, 0, ',', '.') }} />
                            </div>
                            <button onclick="addcart()">
                                Đặt ngay
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Details Section End -->

    <!-- Footer Section Begin -->
    @include('user.footer')
    <!-- Js Plugins -->
    <script src="{{ asset('sona-master/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('sona-master/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('sona-master/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('sona-master/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('sona-master/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('sona-master/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('sona-master/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('sona-master/js/main.js') }}"></script>
    {{-- xử lý đặt hàng --}}
    <script>
        function updatePrice() {
            // Chuyển đổi giá thuê thành kiểu số
            var price = parseInt(document.getElementById("price").value.replace(/[^0-9]/g, ''));
            var checkInDate = document.getElementsByName("date-in")[0].value;
            var checkOutDate = document.getElementsByName("date-out")[0].value;
            if (price && checkInDate && checkOutDate) { // Kiểm tra giá và ngày hợp lệ
                checkInDate = new Date(checkInDate);
                checkOutDate = new Date(checkOutDate);
                var sumday = (checkOutDate - checkInDate) / (1000 * 60 * 60 * 24);
                if (sumday > 0) { // Kiểm tra số ngày hợp lệ
                    var pricenew = sumday * price;
                    document.getElementById("price").value = pricenew.toLocaleString('vi-VN') + ' VND';
                }
            }
        }
        function addcart(event) {
            event.preventDefault();
            var errorMessage = document.getElementById("error-message");
            var nameInput = document.getElementsByName("name")[0];
            var emailInput = document.getElementsByName("email")[0];
            var checkInInput = document.getElementsByName("date-in")[0];
            var checkOutInput = document.getElementsByName("date-out")[0];
            var priceInput = document.getElementById("price");
            var valid = true;
            if (nameInput.value.trim() === "") {
                errorMessage.innerText = "Vui lòng nhập tên khách hàng";
                valid = false;
            } else if (emailInput.value.trim() === "") {
                errorMessage.innerText = "Vui lòng nhập email";
                valid = false;
            } else if (checkInInput.value.trim() === "") {
                errorMessage.innerText = "Vui lòng nhập ngày bắt đầu";
                valid = false;
            } else if (checkOutInput.value.trim() === "") {
                errorMessage.innerText = "Vui lòng nhập ngày kết thúc";
                valid = false;
            } else if (priceInput.value.trim() === "") {
                errorMessage.innerText = "Vui lòng nhập giá thuê";
                valid = false;
            }
            if (valid) {
                errorMessage.style.display = "none";
                alert("Bạn đã đặt phòng thành công");
                setTimeout(function() {
                    nameInput.value = "";
                    emailInput.value = "";
                    checkInInput.value = "";
                    checkOutInput.value = "";
                    priceInput.value = "";
                    location.reload();
                }, 500); // Thời gian đợi trước khi reload trang (0,5 giây)
            } else {
                errorMessage.style.display = "block";
            }
        }
    </script>


</body>

</html>
