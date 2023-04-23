<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sona | Template</title>
    {{-- copy css navigation --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

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
    <style>
        .aside {
            width: 160px;
            background-color: rgb(230, 210, 210);
        }
    </style>
</head>

<body>
    @include('user.header')
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Thành ph18884 Hotel</h1>
                        <p>Phục vụ tận tình chu đáo với các dịch vụ đẳng cấp, xứng đáng với số tiền
                            mà bạn bỏ ra
                        </p>
                        <a href="#" class="primary-btn">Discover Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{ asset('sona-master/img/hero/hero-1.jpg') }}"></div>
            <div class="hs-item set-bg" data-setbg="{{ asset('sona-master/img/hero/hero-2.jpg') }}"></div>
            <div class="hs-item set-bg" data-setbg="{{ asset('sona-master/img/hero/hero-3.jpg') }}"></div>
        </div>
    </section>
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What We Do</span>
                        <h2>Chi tiết đơn hàng</h2>
                    </div>
                </div>
            </div>
            <div class="card text-white bg-primary mb-3" style="width:40%">
                <p>Chúc mừng bạn đã đặt phòng thành công</p>
                <br>
                <p>chi tiết hóa đơn bao gồm</p>
                <br>
                <p>Tên người đặt: {{ $hoadon->user }}</p>
                <br>
                <p>Email người đặt:{{ $hoadon->email }}</p>
                <br>
                <p>Mã phòng thuê:{{ $hoadon->room_id }}</p>
                <br>
                <p>Số ngày thuê:{{ $hoadon->date_rent }}</p>
                <br>
                <p>Số tiền phải trả là :{{ $hoadon->money }}</p>
                <br>
                <button class="btn btn-success" type="onclick">Thanh toán ngay</button>
                <a class="btn btn-warning" href="http://127.0.0.1:8000">Quay lại</a>
            </div>
        </div>
    </section>
    {{-- chỗ này để khoảng trắng --}}
    <section class="testimonial-section spad">
        <div class="container">
        </div>
    </section>

    {{-- footer --}}
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
</body>

</html>







{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <title>Hóa đơn</title>
</head>

<body>
    <div class="container">
      
    </div>

</body>

</html> --}}
