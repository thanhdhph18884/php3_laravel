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
                {{-- <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3>Booking Your Hotel</h3>
                        <form action="#">
                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="text" class="date-input" id="date-in">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="text" class="date-input" id="date-out">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="select-option">
                                <label for="guest">Guests:</label>
                                <select id="guest">
                                    <option value="">2 Adults</option>
                                    <option value="">3 Adults</option>
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="room">Room:</label>
                                <select id="room">
                                    <option value="">1 Room</option>
                                    <option value="">2 Room</option>
                                </select>
                            </div>
                            <button type="submit">Check Availability</button>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{ asset('sona-master/img/hero/hero-1.jpg') }}"></div>
            <div class="hs-item set-bg" data-setbg="{{ asset('sona-master/img/hero/hero-2.jpg') }}"></div>
            <div class="hs-item set-bg" data-setbg="{{ asset('sona-master/img/hero/hero-3.jpg') }}"></div>
            @foreach ($banner as $iteam)
                <div class="hs-item set-bg" data-setbg="{{ asset($iteam->images) }}"></div>
            @endforeach
        </div>
    </section>
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What We Do</span>
                        <h2>Danh mục khách sạn</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($categories as $iteam)
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-item">
                            <i class="flaticon-036-parking"></i>
                            <h4>{{ $iteam->category_name }}</h4>
                            <p>
                                {{ $iteam->mota }}
                            </p>
                        </div>
                    </div>
                @endforeach
                {{ $categories->links() }}
            </div>
        </div>
    </section>
    @include('user.content')
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
